<?php

if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
	exit;
}

require_once('../../../../wp-config.php');

// Admin settings 
include_once 'rp_settings.php';

// Api class
require_once 'rp_paymentapi.php';

if (
	(!isset($rp_settings['user_plain']) || !isset($rp_settings['pass_plain']))
	&& (!isset($rp_settings['user']) || !isset($rp_settings['pass']))
	&& !(isset($_POST['rp_user']) || isset($_POST['rp_pass']))
) {
	exit;
}

if (!isset($rp_settings['user_plain']) || !isset($rp_settings['pass_plain'])) {
	require_once 'rp_crypt.php';

	$rp_crypt = new rp_crypt();
	$user = isset($rp_settings['user']) && $rp_settings['user'] ? $rp_crypt->decrypt($rp_settings['user']) : '';
	$pass = isset($rp_settings['pass']) && $rp_settings['pass'] ? $rp_crypt->decrypt($rp_settings['pass']) : '';
} else {
	$user = $rp_settings['user_plain'];
	$pass = $rp_settings['pass_plain'];
}

try {
	$api = new rp_paymentapi('https://api.duoservers.com/', $user, $pass);
} catch (Exception $e) {
	exit;
}

$res = $api->command('products', 'get_dedicated_stock');

$response = array(
	'status' => 0,
	'stocks' => array(),
);

if (!empty($res['stocks'])) {
	$response['status'] = 1;
	$response['stocks'] = $res['stocks'];
}

echo json_encode($response);
