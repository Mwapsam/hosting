<?php 
$orderObj = get_page(get_option('rp_order_form'));
$order_url = get_permalink(get_option('rp_order_form'));
$order_path = parse_url($order_url,PHP_URL_PATH);
$permalink_structure = get_option('permalink_structure');

$pt = '';
if($page == 'rp_shared_order_form')
	$pt = "&plan_type=shared_hosting";
else if ($page == 'rp_vps_virtuozzo_order_form')
	$pt = "&plan_type=vps";
else if ($page == 'rp_vps_openvz_order_form')
	$pt = "&plan_type=openvz_vps";
else if ($page == 'rp_vps_kvm_order_form')
	$pt = "&plan_type=kvm_vps";
else if ($page == 'rp_semi_dedicated_order_form')
	$pt = "&plan_type=semi_dedicated";
else if ($page == 'rp_dedicated_order_form')
	$pt = "&plan_type=dedicated";

$order_query = parse_url($order_url,PHP_URL_QUERY);
$return = '&return_url='.urlencode($order_url.(($order_query)?'&return=thankyou':'?return=thankyou')).'&cancel_url='.urlencode($order_url.(($order_query)?'&return=cancel':'?return=cancel'));

//Language
$language = '';
if ($lang != 'en') {
	$language = "&s_l={$lang}";
}

$order_form_info = array(
	'page_url' => urlencode(rp_current_url()),
	'referer_url' => !empty($_SERVER['HTTP_REFERER']) ? urlencode($_SERVER['HTTP_REFERER']) : 0,
);

if(!empty($permalink_structure) and stristr($order_path, $orderObj->post_name.'/')){?>
<style type="text/css" media='all'>
body {	font-size:14px; }
.ui-widget { font-family: Arial, sans-serif; font-size: 0.9em; }
.ui-widget .ui-widget { font-size: 0.9em;}
.ui-widget input, .ui-widget select, .ui-widget textarea, .ui-widget button { font-size: 0.9em; }
.clear {clear:both;height:8px;}
#orderForm.clear {clear:both;height:0px;overflow:0px;} 
#all_pm{overflow:hidden;}
</style>
<?php echo file_get_contents('http://'.$rp_info['store_name'].'.duoservers.com/hosting-order/?template_only=1&'.$_SERVER['QUERY_STRING'].'&remote_addr='.$_SERVER['REMOTE_ADDR'].$pt.$return.$language. '&' . http_build_query($order_form_info))?>
<?php }else{?>
<iframe frameborder='0' style='width: 950px; height: 1200px' src='https://<?php echo $rp_info['store_name']?>.duoservers.com/hosting-order/?<?php echo $_SERVER['QUERY_STRING'].$pt.$language?><?php echo '&' . http_build_query($order_form_info)?>'></iframe>
<?php }?>