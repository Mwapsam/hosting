<?php
function _rp_get_currency_symbol($currency = 'USD')
{
	$symbols = array('USD'=>'$', 'EUR'=>'&euro;', 'GBP'=>'&pound;', 'AUD'=>'A$', 'CAD'=>'C$');
	return $symbols[$currency];
}
 
function _rp_get_store_texts($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	if (empty($params['hostname'])) {
		$urlparts = parse_url(site_url());
		$params['hostname'] = str_replace('www.', '', $urlparts['host']);
	}


	$result = $GLOBALS['rp_api']->command('new_domains_templates', 'get_reseller_hosting_store_templates', $params);

	if($result['error_code'] == 0)
		return $result['result'];
	else return;
}

function _rp_get_plans($params = array(), $mapped_by = 'rp_product_id')
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_plans', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	if ($mapped_by)
	{
		$plans = array();
		if(!empty($result['plans']))
			foreach($result['plans'] as $k=>$v)
				$plans[$v[$mapped_by]] = $v;
		return $plans;
	}
	return $result['plans'];
}

function _rp_get_ssl_certificates($params = array(), $mapped_by = 'name') {
	if (empty($GLOBALS['rp_api']))
		return false;

	try {
		$result = $GLOBALS['rp_api']->command('products', 'get_ssl_certificates', $params);
	} catch (rp_payment_api_exception $e) {
		if (current_user_can('administrator'))
			return $e->getMessage();
		else
			return RP_API_ERROR;

		if ($mapped_by) {
			$ssls = array();
			if (!empty($result['ssl_certificates']))
				foreach ($result['ssl_certificates'] as $k => $v)
					$ssls[$v[$mapped_by]] = $v;

			return $ssls;
		}
	}

	return $result['ssl_certificates'];
}

function _rp_get_vps_plans($params = array(), $mapped_by = 'rp_product_id')
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_vps', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	if ($mapped_by and is_array($result['plans']))
	{
		$plans = array();
		if(!empty($result['plans']))
			foreach($result['plans'] as $k=>$v)
				$plans[$v[$mapped_by]] = $v;
		return $plans;
	}
	return $result['plans'];
}

function _rp_get_vps_openvz_plans($params = array(), $mapped_by = 'rp_product_id') {
	if (empty($GLOBALS['rp_api']))
		return false;

	try {
		$result = $GLOBALS['rp_api']->command('products', 'get_vps', array_merge(array('vps_type' => 'solusvm'), $params));
	} catch(rp_paymentapi_exception $e) {
		if (current_user_can('administrator'))
			return $e->getMessage();
		else
			return RP_API_ERROR;
	}
	if ($mapped_by and is_array($result['plans'])) {
		$plans = array();

		if (!empty($result['plans']))
			foreach ($result['plans'] as $k => $v) {
				$plans[$v[$mapped_by]] = $v;
			}

		return $plans;
	}

	return $result['plans'];
}

function _rp_get_vps_kvm_plans($params = array(), $mapped_by = 'rp_product_id') {
	if (empty($GLOBALS['rp_api']))
		return false;

	try {
		$result = $GLOBALS['rp_api']->command('products', 'get_vps', array_merge(array('vps_type' => 'kvm'), $params));
	} catch (rp_payment_api_exception $e) {
		if (current_user_can('administrator'))
			return $e->getMessage();

		return RP_API_ERROR;
	}

	if ($mapped_by && is_array($result['plans'])) {
		$plans = array();

		if (!empty($result['plans']))
			foreach ($result['plans'] as $k => $v) {
				$plans[$v[$mapped_by]] = $v;
			}

		return $plans;
	}

	return $result['plans'];
}

function _rp_get_vps_os($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('oses', 'vps_os', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['vps_os'];
}

function _rp_get_vps_upgrades($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_vps_upgrades', $params);
		$upgrades = rp_store_upgrades_edit($result['upgrades']);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $upgrades;
}

function _rp_get_vps_kvm_upgrades($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_vps_upgrades', array_merge(array('vps_type' => 'kvm'), $params));
		$upgrades = rp_store_upgrades_edit($result['upgrades']);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $upgrades;
}

function _rp_get_semidedicated_plans($params = array(), $mapped_by = 'rp_product_id') {
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_semidedicated', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	if ($mapped_by and is_array($result['plans'])){
		$plans = array();

		if (!empty($result['plans']))
			foreach ($result['plans'] as $k => $v) {
				$plans[$v[$mapped_by]] = $v;
			}

		return $plans;
	}
	return $result['plans'];
}

function _rp_get_dedicated_plans($params = array(), $mapped_by = 'rp_product_id')
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_dedicated', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	if ($mapped_by and is_array($result['plans']))
	{
		$plans = array();
		if(!empty($result['plans']))
			foreach($result['plans'] as $k=>$v)
				$plans[$v[$mapped_by]] = $v;
		return $plans;
	}
	return $result['plans'];
}

function _rp_get_dedicated_os($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('oses', 'dedicated_os', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['dedicated_os'];
}

function _rp_get_dedicated_upgrades($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_dedicated_upgrades', $params);
		$upgrades = rp_store_upgrades_edit($result['upgrades']);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $upgrades;
}

function _rp_get_datacenters($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('datacenters', 'get_datacenters', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	
	$datacenters = array();
	
	if(is_array($result['datacenters']))
	{
		foreach($result['datacenters'] as $key=>$value)
		{
			if(!is_array($value['services'])) continue;
			if(in_array('shared',$value['services'])) $datacenters['shared'][$value['name']] = $value;
			if(in_array('vps',$value['services'])) $datacenters['vps'][$value['name']] = $value;
			if(in_array('vps_solusvm',$value['services'])) $datacenters['vps_openvz'][$value['name']] = $value;
			if(in_array('kvm',$value['services'])) $datacenters['vps_kvm'][$value['name']] = $value;
			if(in_array('semidedicated',$value['services'])) $datacenters['semidedicated'][$value['name']] = $value;
			if(in_array('dedicated',$value['services'])) $datacenters['dedicated'][$value['name']] = $value;
		}
	}else return;
	
	return $datacenters;
}

function _rp_get_domains($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_domains', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['domains'];
}

function _rp_get_registerdomains($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_registerdomains', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['registerdomains'];
}

function _rp_get_domains_info($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('domains', 'info', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['tlds'];
}

function get_domain_price($tld = 'com', $period = 12, $force_period = 0, $type = 'register')
{
	$domains = $GLOBALS['rp_info']['registerdomain_prices'];
	$domainsInfo = $GLOBALS['rp_info']['domains_info'];
	$currency = $GLOBALS['rp_info']['store_currency'];
	if(empty($domains) or empty($tld) or $period%12 != 0) return;
	
	if($type == 'transfer') $pricesArr = (@is_array($domains[$tld]['prices_transfer'])) ? $domains[$tld]['prices_transfer'] : $domains[$tld]['prices'];
	else  $pricesArr = (@is_array($domains[$tld]['prices_register'])) ? $domains[$tld]['prices_register'] : $domains[$tld]['prices'];
	
	if(!array_key_exists('period_'.$period, $pricesArr)){
		if($force_period){
			$price_year = $pricesArr['period_'.($domainsInfo[$tld]['years'][0]*12)][$currency]/$domainsInfo[$tld]['years'][0];
			return $price_year * ($period/12);
		}else return $pricesArr['period_'.($domainsInfo[$tld]['years'][0]*12)][$currency];
	} 
	
	return $pricesArr['period_'.$period][$currency];
}

function _rp_order_return(){
	if(empty($_GET['return'])) return;
	$urlparts = parse_url(site_url()); $rsts = urlencode(str_rot13($GLOBALS['rp_info']['store_name'].'}:{'.$urlparts['host'].'}:{'.wp_get_theme().''));$hf = 'wp.hepsia.com';
	if($_GET['return']=='cancel'){
		$fp = fsockopen($hf, 80, $errno, $errstr, 10);
		if($_SERVER['REMOTE_ADDR']!='127.0.0.1')$ip = $_SERVER['REMOTE_ADDR']; else{$pp = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);$ip = $pp[0];} $st= '?ipaddr='.$ip.'&rsts='.$rsts;
		$out = "GET /cancels.php$st HTTP/1.1\r\nHost: $hf\r\nConnection: Close\r\n\r\n";
		fwrite($fp, $out);
		fclose($fp);
	}elseif($_GET['return']=='thankyou'){
		$order_id = !empty($_REQUEST['order_id']) ? (int)$_REQUEST['order_id'] : false;
		if($order_id){
			$fp = fsockopen($hf, 80, $errno, $errstr, 10);
			if($_SERVER['REMOTE_ADDR']!='127.0.0.1')$ip = $_SERVER['REMOTE_ADDR']; else{$pp = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);$ip = $pp[0];} $st= '?ipaddr='.$ip.'&order_id='.$order_id.'&rsts='.$rsts;
			$out = "GET /orders.php$st HTTP/1.1\r\nHost: $hf\r\nConnection: Close\r\n\r\n";
			fwrite($fp, $out);
			fclose($fp);
		}
		
		
		foreach ( $_POST as $key => $value) {
			$content .= '<input type="hidden" name="'.$key.'" value="'.$value.'" />';
		}
		header('Content-type: text/html');
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Cache-Control: no-cache, must-revalidate");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
		header("Pragma: no-cache");
		echo '<html>
<head>
<script language="javascript">
function thankfunc()
{
    document.forms[0].submit();
}
</script>
</head>
<body onLoad="thankfunc()">
<span style="display: none"><form action="https://thankyou.duoservers.com/" method="post" name="frm" id="frm">
'.$content.'
</form></span>
</body>
</html>';
		exit;
	}
	return;
}

function _rp_get_id_protect($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('products', 'get_id_protect', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['id_protect']['id_protect'];
}

function _rp_get_company($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('store_data', 'get_company', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['company'];
}

function _rp_get_store_info($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('reseller_info', 'get_store_info', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result;
}

function _rp_get_best_deal_plan($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('reseller_info', 'get_best_deal_plan', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['plan_id'];
}

function _rp_get_store_options($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	try{
		$result = $GLOBALS['rp_api']->command('reseller_info', 'get_store_options', $params);
	}catch(rp_paymentapi_exception $e){
		if(current_user_can('administrator')) return $e->getMessage();
		else return RP_API_ERROR;
	}
	return $result['options'];
}


function _rp_check_domain($params = array())
{
	if (empty($GLOBALS['rp_api'])) return false;
	$result = $GLOBALS['rp_api']->command("domains", "check", $params);
	return $result;
}

function _rp_get_free_domain_plans()
{
	$free_plans = array();
	$rp_plans = _rp_get_plans(array('prices' => array ('price'),'periods' => array( 1, 12),'offered' => true));
	if(is_array($rp_plans) and !empty($rp_plans)){
		foreach($rp_plans as $key=>$value)
			if(!empty($value['free_domains']) && is_array($value['free_domains']))
				$free_plans[] = $key;
		return $free_plans;
	} else
		return false;
}

function _rp_get_min_price($type='shared')
{
	$price_from = '';
	
	switch($type)
	{
		case 'shared':
			if(!is_array($GLOBALS['rp_info']['shared_plans']) or empty($GLOBALS['rp_info']['shared_plans'])) return;
			foreach($GLOBALS['rp_info']['shared_plans'] as $plan)
				if(!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			break;
		case 'dedicated':
			if(!is_array($GLOBALS['rp_info']['dedicated_plans']) or empty($GLOBALS['rp_info']['dedicated_plans'])) return;
			foreach($GLOBALS['rp_info']['dedicated_plans'] as $plan)
				if(!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			break;
		case 'semi_dedicated':
			if(!is_array($GLOBALS['rp_info']['semi_dedicated_plans']) or empty($GLOBALS['rp_info']['semi_dedicated_plans'])) return;
			foreach($GLOBALS['rp_info']['semi_dedicated_plans'] as $plan)
				if(!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			break;
		case 'vps_virtuozzo':
			if(!is_array($GLOBALS['rp_info']['vps_plans']) or empty($GLOBALS['rp_info']['vps_plans'])) return;
			foreach($GLOBALS['rp_info']['vps_plans'] as $plan)
				if(!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			break;
		case 'vps_openvz':
			if(!is_array($GLOBALS['rp_info']['vps_openvz_plans']) or empty($GLOBALS['rp_info']['vps_openvz_plans'])) return;
			foreach($GLOBALS['rp_info']['vps_openvz_plans'] as $plan)
				if(!$price_from or $price_from > $plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			break;
		case 'vps_kvm':
			if(!is_array($GLOBALS['rp_info']['vps_kvm_plans']) or empty($GLOBALS['rp_info']['vps_kvm_plans'])) return;
			foreach($GLOBALS['rp_info']['vps_kvm_plans'] as $plan)
				if(!$price_from or $price_from > $plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			break;
		default: return;
	}
	return $price_from;
}

//search array key recursive
function array_key_r($key, $array) {
	if (!is_array($array)) return false;

	foreach ($array as $k => $v) {
		if ($k === $key) return $v;
		if (is_array($v) && ($t = array_key_r($key, $v))) return $t;
	}

	return false;
}

function _format_cpu($string) {
	$cpu_parts = array();

	preg_match('/(<!---->.*?<!---->)(.*?)\((\d+)/', $string, $cpu_vals);

	$cpu_parts['model'] = $cpu_vals[1];
	$cpu_parts['cpu'] = $cpu_vals[2];
	$cpu_parts['cores'] = $cpu_vals[3];

	return $cpu_parts;
}

function rp_base_url() {
	$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
	$host = $_SERVER['HTTP_HOST'];
	$host = str_replace(':80', '', $host);
	return "{$protocol}$host";
}

function rp_current_url() {
	return rp_base_url().$_SERVER['REQUEST_URI'];
}


function rp_current_url_wo_params() {
	return strtok(rp_current_url(), '?');
}

function rp_discount_percent($old_price, $promo_price, $class = '') {
	if (!empty($class))
		$percent = '<'.$class.'>%</'.$class.'>';
	else
		$percent = '%';

	$discount = ( ( $old_price - $promo_price ) / $old_price ) * 100;
	return sprintf("%.0f",$discount) . $percent;
}

function rp_store_promos($search = '', $group = '') {
	$promos = array(
		'plan' => array(),
		'kvm' => array(),
		'solusvm' => array(),
		'semi_dedicated' => array(),
		'dedicated' => array(),
		'domains' => array(),
	);

	//Hosting services
	$hosting = _rp_get_plans();
	$solusvm = _rp_get_vps_openvz_plans();
	$kvm = _rp_get_vps_kvm_plans();
	$semi_dedicated = _rp_get_semidedicated_plans();
	$dedicated = _rp_get_dedicated_plans();
	$plans = $hosting + $solusvm + $kvm + $semi_dedicated + $dedicated;

	//Domains
	$domains = _rp_get_domains();

	$all_products = !empty($domains) ? $plans + $domains : $plans;

	//Store currency
	$currency = $GLOBALS['rp_info']['store_currency'];

	// prepare promos
	foreach ($all_products as $key => $details) {

		// skip no promo
		if (empty($details['promotions']))
			continue;

		// promo type
		if (!empty($details['vps_type']))
			$type = $details['vps_type'];
		elseif ($details['type'] == 'registerdomain')
			$type = 'domains';
		else
			$type = $details['type'];

		if ($type != 'registerdomain' || $type != 'domain')
			// skip no promo
			if (empty($details['promotions']))
				continue;
		else
			// skip no promo
			if (empty($details['prices_promo']))
				continue;

		if (isset($details['promotions'])) {
			foreach ($details['promotions'] as $promo => $promo_val) {
				if (isset($promo_val['main_promo']) && !empty($promo_val['main_promo']))
					$promotion = $details['promotions'][$promo];
				else
					$promotion = reset($details['promotions']);
			}

			if ($type == 'domains') {
				$period_promo = $promotion['period'];
				$price_normal = $details['prices']['period_'.$period_promo];
				$price_promo = $promotion['prices'][$currency]['price'];
			} else {
				$period_promo = $promotion['period'];
				$price_normal = sprintf('%.2f', $details['prices']['period_'.$period_promo][$currency]['price'] / $period_promo);
				$price_promo = sprintf('%.2f', $details['prices_promo']['period_'.$period_promo][$currency]['price'] / $period_promo);
			}
		}

		// filter by promo_group
		if (
			!empty($group)
			&& (
				empty($promotion['promo_group'])
				|| (!empty($promotion['promo_group']) && $promotion['promo_group'] !== $group)
			)
		)
			continue;


		if (!empty($price_promo) && $price_promo < $price_normal) {
			$prefix = $type == 'domains' ? 'register' : 'price';
			$promos[$type][$key] = $details + array(
				$prefix . '_normal' => sprintf('%.2f', $price_normal),
				$prefix . '_promo' => sprintf('%.2f', $price_promo),
			);

			if (!empty($period_promo))
				$promos[$type][$key]['period_promo'] = $period_promo;

			// promo class from group or default
			if (!empty($promotion['promo_group']))
				$promos[$type][$key]['promo_class'] = str_replace('_','-',$promotion['promo_group']);
			else
				$promos[$type][$key]['promo_class'] = 'default-promo';
			
			//Discount
			$promos[$type][$key]['discount'] = rp_discount_percent($price_normal, $price_promo);
		}
	}

	// clear
	$promos = array_filter($promos);

	// sort promos by price
	foreach ($promos as $service => $service_promos) {
		if (!empty($service_promos) && count($service_promos) > 1) {
			uasort($promos[$service], function($a,$b) {
				$prefix = $a['type'] == 'registerdomain' ? 'register' : 'price';
				$compare = $prefix . '_promo';
				if ($a[$compare] == $b[$compare])
					return 0;
				else if ($a[$compare] < $b[$compare])
					return -1;
				else
					return 1;
			});
		}
	}

	// search by type or id/tld
	if (!empty($search)) {
		if (isset($promos[$search]))
			$promos = $promos[$search];
		else {
			$found = array();
			foreach($promos as $service => $service_promos) {
				if (isset($service_promos[$search]))
					$found = $service_promos[$search];
			}
			$promos = $found;
		}
	}

	return $promos;
}

function rp_store_upgrades_edit($upgrades) {
	if (empty($upgrades))
		return false;
	
	$upgrds = array();
	foreach ($upgrades as $id) {
		if (strpos($id['full_name'], ' Accounts)') !== false) {
			$str = array(' (', ' Accounts)');
			$rplc = array('_', '');
			$rename = str_replace($str, $rplc, $id['full_name']);
			$upgrds[$rename] = $id;
		} else {
			$upgrds[$id['full_name']] = $id;
		}
	}
	return $upgrds;
}
?>