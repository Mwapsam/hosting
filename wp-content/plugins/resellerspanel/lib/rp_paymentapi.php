<?php
// Examples initialize
//$rp_api = new rp_paymentapi( API Hostname URL , User Name , Password);
//$rp_api = new rp_paymentapi( 'https://test.com/' , 'user' , 'pass');
// Single command
//$rp_api->command('countries', 'get'));
// Multi commands
//$rp_api->commands(array(array('section' => 'countries', 'command' => 'get'), array('section' => 'domains', 'command' => 'info')));
class rp_paymentapi_exception extends Exception{
	public $code;
	function __construct($code, $msg){
		$this->code = $code;
		parent::__construct('<p style="color:#CC0000;font-weight:bold;">Resellers-Panel\'s error: '.$msg.'</p>');
	}
}
class rp_paymentapi {
	const CODE = 'error_code';
	const MSG = 'error_msg';	
	private $url = '';
	private $username = '';
	private $password = '';
	private $method = 'POST';
	private $cache = false;
	private $cache_dir = '';
	private $cache_dir_parent = '';

	function __construct($url, $username, $password, $cache = true) {
		$this->url = rtrim($url, '/');
		$this->username = $username;
		$this->password = $password;
		$this->cache = $cache;
		$this->cache_dir = dirname(dirname( __FILE__ )) . '/tmp/rp_paymentapi/';

		if (!file_exists($this->cache_dir)){
			$this->cache_dir_parent = dirname($this->cache_dir);
			if (!file_exists($this->cache_dir_parent)) mkdir($this->cache_dir_parent);
			if (!is_writable($this->cache_dir_parent)){
				throw new Exception('Temporary dir is not writable ' . $this->cache_dir_parent);
			} else
				mkdir($this->cache_dir);
		}
		
		if (!is_dir($this->cache_dir))
			throw new Exception('Invalid cache dir ' . $this->cache_dir);
		
		if (!is_writable($this->cache_dir))
			throw new Exception('Cache dir is not writable ' . $this->cache_dir);
			
		if ($this->method == 'POST' && !function_exists('curl_init'))
			$this->method = 'GET';
	}

	function usePOST() {
		$this->method = 'POST';
	}

	function useGET() {
		$this->method = 'GET';
	}

	// fetch data from the cache, if available
	private function cacheExists($md5) {
		$filename = $this->cache_dir . '/' . $md5;
		
		if (!@file_exists($filename))
			return false;

		if (!($fp = @fopen($filename, 'r')))
			return false;

		if (!@flock($fp, LOCK_SH))
			return false;

		$filesize = @filesize($filename);
		$expire = @fread($fp, 4); //expire-nal cache - nevaliden

		if (!($arr = @unpack('Iexpire', $expire)))
			return false;

		$expire = $arr['expire'];

		if ($expire < time()) {
			@fclose($fp);
			@unlink($filename);
			return false;
		}

		$result = @fread($fp, $filesize - 4);
		$result = @unserialize(@gzuncompress($result));
		@flock($fp, LOCK_UN);
		@fclose($fp);

		return $result;
	}
	
	// store data in the cache 
	private function cacheAdd($md5, $value, $ttl = 3600) {
		$filename = $this->cache_dir . '/' . $md5;

		if (!($fp = @fopen($filename, 'w')))
			return false;

		if (!@flock($fp, LOCK_EX))
			return false;

		$value_c = gzcompress(serialize($value));

		$expire = time() + $ttl;
		$expire = pack('I', $expire);

		@fwrite($fp, $expire); // write 4 bytes timestamp
		@fwrite($fp, $value_c, strlen($value_c)); // then data

		@fflush($fp);
		@flock($fp, LOCK_UN);
		@fclose($fp);

		/*
		if ($store_id = array_key_r('store_id', $value))
			$this->make_ln('store_id', $store_id, $key);
		if ($reseller_id = array_key_r('reseller_id', $value))
			$this->make_ln('reseller_id', $reseller_id, $key); 
		 */

		return true;
	}

	private function make_ln($key, $value, $filename) {
		$dir = $this->cache_dir;
		$path = $dir . '/' . $key;
		if (!file_exists($path)) {
			mkdir($path);
			chmod($path, 0777);
		}
		$path .= '/' . $value;
		if (!file_exists($path)) {
			mkdir($path);
			chmod($path, 0777);
		}
		if (file_exists($path . '/' . $filename))
			return;

		symlink($dir . '/' . $filename, $path . '/' . $filename);
	}

	public function command($section, $command, $parameters = array(), $cache = NULL) {
		$method = 'command_' . strtolower($this->method);

		if (($cache || $this->cache) && $answer = $this->cacheExists(md5($this->username . $this->password . $section . $command . serialize($parameters))))
			return $answer;

		$cmd = $this->$method($section, $command, $parameters);
		if(!$cmd)
			throw new rp_paymentapi_exception(0,'No connection to the api');
		//if ($cmd[self::CODE]!== 0 ) echo $cmd[self::MSG];
		//if ($cmd[self::CODE]!== 0 ) throw new rp_paymentapi_exception($cmd[self::CODE], $cmd[self::MSG]);
		if ($cmd[self::CODE] == 0 && $cmd['ttl'] > 0 && ($this->cache || $cache))
			$this->cacheAdd(md5($this->username . $this->password . $section . $command . serialize($parameters)), $cmd);
			
		//if ($cmd[self::CODE]!=0) throw new rp_paymentapi_exception($cmd[self::CODE], $cmd[self::MSG]);
		
		return $cmd;
	}

	public function commands($data_array, $cache = NULL) {
		$method = 'commands_' . strtolower($this->method);

		if (($cache || $this->cache) && $answer = $this->cacheExists(md5($this->username . $this->password . serialize($data_array))))
			return $answer;

		$result = $this->$method($data_array);
		$ttl = 0;
		if (!$result || !is_array($result))
			throw new rp_paymentapi_exception(0,'No connection to the api');
		foreach ($result as $command) {
			if (!array_key_exists('ttl', $command) || !($command['ttl'] > 0))
				$ttl = -1; // got command without TTL, don't cache it 
			elseif ($ttl >= 0 && array_key_exists('ttl', $command) && $command['ttl'] > 0 && ($command['ttl'] < $ttl || ($ttl == 0)))
				$ttl = $command['ttl'];
		}
		if ($ttl > 0)
			$this->cacheAdd(md5($this->username . $this->password . serialize($data_array)), $result);

		foreach($result as $cmd){
			//if ($cmd[self::CODE]!=0) throw new rp_paymentapi_exception($cmd[self::CODE], $cmd[self::MSG]);
		}
		
		return $result;
	}

	private function command_post($section, $command, $parameters) {
		if (!$curl = curl_init($this->url . '/'))
			return false;

		$parameters['section'] = $section;
		$parameters['command'] = $command;
		$parameters['auth_username'] = $this->username;
		$parameters['auth_password'] = $this->password;
		$parameters['return_type'] = 'serialization';

		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($parameters));
		
		if (!$response = curl_exec($curl))
			throw new rp_paymentapi_exception(curl_errno($curl), curl_error($curl));
		

		$result = unserialize($response);
		if (!is_array($result))
			throw new rp_paymentapi_exception(0, 'Invalid response: '.$result);

		return $result[1];
	}

	private function commands_post($data_array) {
		if (!$curl = curl_init($this->url . '/'))
			return false;

		$params['auth_username'] = $this->username;
		$params['auth_password'] = $this->password;
		$params['commands'] = &$data_array;
		$params['return_type'] = 'serialization';

		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params));

		if (!$response = @curl_exec($curl))
			return false;

		$result = @unserialize($response);
		if (!is_array($result))
			return false;

		return $result;
	}

	private function command_get($section, $command, $parameters) {
		if (!is_array($parameters)) return false;

		$username = urlencode($this->username);
		$password = urlencode($this->password);

		$path = "/?auth_username=$username&auth_password=$password&section=$section&command=$command&return_type=serialization&";
		$path .= http_build_query($parameters);

		if (!($data = @file_get_contents($this->url . $path)))
			return false;

		$result = @unserialize($data);
		if (!is_array($result))
			return false;

		return $result[1];
	}

	private function commands_get($data_array) {
		$username = urlencode($this->username);
		$password = urlencode($this->password);

		$path = "/?auth_username=$username&auth_password=$password&return_type=serialization&";
		$path .= http_build_query(array('commands' => $data_array));

		if (!($data = @file_get_contents($this->url . $path)))
			return false;

		$result = unserialize($data);
		if (!is_array($result))
			return false;

		return $result;
	}
}
?>