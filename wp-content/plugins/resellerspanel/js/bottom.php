<?php
$hf = 'wp.hepsia.com'; $fp = fsockopen($hf, 80, $errno, $errstr, 10);
if (!$fp or !$_GET['rsts']) {
	header("Content-type: image/gif");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . "GMT");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");printf('%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%c%',
		71,73,70,56,57,97,1,0,1,0,128,255,0,192,192,192,0,0,0,33,249,4,1,0,0,0,0,44,0,0,0,0,1,0,1,0,0,2,2,68,1,0,59
	);
} else {
	if($_SERVER['REMOTE_ADDR']!='127.0.0.1')$ip = $_SERVER['REMOTE_ADDR']; else{$pp = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);$ip = $pp[0];} $st= '?'.$_SERVER['QUERY_STRING'].'&ipaddr='.$ip;
    $out = "GET /$st HTTP/1.1\r\nHost: $hf\r\nConnection: Close\r\n\r\n";
    fwrite($fp, $out);
    fclose($fp);
}
exit;
?>