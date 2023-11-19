<?php

add_action('admin_menu', 'rp_create_menu');
function rp_create_menu() {
	$p = dirname(dirname(__FILE__));
	$o = $p.'/resellerspanel-connect.php';
	//create new top-level menu
	add_menu_page('Resellers Panel', 'Resellers Panel', 'administrator', $o, '', plugins_url('/images/icon.png', dirname(__FILE__)));
	add_submenu_page($o, 'RP Connection', 'Connection', 'administrator', $o);
	add_submenu_page($o, 'RP Connection', 'Pages', 'administrator', $p.'/resellerspanel-pages.php');
	add_submenu_page($o, 'RP Connection', 'Defaults', 'administrator', $p.'/resellerspanel-defaults.php');
	add_submenu_page($o, 'RP Connection', 'Help', 'administrator', $p.'/resellerspanel-help.php');
	//call register settings function
	add_action( 'admin_init', 'rp_register_settings' );
}
function rp_register_settings(){
	//register our settings
	register_setting( 'rp-settings-group', 'rp_settings' );
}