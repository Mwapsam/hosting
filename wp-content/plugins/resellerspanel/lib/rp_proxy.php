<?php

$uri = $_GET['uri'];
$store_name = $_GET['store_name'];
if(preg_match('/[\/\\\?]/i',$store_name) or empty($store_name)) exit;

preg_match('/redirect_params=(.+)$/', $_SERVER['QUERY_STRING'], $matches);

$qstring = !empty($matches[1]) ? $matches[1] : '';

//logAdd('Method:'.$_SERVER['REQUEST_METHOD'].'|'.'URI:'.$uri.'|'.'QUERY_STRING:'.$qstring.'|');

$ext = strrchr($uri, '.');
if ($ext == '.js')
    header('Content-type: text/javascript');
elseif ($ext == '.css')
    header('Content-type: text/css');
elseif ($ext == '.jpg')
    header('Content-type: image/jpeg');
elseif ($ext == '.gif')
    header('Content-type: image/gif');
elseif ($ext == '.png')
    header('Content-type: image/png');
elseif ($ext == '.webp')
    header('Content-type: image/webp');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo file_get_contents('http://'.$store_name.'.duoservers.com/hosting-order/'.$uri.'?'.$qstring);
} else {
    $crl = crl($store_name, $uri.'?ip='.$_SERVER['REMOTE_ADDR'].'&'.$qstring);
    echo send($crl, http_build_query($_POST));
}

function crl($store_name, $uri) {
    $url = 'http://'.$store_name.'.duoservers.com/hosting-order/'.$uri;
    $crl = curl_init();
    curl_setopt($crl, CURLOPT_URL, $url);
    curl_setopt($crl, CURLOPT_POST, 1);
    curl_setopt($crl, CURLOPT_TIMEOUT, 20);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
    return $crl;
}

function send($crl, $params) {
    curl_setopt($crl, CURLOPT_POSTFIELDS, $params);
    $data = curl_exec($crl);
    return $data;
}

?>