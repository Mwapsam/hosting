<?php

class rp_crypt{
	private $key = null; 
	private $iv = null;
	private $php_compatibility = true;

	public function __construct() {
		// this function is deprecated since php 7.1
		if (!function_exists('mcrypt_module_open')) {
			$this->php_compatibility = false;
			return;
		}

		/* Open the cipher */
		$td = mcrypt_module_open('rijndael-256', '', 'ofb', '');

		/* Create the IV and determine the keysize length, use MCRYPT_RAND
		 * on Windows instead */
		$is = mcrypt_enc_get_iv_size($td);
		$iv = substr(md5('f#2@f*g&c)n_-1=gq+b.?{1}fob990jasg'), 0, $is);
		
		$ks = mcrypt_enc_get_key_size($td);

		/* Create key */
		$key = substr(md5('ht!nb#9%32l#m@nsa}]":pouep;#pouepasmnwb$%^Z*[{832lkas'), 0, $ks);
		mcrypt_module_close($td);
		$this->key = $key;
		$this->iv = $iv;
	}
	public function encrypt($data){
		$this->init();
		$encrypted = mcrypt_generic($this->td, $data);
		$this->deinit();
		return urlencode($encrypted);
	}
	public function decrypt($encrypted){
		if (!$this->php_compatibility)
			return file_get_contents("https://duoservers.com/plugin/decrypt/?value={$encrypted}");

		$this->init();
		$decrypted = mdecrypt_generic($this->td, urldecode($encrypted));
		$this->deinit();
		return trim($decrypted);
	}
	private $td = null;
	private function init(){
		/* Open the cipher */
		$this->td = mcrypt_module_open('rijndael-256', '', 'ofb', '');
		/* Intialize encryption */
		mcrypt_generic_init($this->td, $this->key, $this->iv);
	}
	private function deinit(){
		 /* Terminate encryption/decryption handle and close module */
		mcrypt_generic_deinit($this->td);
		mcrypt_module_close($this->td);
	}
}
?>
