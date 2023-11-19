<?php
// display customer support box in sidebar
function rp_customer_support_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('customer_support',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/customer_support_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_customer_support_sidebar_box]
add_shortcode('rp_customer_support_sidebar_box', 'rp_customer_support_sidebar_box');

// display datacenters type 1 box in sidebar
function rp_datacenters_1_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('datacenters_1',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/datacenters_1_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_datacenters_1_sidebar_box]
add_shortcode('rp_datacenters_1_sidebar_box', 'rp_datacenters_1_sidebar_box');

// display datacenters type 2 box in sidebar
function rp_datacenters_2_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('datacenters_2',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/datacenters_2_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_datacenters_2_sidebar_box]
add_shortcode('rp_datacenters_2_sidebar_box', 'rp_datacenters_2_sidebar_box');

// display hepsia cp box in sidebar
function rp_hepsia_cp_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('hepsia_cp',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	$content = str_replace('</p>
<p>', "\n\n", $content);
	$content = str_replace('<p>', "", $content);
	$content = str_replace('</p>', "", $content);
	$content = str_replace("<br />\n", "\n", $content);
	$text = html_entity_decode($content);
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/hepsia_cp_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_hepsia_cp_sidebar_box]
add_shortcode('rp_hepsia_cp_sidebar_box', 'rp_hepsia_cp_sidebar_box');

// display email manager box in sidebar
function rp_email_manager_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('email_manager',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	$content = str_replace('</p>
<p>', "\n\n", $content);
	$content = str_replace('<p>', "", $content);
	$content = str_replace('</p>', "", $content);
	$content = str_replace("<br />\n", "\n", $content);
	$text = html_entity_decode($content);
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/email_manager_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_email_manager_sidebar_box]
add_shortcode('rp_email_manager_sidebar_box', 'rp_email_manager_sidebar_box');

// display web accelerators box in sidebar
function rp_web_accelerators_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('web_accelerators',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	$content = str_replace('</p>
<p>', "\n\n", $content);
	$content = str_replace('<p>', "", $content);
	$content = str_replace('</p>', "", $content);
	$content = str_replace("<br />\n", "\n", $content);
	$text = html_entity_decode($content);
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/web_accelerators_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_web_accelerators_sidebar_box]
add_shortcode('rp_web_accelerators_sidebar_box', 'rp_web_accelerators_sidebar_box');

// display 1 click installer box in sidebar
function rp_click_installer_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('click_installer',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	$content = str_replace('</p>
<p>', "\n\n", $content);
	$content = str_replace('<p>', "", $content);
	$content = str_replace('</p>', "", $content);
	$content = str_replace("<br />\n", "\n", $content);
	$text = html_entity_decode($content);
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/click_installer_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_click_installer_sidebar_box]
add_shortcode('rp_click_installer_sidebar_box', 'rp_click_installer_sidebar_box');

// display domain manager box in sidebar
function rp_domain_manager_sidebar_box($atts=array(), $content=null){
	extract( shortcode_atts( array(
		'visibility' => '1',
		'page' => '404',
	), $atts ) );
	
	if($visibility == '0' or $visibility == 'hide') return;
	if($visibility == 'default'){
		if(!in_array('domain_manager',(array)$GLOBALS['rp_settings']['default_sitebar_boxes'][$page])) return;
	}
	
	$content = str_replace('</p>
<p>', "\n\n", $content);
	$content = str_replace('<p>', "", $content);
	$content = str_replace('</p>', "", $content);
	$content = str_replace("<br />\n", "\n", $content);
	$text = html_entity_decode($content);
	
	ob_start();
	require RSP_PATH.'/templates/sidebar/domain_manager_sidebar_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_domain_manager_sidebar_box]
add_shortcode('rp_domain_manager_sidebar_box', 'rp_domain_manager_sidebar_box');

?>