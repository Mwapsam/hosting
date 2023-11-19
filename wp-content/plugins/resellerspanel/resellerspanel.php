<?php
/*
Plugin Name: Resellers-Panel
Description: This plugin will allow you to connect and use the reseller hosting API from ResellersPanel
Version: 1.7.1.2
Author: ResellersPanel.com
License: GPL
*/
define('WP_POST_REVISIONS', false);
define( 'RSP_PATH', dirname( __FILE__ ));

//if (!session_id()) session_start();

function rp_admin_warning_no_login(){
	echo '<div class="error fade"><p><strong>Resellers-Panel is almost ready</strong>. You must enter your <a href="admin.php?page=resellerspanel/resellerspanel-connect.php">Resellers-Panel\'s Store details</a> for it to work.</p></div>';
}

$rp_settings = get_option('rp_settings');

// Hools run on install and uninstall
include_once RSP_PATH.'/lib/rp_install.php';

// FIX for default main vps hosting template = virtuozzo page since 1.5.13
if ($rp_settings['default_urls']['vps_hosting'] == 'rp_vps_plan') {
	$rp_settings['default_urls']['vps_hosting'] = 'rp_vps_compare';
	update_option('rp_settings', $rp_settings);

	// start child->parent change
	foreach ($GLOBALS['rp_install_pages'] as $option => $cnt) {
		if ($page_id = get_option($option)) {
			if (!empty($cnt['post_parent']) and preg_match('/^default_page_/',$cnt['post_parent'])) {
				if ($cnt['post_parent'] == 'default_page_domains') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['domain_search']);
				} else if ($cnt['post_parent'] == 'default_page_shared') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['shared_hosting']);
				} else if ($cnt['post_parent'] == 'default_page_vps') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['vps_hosting']);
				} else if ($cnt['post_parent'] == 'default_page_dedicated') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['dedicated_hosting']);
				}
				wp_update_post( array(
					'ID' => $page_id,
					'post_parent' => ($post_parent_id)?$post_parent_id:'',
				));
			}
		}
	}
	// end child->parent change
}

// Hools run on install and uninstall
include_once RSP_PATH.'/lib/rp_skip_filters.php';

// Hools for plugin update
include_once RSP_PATH.'/resellerspanel-update.php';

// Admin settings 
include_once RSP_PATH.'/lib/rp_settings.php';

// Api class
require_once RSP_PATH.'/lib/rp_paymentapi.php';

// Removed since 1.5.10 - generating wordpress errors
//wp_enqueue_script( 'resellerspanel-init', plugin_dir_url( __FILE__ ) . 'js/init.js', array( 'jquery' ), '2.0', true );
//wp_enqueue_script( 'resellerspanel-bottom', plugin_dir_url( __FILE__ ) . 'js/bottom.js', array(), '3.5', true );

if (
	(
		(!isset($rp_settings['user']) && !isset($rp_settings['user_plain']))
		|| (!isset($rp_settings['pass']) && !isset($rp_settings['pass_plain']))
	)
	&& !(isset($_POST['rp_user']) || isset($_POST['rp_pass']))
) {
	add_action('admin_notices', 'rp_admin_warning_no_login');
}

//Configurations
global $rp_api;
require_once RSP_PATH.'/lib/rp_crypt.php';
$rp_crypt = new rp_crypt();
try {
	$rp_url = 'http://api.duoservers.com/';

	if (isset($rp_settings['user_plain']))
		$user = $rp_settings['user_plain'];
	else if (isset($rp_settings['user']))
		$user = $rp_crypt->decrypt($rp_settings['user']);
	else
		$user = '';

	if (isset($rp_settings['pass_plain']))
		$pass = $rp_settings['pass_plain'];
	else if (isset($rp_settings['pass']))
		$pass = $rp_crypt->decrypt($rp_settings['pass']);
	else
		$pass = '';

	$rp_api = new rp_paymentapi($rp_url, $user, $pass);

} catch (Exception $e) {
	global $rp_api_error;
	$rp_api_error = $e->getMessage();
	function rp_admin_api_error(){
		global $rp_api_error;
		echo '<div class="updated fade"><p>Plugin has experienced error <br /> <strong>'.$rp_api_error.'</strong></p></div>';
	}
	add_action('admin_notices', 'rp_admin_api_error');
}

require_once RSP_PATH.'/lib/rp_functions.php';

define('RP_API_ERROR', '<p style="color:#CC0000;font-weight:bold;">Sorry, we can\'t display this page right now<p>');


// Fetch global (cached) vars about the account
function _rp_info_fetch(){
	if (!isset($GLOBALS['rp_api'])) return false;
		try{
			// Build and cache
			$GLOBALS['rp_info'] = array();
			$res = $GLOBALS['rp_api']->commands(array(
				array('section' => 'reseller_info', 'command' => 'get_store_info'),
				array('section' => 'store_data', 'command'=>'get_company' ),
			));
			//print_r($res);
			$GLOBALS['rp_info']['reseller_name'] = $res[1]['reseller_name'];
			$GLOBALS['rp_info']['store_id'] = $res[1]['store_id'];
			$GLOBALS['rp_info']['store_name'] = $res[1]['store_name'];
			$GLOBALS['rp_info']['store_title'] = $res[1]['title'];
			$GLOBALS['rp_info']['store_currency'] = $res[1]['currency'];
			$GLOBALS['rp_info']['reseller_email'] = $res[1]['reseller_email'];
			$GLOBALS['rp_info']['demo'] = (($res[1]['demo']) ? $res[1]['demo'] : 'https://demo.hepsia.com') .'/';
			$GLOBALS['rp_info']['contacts'] = !empty($res[1]['contacts']) ? $res[1]['contacts'] : '';
			$GLOBALS['rp_info']['company'] = $res[2]['company'];
			$shared_plans = _rp_get_plans(array('prices' => array ('price'),'periods' => array(1, 12), 'offered' => true));

			foreach($shared_plans as $value) {
				if ($value['flags'] & 1 == 1) {
					$GLOBALS['rp_info']['domain_manager_id'] = $value['rp_product_id'];
					continue;
				}

				$GLOBALS['rp_info']['shared_plans'][$value['rp_product_id']] = $value;

				if (!empty($value['plan_on_index']) && $value['plan_on_index'] == 1)
					$GLOBALS['rp_info']['shared_plans_on_index'][] = $value['rp_product_id'];
				if (!empty($value['free_domains']) && is_array($value['free_domains']))
					$GLOBALS['rp_info']['shared_plans_free_domain'][] = $value['rp_product_id'];
				if ($value['services']['site_studio'] == 1)
					$GLOBALS['rp_info']['shared_plans_site_studio'][] = $value['rp_product_id'];
			}

			$GLOBALS['rp_info']['vps_plans'] = _rp_get_vps_plans(array('prices' => array ('price'),'periods' => array( 1, 12),'offered' => true));
			$GLOBALS['rp_info']['vps_upgrades'] = _rp_get_vps_upgrades(array('prices' => array ('price'),'periods' => array(1),'offered' => true,'id_key'=>1));
			$GLOBALS['rp_info']['vps_kvm_upgrades'] = _rp_get_vps_kvm_upgrades(array('prices' => array ('price'),'periods' => array(1),'offered' => true,'id_key'=>1));
			$GLOBALS['rp_info']['vps_openvz_plans'] = _rp_get_vps_openvz_plans(array('prices' => array ('price'),'periods' => array( 1, 12),'offered' => true));
			$GLOBALS['rp_info']['vps_kvm_plans'] = _rp_get_vps_kvm_plans(array('prices' => array('price'), 'periods' => array(1, 12), 'offered' => true));
			$GLOBALS['rp_info']['semi_dedicated_plans'] = _rp_get_semidedicated_plans(array('prices' => array ('price'),'periods' => array( 1, 12),'offered' => true));
			$GLOBALS['rp_info']['dedicated_plans'] = _rp_get_dedicated_plans(array('prices' => array ('price'),'periods' => array( 1, 3, 6),'offered' => true));
			$GLOBALS['rp_info']['dedicated_upgrades'] = _rp_get_dedicated_upgrades(array('prices' => array ('price'),'periods' => array(1),'offered' => true,'id_key'=>1));
			$GLOBALS['rp_info']['datacenters'] = _rp_get_datacenters();
			$GLOBALS['rp_info']['domain_prices'] = _rp_get_domains(array('active' => true, 'prices' => array('price'), 'show' => 'all', 'periods_no_collapse' => 1));
			$GLOBALS['rp_info']['registerdomain_prices'] = _rp_get_registerdomains(array('active' => true, 'prices' => array('price'), 'show' => 'all', 'price_options' => 1, 'periods_no_collapse' => 1));
			$GLOBALS['rp_info']['domains_info'] = _rp_get_domains_info(array('active' => true, 'prices' => array('price'), 'periods_no_collapse' => true));
			$GLOBALS['rp_info']['id_protect_prices'] = _rp_get_id_protect(array('active' => true, 'prices' => array('price'), 'periods_no_collapse' => 1));
			$GLOBALS['rp_info']['ssl_certificates'] = _rp_get_ssl_certificates(array('prices' => array('price'), 'periods_no_collapse' => 1));
		}catch(exception $e){
			// Username or passord is incorrect
		}
}

function rp_init_function(){
	_rp_info_fetch();
	
	if (!is_array($GLOBALS['rp_settings'])) $GLOBALS['rp_settings'] = get_option('rp_settings');
	
	if (!$GLOBALS['rp_settings']['store_texts'] and isset($GLOBALS['rp_info']['store_id']) and current_user_can('manage_options'))
	{
	//	logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: call function install plan pages');
	//	rp_install_plan_pages();
		rp_install_footer_links();
		
		logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: get rp store texts');
		$GLOBALS['store_texts'] = _rp_get_store_texts();
		if (is_array($GLOBALS['store_texts']) and !empty($GLOBALS['store_texts'])){
			define('WP_IMPORTING', true);
			logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: call _rp_replace_references @@');
			foreach ($GLOBALS['store_texts'] as $key=>$value){
				$GLOBALS['store_texts'][$key] = preg_replace_callback('/@@([^@]+)@@/i',"_rp_replace_references",$value);
			}
			
			logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: begin store texts pages insert');
			foreach ($GLOBALS['rp_install_pages'] as $option => $cnt) {
				if (!empty($GLOBALS['rp_settings']['noupdate']) && in_array($option,(array)$GLOBALS['rp_settings']['noupdate']))
					if (!in_array($option, array('rp_application_installer_1', 'rp_application_installer_2', 'rp_openrealty_hosting', 'rp_moodle_hosting')))
						continue;
				if ($page_id = get_option($option)) {
					$cnt['content'] = preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['content']);
					$cnt['title'] = do_shortcode(preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['title']));
					if (!empty($cnt['post_parent'])) {
						if ($cnt['post_parent'] == 'default_page_domains') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['domain_search']);
						} else if ($cnt['post_parent'] == 'default_page_shared') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['shared_hosting']);
						} else if ($cnt['post_parent'] == 'default_page_vps') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['vps_hosting']);
						} else if ($cnt['post_parent'] == 'default_page_vps_virtuozzo') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting']);
						} else if ($cnt['post_parent'] == 'default_page_vps_kvm') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting']);
						} else if ($cnt['post_parent'] == 'default_page_vps_openvz') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']);
						} else if ($cnt['post_parent'] == 'default_page_semi_dedicated') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting']);
						} else if ($cnt['post_parent'] == 'default_page_dedicated') {
							$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['dedicated_hosting']);
						} else
							$post_parent_id = get_option($cnt['post_parent']);
					} else
						$post_parent_id = '';
					wp_update_post( array(
						'ID' => $page_id,
						'post_title' => $cnt['title'],
						'post_name' => wp_unique_post_slug(sanitize_title($cnt['title']),$page_id, 'publish', 'page', ''),
						'post_content' => $cnt['content'],
						'post_type' => 'page',
						'post_parent' => ($post_parent_id)?$post_parent_id:'',
					));
					if (isset($cnt['page_template'])) {
						update_post_meta($page_id, '_wp_page_template', $cnt['page_template']);
					}
					if (isset($cnt['header_type'])) {
						update_post_meta($page_id, 'rpwp_header_type', $cnt['header_type']);
					}
					if (isset($cnt['header_title'])) {
						$cnt['header_title'] = preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['header_title']);
						update_post_meta($page_id, 'rpwp_title', $cnt['header_title']);
					}
					if (isset($cnt['header_content'])) {
						$cnt['header_content'] = preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['header_content']);
						update_post_meta($page_id, 'rpwp_content', $cnt['header_content']);
					}
					if (isset($cnt['meta_title'])) {
						$cnt['meta_title'] = preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['meta_title']);
						update_post_meta($page_id, 'rpwp_meta_title', $cnt['meta_title']);
					}
					if (isset($cnt['meta_description'])) {
						$cnt['meta_description'] = preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['meta_description']);
						update_post_meta($page_id, 'rpwp_meta_description', $cnt['meta_description']);
					}
					if (isset($cnt['meta_keywords'])) {
						$cnt['meta_keywords'] = preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['meta_keywords']);
						update_post_meta($page_id, 'rpwp_meta_keywords', $cnt['meta_keywords']);
					}
					if (isset($cnt['menu_title'])) {
						$cnt['menu_title'] = preg_replace_callback('/\{\{([^\}]+)\}\}/i',"_rp_replace_text_template",$cnt['menu_title']);
						update_post_meta($page_id, 'rpwp_menu_title', $cnt['menu_title']);
					}
				}
			}
			logAdd('FUNCTION: '.__FUNCTION__.'|LINE: '.__LINE__.'| MSG: set home page');
			
			
			update_option('show_on_front', 'page');
			if (function_exists('wp_get_theme'))
				$theme_name = ''.wp_get_theme();
			else
				$theme_name = '';

			if (@array_key_exists($theme_name, $GLOBALS['rp_twin_themes']) and get_option($GLOBALS['rp_twin_themes'][$theme_name]))
				update_option('page_on_front', get_option($GLOBALS['rp_twin_themes'][$theme_name]));
			else update_option('page_on_front', get_option('rp_home_'.rand(1,5)));

			$GLOBALS['rp_settings']['store_texts'] = 1;
			update_option('rp_settings', $GLOBALS['rp_settings']);
			rp_update_rules();
		}
	}

	if (!isset($GLOBALS['rp_page_keys']) || !is_array($GLOBALS['rp_page_keys']))
		$GLOBALS['rp_page_keys'] = rp_get_page_keys();
}

if (empty($_GET['action']) || $_GET['action'] != 'domain_check' || $_GET['action'] != 'quick_domain_check')
	add_action('init','rp_init_function');

require_once RSP_PATH.'/lib/rp_features.php';

// bloginfo access via shortcode
function bloginfo_shortcode( $atts ) {
    extract(shortcode_atts(array(
        'key' => '',
    ), $atts));
    return get_bloginfo($key);
}
//examples [bloginfo key='template_directory']
add_shortcode('bloginfo', 'bloginfo_shortcode');

function rp_store_info($atts)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'key' => 'store_title'
	), $atts ) );
	if (array_key_exists($key,$rp_info)) return $rp_info[$key];
	else {
		$multikey = explode('.',$key);
		if (count($multikey)>1 or count($multikey)<10){ //multidimantional array < 10 dimentions
			$ret = $rp_info;
			foreach($multikey as $key=>$value)
				$ret = $ret[$value];
			if ($ret and !is_array($ret)) return $ret;
			else return;
		} else return;
	}
	
}
//examples [rp_store_info key='store_title'] [rp_store_info key='company.uk_phones.0']
add_shortcode( 'rp_store_info', 'rp_store_info' );

function rp_page_link($atts)
{
	extract( shortcode_atts( array(
		'key' => ''
	), $atts ) );
	
	if (empty($key) or !array_key_exists($key,$GLOBALS['rp_install_pages'])) return '#';
	
	return get_permalink(get_option($key));
}
//examples [rp_page_link key='rp_order_form']
add_shortcode( 'rp_page_link', 'rp_page_link' );

function rp_default_page_link($atts)
{
	extract( shortcode_atts( array(
		'key' => ''
	), $atts ) );
	
	if (empty($key)) return '#';
	
	if ($key=='domains')
		$ret = ($GLOBALS['rp_settings']['default_urls']['domain_search'])?$GLOBALS['rp_settings']['default_urls']['domain_search']:'rp_domain_names_1';
	else if ($key=='shared')
		$ret = ($GLOBALS['rp_settings']['default_urls']['shared_hosting'])?$GLOBALS['rp_settings']['default_urls']['shared_hosting']:'rp_shared_plan';
	else if ($key=='vps')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_hosting']:'rp_vps_compare';
	else if ($key=='vps_openvz')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']:'rp_vps_openvz_plan';
	else if ($key=='vps_virtuozzo')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting']:'rp_vps_plan';
	else if ($key=='vps_kvm')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting']:'rp_vps_kvm_plan';
	else if ($key=='semi_dedicated')
		$ret = ($GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'])?$GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting']:'rp_semi_dedicated_plan';
	else if ($key=='dedicated')
		$ret = ($GLOBALS['rp_settings']['default_urls']['dedicated_hosting'])?$GLOBALS['rp_settings']['default_urls']['dedicated_hosting']:'rp_dedicated_plan';
	else if ($key=='whyus')
		$ret = ($GLOBALS['rp_settings']['default_urls']['whyus'])?$GLOBALS['rp_settings']['default_urls']['whyus']:'rp_whyus_1';
	else if ($key=='application_installer')
		$ret = ($GLOBALS['rp_settings']['default_urls']['application_installer'])?$GLOBALS['rp_settings']['default_urls']['application_installer']:'rp_application_installer_1';
	else if (preg_match('/^article_(.+)/i',$key,$matches)){
		$ret = ($GLOBALS['rp_settings']['default_urls']['articles']) ? $matches[1].'_'.$GLOBALS['rp_settings']['default_urls']['articles'] : $matches[1].'_3';
	} else if (preg_match('/^datacenter_(.+)/i',$key,$matches)){
		$ret = ($GLOBALS['rp_settings']['default_urls']['datacenters']) ? $matches[1].'_'.$GLOBALS['rp_settings']['default_urls']['datacenters'] : $matches[1].'_2';
	}
	
	if ($ret) return get_permalink(get_option($ret));
	else return '#';
}
//examples [rp_default_page_link type='shared']
add_shortcode( 'rp_default_page_link', 'rp_default_page_link' );

function rp_default_page_id($atts)
{
	extract( shortcode_atts( array(
		'key' => ''
	), $atts ) );
	
	if (empty($key)) return '#';
	
	if ($key=='domains')
		$ret = ($GLOBALS['rp_settings']['default_urls']['domain_search'])?$GLOBALS['rp_settings']['default_urls']['domain_search']:'rp_domain_names_1';
	else if ($key=='shared')
		$ret = ($GLOBALS['rp_settings']['default_urls']['shared_hosting'])?$GLOBALS['rp_settings']['default_urls']['shared_hosting']:'rp_shared_plan';
	else if ($key=='vps')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_hosting']:'rp_vps_compare';
	else if ($key=='vps_openvz')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']:'rp_vps_openvz_plan';
	else if ($key=='vps_virtuozzo')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting']:'rp_vps_plan';
	else if ($key=='vps_kvm')
		$ret = ($GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'])?$GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting']:'rp_vps_kvm_plan';
	else if ($key=='semi_dedicated')
		$ret = ($GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'])?$GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting']:'rp_semi_dedicated_plan';
	else if ($key=='dedicated')
		$ret = ($GLOBALS['rp_settings']['default_urls']['dedicated_hosting'])?$GLOBALS['rp_settings']['default_urls']['dedicated_hosting']:'rp_dedicated_plan';
	else if ($key=='whyus')
		$ret = ($GLOBALS['rp_settings']['default_urls']['whyus'])?$GLOBALS['rp_settings']['default_urls']['whyus']:'rp_whyus_1';
	else if ($key=='application_installer')
		$ret = ($GLOBALS['rp_settings']['default_urls']['application_installer'])?$GLOBALS['rp_settings']['default_urls']['application_installer']:'rp_application_installer_1';
	else if (preg_match('/^article_(.+)/i',$key,$matches)){
		$ret = ($GLOBALS['rp_settings']['default_urls']['articles']) ? $matches[1].'_'.$GLOBALS['rp_settings']['default_urls']['articles'] : $matches[1].'_3';
	} else if (preg_match('/^datacenter_(.+)/i',$key,$matches)){
		$ret = ($GLOBALS['rp_settings']['default_urls']['datacenters']) ? $matches[1].'_'.$GLOBALS['rp_settings']['default_urls']['datacenters'] : $matches[1].'_2';
	}
	
	if ($ret) return $ret;
	else return '#';
}

// return site home url
function rp_home_url()
{	
	return get_bloginfo('url');
}
//examples [rp_home_url]
add_shortcode( 'rp_home_url', 'rp_home_url' );

// return host
function rp_host()
{
	return parse_url(site_url(),PHP_URL_HOST);
}
//examples [rp_home_url]
add_shortcode( 'rp_host', 'rp_host' );


require_once RSP_PATH.'/resellerspanel-home.php';
require_once RSP_PATH.'/resellerspanel-articles.php';
require_once RSP_PATH.'/resellerspanel-boxes.php';

// Plan display shortcode
function rp_display_plans( $atts, $content=null ) {
	global $rp_lang, $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => 'shared',
		'upgrades'=> '',
		'button' => '',
		'best' => ''
	), $atts ) );
	$plans_type = $type;
	$content = str_replace("</p>\n<p>", "\n\n", $content);
	$content = str_replace("<br />\n", "\n", do_shortcode($content));
	$content = html_entity_decode($content);
	
	$rp_signup_url = get_permalink(get_option('rp_order_form'));
	
	// Get only required plan information from the api request
	switch ($plans_type){
		case 'shared':
			if (!empty($GLOBALS['rp_info']['shared_plans'])) $rp_plans = array_slice($GLOBALS['rp_info']['shared_plans'],0,6,true);
			$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
			break;
		case 'vps_virtuozzo':
			if (!empty($GLOBALS['rp_info']['vps_plans'])) $rp_plans = $GLOBALS['rp_info']['vps_plans'];
			if ($upgrades){
				if (!empty($GLOBALS['rp_info']['vps_upgrades'])) $upgrades = $GLOBALS['rp_info']['vps_upgrades'];
			}
			$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
			break;
		case 'vps_kvm':
			if (!empty($GLOBALS['rp_info']['vps_kvm_plans'])) $rp_plans = $GLOBALS['rp_info']['vps_kvm_plans'];
			if ($upgrades){
				if (!empty($GLOBALS['rp_info']['vps_kvm_upgrades'])) $upgrades = $GLOBALS['rp_info']['vps_kvm_upgrades'];
			}
			$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
			break;
		case 'vps_openvz':
			if (!empty($GLOBALS['rp_info']['vps_openvz_plans'])) $rp_plans = $GLOBALS['rp_info']['vps_openvz_plans'];
			$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
			break;
		case 'semi_dedicated':
			if (!empty($GLOBALS['rp_info']['semi_dedicated_plans'])) $rp_plans = $GLOBALS['rp_info']['semi_dedicated_plans'];
			$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
			break;
		case 'dedicated':
			if (!empty($GLOBALS['rp_info']['dedicated_plans'])) $rp_plans = $GLOBALS['rp_info']['dedicated_plans'];
			if ($upgrades){
				if (!empty($GLOBALS['rp_info']['dedicated_upgrades'])) $upgrades = $GLOBALS['rp_info']['dedicated_upgrades'];
			}
			$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
			break;
	}

	if (!is_array($rp_plans) or empty($rp_plans)) return RP_API_ERROR." (".$plans_type." plans not available)";
	
	if ($plans_type == 'shared')
	{
		// get promo domain price
		$domain_price = $GLOBALS['rp_info']['domain_prices']['com']['prices']['period_12'][$GLOBALS['rp_info']['store_currency']];
	} else {
		// get default domain price 
		$domain_price = get_domain_price();
	}
	
	$rp_best_plan = null;
	if (empty($best) or !array_key_exists($best,(array)$rp_plans)){
		$rp_best_plan = key($rp_plans);
	} else {
		$rp_best_plan = $best;
	}
	
	$get_params_string = parse_url($rp_signup_url,PHP_URL_QUERY);
	if ($get_params_string) {
		$get_params = explode("&", $get_params_string);
		foreach ($get_params as $key=>$value){
			$name_value = explode("=", $value);
			$get_params[$name_value[0]]=$name_value[1];
			unset($get_params[$key]);
		}
	}
	
	if ($plans_type == 'vps_openvz'){
		ob_start();
		require  RSP_PATH.'/templates/vps_openvz.php';
		$string=ob_get_contents();
		ob_end_clean();	
		return $string;
	}
	
	// Add plans price as part of the services
	foreach ($rp_plans as $plan_id => $plan){
		if ($plan['name'] == 'Domain Manager'){
			unset($rp_plans[$plan_id]);
			continue;
		}
		if ($plans_type == 'shared' || $plans_type == 'semi_dedicated'){
			$rp_plans[$plan_id]['services']['mail_list_members']=($rp_plans[$plan_id]['services']['mail_list']?__rp('unlimited','Unlimited'):__rp('optional','Optional'));
		}
		if ($plans_type == 'shared') $rp_plans[$plan_id]['services']['phpPgAdmin'] = $rp_plans[$plan_id]['services']['pgsql'];
		$rp_plans[$plan_id]['services']['web_ssh'] = $rp_plans[$plan_id]['services']['ssh'];
		
		if (!empty($rp_plans[$plan_id]['free_domains'])){
			$rp_plans[$plan_id]['services']['domain_price'] = __rp('FREE', 'FREE');
			$rp_plans[$plan_id]['services']['free_domain'] = 1;
		} else {
			$rp_plans[$plan_id]['services']['domain_price'] = '<span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span>'.sprintf('<span>%0.2f</span>',$domain_price);
			$rp_plans[$plan_id]['services']['free_domain'] = 0;
		}
		//Promo price
		if (!empty(rp_store_promos($plan_id))) {
			$promo = rp_store_promos($plan_id);
			$rp_plans[$plan_id]['services']['prices_1'] = '<span class="compare_price_month"><span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span>'.sprintf('<span>%0.2f</span>', $promo['price_promo']).'<span class="period">/mo</span></span>';
		} else {
			$rp_plans[$plan_id]['services']['prices_1'] = '<span class="compare_price_month"><span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span>'.sprintf('<span>%0.2f</span>',$plan['prices']['period_1'][$plan['store_currency']]).'<span class="period">/mo</span></span>';
		}
		//Anual price
		if ($plans_type == 'dedicated')
            $rp_plans[$plan_id]['services']['prices_12'] = '<span class="compare_price_year"><span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span>'.sprintf('<span>%0.2f</span>',$plan['prices']['period_1'][$plan['store_currency']]).'<span class="period">/yr</span></span>';
        else
            $rp_plans[$plan_id]['services']['prices_12'] = '<span class="compare_price_year"><span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span>'.sprintf('<span>%0.2f</span>',$plan['prices']['period_12'][$plan['store_currency']]).'<span class="period">/yr</span></span>';
		
		if ($plans_type == 'dedicated'){
			$rp_plans[$plan_id]['services']['disk_space_full'] = ($plan['services']['hdd']>1?$plan['services']['hdd'].'x':'').($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'];
			$rp_plans[$plan_id]['services']['ram_full'] = $plan['services']['ram'].' GB '.(isset($plan['services']['ram_type'])?$plan['services']['ram_type']:'');
			if ($upgrades){
				$rp_plans[$plan_id]['services']['cPanel_price'] = 'from ' . sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['cPanel_100']['currency_symbol']),$upgrades['cPanel_100']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['DirectAdmin_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['DirectAdmin']['currency_symbol']),$upgrades['DirectAdmin']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['Hepsia'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['Hepsia']['currency_symbol']),$upgrades['Hepsia']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['ip_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['ip_2_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*2).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['ip_3_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*3).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['backup_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['backup']['currency_symbol']),$upgrades['backup']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['managed_services_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['managed_services']['currency_symbol']),$upgrades['managed_services']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['installation_troubleshooting_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['installation_troubleshooting']['currency_symbol']),$upgrades['installation_troubleshooting']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('h', 'h');
			}
		}
		
		if ($plans_type == 'vps_virtuozzo' && $upgrades){
			if (isset($plan['services']['control_panel'])){
				$rp_plans[$plan_id]['services']['cPanel_price'] = 'from ' . sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['cPanel_5']['currency_symbol']),$upgrades['cPanel_5']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['DirectAdmin_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['DirectAdmin']['currency_symbol']),$upgrades['DirectAdmin']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			}
			$rp_plans[$plan_id]['services']['Hepsia'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['Hepsia']['currency_symbol']),$upgrades['Hepsia']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_2_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*2).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_3_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*3).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_128_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_256_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*2).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_384_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*3).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_512_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*4).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['backup_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['backup']['currency_symbol']),$upgrades['backup']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['managed_services_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['managed_services']['currency_symbol']),$upgrades['managed_services']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['installation_troubleshooting_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['installation_troubleshooting']['currency_symbol']),$upgrades['installation_troubleshooting']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('h', 'h');
		}

		if ($plans_type == 'vps_kvm' && $upgrades) {
			if (isset($plan['services']['control_panel'])) {
				$rp_plans[$plan_id]['services']['Hepsia'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['Hepsia']['currency_symbol']),$upgrades['Hepsia']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['cPanel_price'] = 'from ' . sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['cPanel_5']['currency_symbol']),$upgrades['cPanel_5']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
			}
			$rp_plans[$plan_id]['services']['ip_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_2_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*2).'/'.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_3_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*3).'/'.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['installation_troubleshooting_price'] = sprintf(str_replace('%0.2f', '<span>'.'%0.2f'.'</span>', $upgrades['installation_troubleshooting']['currency_symbol']),$upgrades['installation_troubleshooting']['prices'][$GLOBALS['rp_info']['store_currency']]).'/'.__rp('h', 'h');
		}
	}
	
	$content = trim($content);
	$guide_raw = explode("\n",$content);
	$guide = array();
	$_section = false;
	foreach ($guide_raw as $key=>$row){ 
		$row=trim($row);
		if (!$_section && $row){$_section = $row; continue;}
		if ($_section && empty($row)){$_section = false; continue;}
		$row_content = explode('|', $row, 3);
		if (count($row_content) < 3)
			do { $row_content[]=null;
			} while (count($row_content) < 3);
		if ($row){
			list($label, $info, $value)=$row_content;
			$guide[$_section][]=array(
			'label' => $label,
			'info' => $info,
			'value' => $value,
			'column' => $value[0] == '=' ? substr($value, 1) : false,);
		}
	}
	ob_start();
	if ($plans_type == 'dedicated')
		require RSP_PATH . '/templates/plans_dedicated.php';
	else
		require  RSP_PATH.'/templates/plans.php';

	$string=ob_get_contents();
	ob_end_clean();
	return $string;
}
//example [rp_plans type='shared' lang='de']
add_shortcode( 'rp_plans', 'rp_display_plans' );

// Single plan display shortcode
function rp_display_plan_single( $atts, $content=null ) {
	global $rp_lang, $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'plan' => '',
		'type' => 'shared',
		'upgrades'=> '',
		'button' => '',
		'best' => ''
	), $atts ) );
	if (empty($plan)) return;
	$plans_type = $type;
	$content = str_replace("</p>\n<p>", "\n\n", $content);
	$content = str_replace("<br />\n", "\n", do_shortcode($content));
	$content = html_entity_decode($content);
	
	$rp_signup_url = get_permalink(get_option('rp_order_form'));

	// Get only required plan information from the api request
	switch ($plans_type){
		case 'shared':
			if (!empty($GLOBALS['rp_info']['shared_plans'])) $rp_plans = array($plan => $GLOBALS['rp_info']['shared_plans'][$plan]);
			$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
			break;
		case 'vps_virtuozzo':
			if (!empty($GLOBALS['rp_info']['vps_plans'])) $rp_plans = array($plan => $GLOBALS['rp_info']['vps_plans'][$plan]);
			if ($upgrades){
				if (!empty($GLOBALS['rp_info']['vps_upgrades'])) $upgrades = $GLOBALS['rp_info']['vps_upgrades'];
			}
			$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
			break;
		case 'vps_kvm':
			if (!empty($GLOBALS['rp_info']['vps_kvm_plans'])) $rp_plans = array($plan => $GLOBALS['rp_info']['vps_kvm_plans'][$plan]);
			if ($upgrades){
				if (!empty($GLOBALS['rp_info']['vps_kvm_upgrades'])) $upgrades = $GLOBALS['rp_info']['vps_kvm_upgrades'];
			}
			$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
			break;
		case 'vps_openvz':
			if (!empty($GLOBALS['rp_info']['vps_openvz_plans'])) $rp_plans = array($plan => $GLOBALS['rp_info']['vps_openvz_plans'][$plan]);
			$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
			break;
		case 'semi_dedicated':
			if (!empty($GLOBALS['rp_info']['semi_dedicated_plans'])) $rp_plans = array($plan => $GLOBALS['rp_info']['semi_dedicated_plans'][$plan]);
			$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
			break;
		case 'dedicated':
			if (!empty($GLOBALS['rp_info']['dedicated_plans'])) $rp_plans = array($plan => $GLOBALS['rp_info']['dedicated_plans'][$plan]);
			if ($upgrades){
				if (!empty($GLOBALS['rp_info']['dedicated_upgrades'])) $upgrades = $GLOBALS['rp_info']['dedicated_upgrades'];
			}
			$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
			break;
	}
	
	if (!is_array($rp_plans) or empty($rp_plans)) return RP_API_ERROR." (".$plans_type." plans not available)";

	if ($plans_type == 'shared')
	{
		// get promo domain price
		$domain_price = $GLOBALS['rp_info']['domain_prices']['com']['prices']['period_12'][$GLOBALS['rp_info']['store_currency']];
	} else {
		// get default domain price 
		$domain_price = $GLOBALS['rp_info']['registerdomain_prices']['com']['prices']['period_12'][$GLOBALS['rp_info']['store_currency']];
	}
	
	$rp_best_plan = null;
	
	$get_params_string = parse_url($rp_signup_url,PHP_URL_QUERY);
	if ($get_params_string) {
		$get_params = explode("&", $get_params_string);
		foreach ($get_params as $key=>$value){
			$name_value = explode("=", $value);
			$get_params[$name_value[0]]=$name_value[1];
			unset($get_params[$key]);
		}
	}
	
	if ($plans_type == 'vps_openvz'){
		ob_start();
		require  RSP_PATH.'/templates/vps_openvz.php';
		$string=ob_get_contents();
		ob_end_clean();	
		return $string;
	}
	
	// Add plans price as part of the services
	foreach ($rp_plans as $plan_id => $plan){
		if ($plan['name'] == 'Domain Manager'){
			unset($rp_plans[$plan_id]);
			continue;
		}
		if ($plans_type == 'shared' || $plans_type == 'semi_dedicated'){
			$rp_plans[$plan_id]['services']['mail_list_members']=($rp_plans[$plan_id]['services']['mail_list']?__rp('unlimited','Unlimited'):__rp('optional','Optional'));
		}

		if ($plans_type == 'shared' && isset($rp_plans[$plan_id]['services']['pgsql']))
           	$rp_plans[$plan_id]['services']['phpPgAdmin'] = $rp_plans[$plan_id]['services']['pgsql'];
 
        if (isset($rp_plans[$plan_id]['services']['ssh']))
            $rp_plans[$plan_id]['services']['web_ssh'] = $rp_plans[$plan_id]['services']['ssh'];
		
		if (!empty($rp_plans[$plan_id]['free_domains'])){
			$rp_plans[$plan_id]['services']['domain_price'] = __rp('FREE', 'FREE');
			$rp_plans[$plan_id]['services']['free_domain'] = 1;
		} else {
			$rp_plans[$plan_id]['services']['domain_price'] = '<span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span> '.sprintf('<span>%0.2f</span>',$domain_price);
			$rp_plans[$plan_id]['services']['free_domain'] = 0;
		}
		$rp_plans[$plan_id]['services']['prices_1'] = '<span class="compare_price_month"><span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span>'.sprintf('<span>%0.2f</span>',$plan['prices']['period_1'][$plan['store_currency']]).' <span class="period">/ mo</span></span>';
		$rp_plans[$plan_id]['services']['prices_12'] = '<span class="compare_price_year"><span class="currency">'._rp_get_currency_symbol($plan['store_currency']).'</span>'.sprintf('<span>%0.2f</span>',$plan['prices']['period_12'][$plan['store_currency']]).' <span class="period">/ yr</span></span>';
		
		if ($plans_type == 'dedicated'){
			$rp_plans[$plan_id]['services']['disk_space_full'] = ($plan['services']['hdd']>1?$plan['services']['hdd'].'x':'').($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'];
			$rp_plans[$plan_id]['services']['ram_full'] = $plan['services']['ram'].' GB '.(isset($plan['services']['ram_type'])?$plan['services']['ram_type']:'');
			if ($upgrades){
				$rp_plans[$plan_id]['services']['cPanel_price'] = 'from ' . sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['cPanel_100']['currency_symbol']),$upgrades['cPanel_100']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['DirectAdmin_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['DirectAdmin']['currency_symbol']),$upgrades['DirectAdmin']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['Hepsia'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['Hepsia']['currency_symbol']),$upgrades['Hepsia']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['ip_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['ip_2_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*2).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['ip_3_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*3).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['backup_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['backup']['currency_symbol']),$upgrades['backup']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['managed_services_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['managed_services']['currency_symbol']),$upgrades['managed_services']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['installation_troubleshooting_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['installation_troubleshooting']['currency_symbol']),$upgrades['installation_troubleshooting']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('h', 'h');
			}
		}
		
		if ($plans_type == 'vps_virtuozzo' && $upgrades) {
			if (isset($plan['services']['control_panel'])){
				$rp_plans[$plan_id]['services']['cPanel_price'] = 'from ' . sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['cPanel_5']['currency_symbol']),$upgrades['cPanel_5']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['DirectAdmin_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['DirectAdmin']['currency_symbol']),$upgrades['DirectAdmin']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			}
			$rp_plans[$plan_id]['services']['Hepsia'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['Hepsia']['currency_symbol']),$upgrades['Hepsia']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_2_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*2).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_3_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*3).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_128_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_256_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*2).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_384_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*3).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_512_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*4).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['backup_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['backup']['currency_symbol']),$upgrades['backup']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['managed_services_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['managed_services']['currency_symbol']),$upgrades['managed_services']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['installation_troubleshooting_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['installation_troubleshooting']['currency_symbol']),$upgrades['installation_troubleshooting']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('h', 'h');
		}

		if ($plans_type == 'vps_kvm' && $upgrades) {
			if (isset($plan['services']['control_panel'])){
				$rp_plans[$plan_id]['services']['cPanel_price'] = 'from ' . sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['cPanel_5']['currency_symbol']),$upgrades['cPanel_5']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
				$rp_plans[$plan_id]['services']['DirectAdmin_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['DirectAdmin']['currency_symbol']),$upgrades['DirectAdmin']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			}
			$rp_plans[$plan_id]['services']['Hepsia'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['Hepsia']['currency_symbol']),$upgrades['Hepsia']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_2_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*2).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ip_3_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ips']['currency_symbol']),$upgrades['ips']['prices'][$GLOBALS['rp_info']['store_currency']]*3).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_128_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_256_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*2).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_384_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*3).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['ram_512_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['ram']['currency_symbol']),$upgrades['ram']['prices'][$GLOBALS['rp_info']['store_currency']]*4).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['backup_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['backup']['currency_symbol']),$upgrades['backup']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['managed_services_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['managed_services']['currency_symbol']),$upgrades['managed_services']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('mo', 'mo');
			$rp_plans[$plan_id]['services']['installation_troubleshooting_price'] = sprintf(str_replace('%0.2f', ' <span>'.'%0.2f'.'</span>', $upgrades['installation_troubleshooting']['currency_symbol']),$upgrades['installation_troubleshooting']['prices'][$GLOBALS['rp_info']['store_currency']]).' / '.__rp('h', 'h');
		}
	}
	
	$content = trim($content);
	$guide_raw = explode("\n",$content);
	$guide = array();
	$_section = false;
	foreach ($guide_raw as $key=>$row){ 
		$row=trim($row);
		if (!$_section && $row){$_section = $row; continue;}
		if ($_section && empty($row)){$_section = false; continue;}
		$row_content = explode('|', $row, 3);
		if (count($row_content) < 3)
			do { $row_content[]=null;
			} while (count($row_content) < 3);
		if ($row){
			list($label, $info, $value)=$row_content;
			$guide[$_section][]=array(
			'label' => $label,
			'info' => $info,
			'value' => $value,
			'column' => $value[0] == '=' ? substr($value, 1) : false,);
		}
	}
	ob_start();
	require  RSP_PATH.'/templates/plans.php';
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
//example [rp_display_plan_single type='shared']
add_shortcode( 'rp_plan_single', 'rp_display_plan_single' );

// Plan display short shortcode
function rp_display_plans_short( $atts, $content=null ) {
	global $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => 'shared',
		'button' => '',
		'title' => '',
		'plans' => '',
		'best' => '',
		'dc' => '',
		'show_link' => '',
		'url_shared' => $GLOBALS['rp_settings']['default_urls']['shared_hosting'],
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']
	), $atts ) );
	$plans_type = $type;
	$content = str_replace("</p>\n<p>", "\n\n", $content);
	$content = str_replace("<br />\n", "\n", do_shortcode($content));
	$content = html_entity_decode($content);
	
	$rp_signup_url = get_permalink(get_option('rp_order_form'));
	
	// Get only required plan information from the api request
	switch ($plans_type){
		case 'vps_virtuozzo':
			if (!empty($GLOBALS['rp_info']['vps_plans'])){
				$rp_plans = $GLOBALS['rp_info']['vps_plans'];
				$plans = explode(',',$plans);
				foreach((array)$plans as $value)
				{
					$value = (int)$value;
					if (array_key_exists($value, $GLOBALS['rp_info']['vps_plans']))
						$rp_plans[$value] = $GLOBALS['rp_info']['vps_plans'][$value];
				}
				if (!is_array($rp_plans) or empty($rp_plans)) return;
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_plans'],0,3,true);
				$compare_url = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) :  get_permalink(get_option('rp_vps_plan'));
				$file = RSP_PATH.'/templates/vps_compare.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
			break;
		case 'vps_kvm':
			if (empty($GLOBALS['rp_info']['vps_kvm_plans']))
				return;
			$rp_plans = $GLOBALS['rp_info']['vps_kvm_plans'];
			$plans = explode(',', $plans);
			foreach ((array)$plans as $value) {
				$value = (int) $value;
				if (array_key_exists($value, $GLOBALS['rp_info']['vps_kvm_plans']))
					$rp_plans[$value] = $GLOBALS['rp_info']['vps_kvm_plans'][$value];
			}
			if (empty($rp_plans) || !is_array($rp_plans))
				return;
			$rp_plans = array_slice($GLOBALS['rp_info']['vps_kvm_plans'], 0, 4, true);
			$compare_url = (!empty($url_vps_kvm) && get_option($url_vps_kvm) !== false) ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_kvm_plan'));
			$file = RSP_PATH . '/templates/vps_compare.php';
			$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
			break;
		case 'vps_openvz':
			if (!empty($GLOBALS['rp_info']['vps_openvz_plans'])){
				$rp_plans = $GLOBALS['rp_info']['vps_openvz_plans'];
				$plans = explode(',',$plans);
				foreach((array)$plans as $value)
				{
					$value = (int)$value;
					if (array_key_exists($value, $GLOBALS['rp_info']['vps_openvz_plans']))
						$rp_plans[$value] = $GLOBALS['rp_info']['vps_openvz_plans'][$value];
				}
				if (!is_array($rp_plans) or empty($rp_plans)) return;
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_openvz_plans'],0,4,true);
				$compare_url = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) :  get_permalink(get_option('rp_vps_openvz_plan'));
				$file = RSP_PATH.'/templates/vps_compare.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
			break;
		case 'shared_compare':
			if (!empty($GLOBALS['rp_info']['shared_plans'])){
				$rp_plans = $GLOBALS['rp_info']['shared_plans'];
				$plans = explode(',',$plans);
				foreach((array)$plans as $value)
				{
					$value = (int)$value;
					if (array_key_exists($value, $GLOBALS['rp_info']['shared_plans']))
						$rp_plans[$value] = $GLOBALS['rp_info']['shared_plans'][$value];
				}
				if (!is_array($rp_plans) or empty($rp_plans)) return;
				$rp_plans = array_slice($GLOBALS['rp_info']['shared_plans'],0,5,true);
				$file = RSP_PATH.'/templates/shared_compare.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
			break;
		case 'semi_dedicated_compare':
			if (!empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
				$rp_plans = $GLOBALS['rp_info']['semi_dedicated_plans'];
				$plans = explode(',',$plans);
				foreach((array)$plans as $value)
				{
					$value = (int)$value;
					if (array_key_exists($value, $GLOBALS['rp_info']['semi_dedicated_plans']))
						$rp_plans[$value] = $GLOBALS['rp_info']['semi_dedicated_plans'][$value];
				}
				if (!is_array($rp_plans) or empty($rp_plans)) return;
				$rp_plans = array_slice($GLOBALS['rp_info']['semi_dedicated_plans'],0,4,true);
				$file = RSP_PATH.'/templates/semi_dedicated_compare.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
			break;
		case 'dedicated_compare':
			if (!empty($GLOBALS['rp_info']['dedicated_plans'])){
				$rp_plans = $GLOBALS['rp_info']['dedicated_plans'];
				$plans = explode(',',$plans);
				foreach((array)$plans as $value)
				{
					$value = (int)$value;
					if (array_key_exists($value, $GLOBALS['rp_info']['dedicated_plans']))
						$rp_plans[$value] = $GLOBALS['rp_info']['dedicated_plans'][$value];
				}
				if (!is_array($rp_plans) or empty($rp_plans)) return;
				$rp_plans = array_slice($GLOBALS['rp_info']['dedicated_plans'],0,4,true);
				$file = RSP_PATH.'/templates/dedicated_compare.php';
				$compare_url = (!empty($url_dedicated) and get_option($url_dedicated) !== false) ? get_permalink(get_option($url_dedicated)) :  get_permalink(get_option('rp_dedicated_plan'));
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
			break;
		case 'vps_openvz_all':
			if (!empty($GLOBALS['rp_info']['vps_openvz_plans'])){
				$rp_plans = $GLOBALS['rp_info']['vps_openvz_plans'];
				if (!is_array($rp_plans) or empty($rp_plans)) return;
				$file = RSP_PATH.'/templates/vps_openvz_2.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
			break;
		case 'shared':
			if (!empty($GLOBALS['rp_info']['shared_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['shared_plans'],0,6,true);
				$file = RSP_PATH.'/templates/compare_shared_short.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
			break;
		case 'vps_virtuozzo_short':
			if (!empty($GLOBALS['rp_info']['vps_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_plans'],0,6,true);
				$file = RSP_PATH.'/templates/compare_vps_virtuozzo_short.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
			break;
		case 'vps_kvm_short':
			if (!empty($GLOBALS['rp_info']['vps_kvm_plans'])) {
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_kvm_plans'], 0, 6, true);
				$file = RSP_PATH . '/templates/compare_vps_kvm_short.php';
			} else
				return;
			$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
			break;
		case 'vps_openvz_short':
			if (!empty($GLOBALS['rp_info']['vps_openvz_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_openvz_plans'],0,6,true);
				$file = RSP_PATH.'/templates/compare_vps_openvz_short.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
			break;
		case 'semi_dedicated':
			if (!empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['semi_dedicated_plans'],0,6,true);
				$file = RSP_PATH.'/templates/compare_semi_dedicated_short.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
			break;
		case 'dedicated':
			if (!empty($GLOBALS['rp_info']['dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['dedicated_plans'],0,6,true);
				$file = RSP_PATH.'/templates/compare_dedicated_short.php';
			} else return;
			$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
			break;
		case 'dedicated_horizontal':
			if (!empty($GLOBALS['rp_info']['dedicated_plans'])) {
				$rp_plans = $GLOBALS['rp_info']['dedicated_plans'];
				$file = RSP_PATH . '/templates/compare_dedicated_short_horizontal.php';
			} else
				return;

			$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
			break;
		default: return;
	}
	
	if (!is_array($rp_plans) or empty($rp_plans)) return;
	
	if (in_array($type,array('shared','vps_virtuozzo_short','vps_openvz_short','vps_kvm_short','semi_dedicated','dedicated'))){
		$content = trim($content);
		$rows = explode("\n",$content);
		$notes = array();
		if (is_array($rows) and count($rows)>0)
		{
			foreach($rows as $row)
			{
				if (empty($row)) continue;
				$row_content = explode('|', $row, 2);
				if (is_array($row_content) and count($row_content)==2)
					$notes[$row_content[0]] = $row_content[1];
			}
		}
		
		$min_price_plan = null;
		$max_price_plan = null;
		foreach($rp_plans as $key=>$plan)
		{
			if (empty($min_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] < $rp_plans[$min_price_plan]['prices']['period_1'][$plan['store_currency']])
				$min_price_plan = $key;
			
			if (empty($max_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] > $rp_plans[$max_price_plan]['prices']['period_1'][$plan['store_currency']])
				$max_price_plan = $key;
		}
		$br = 1;
		foreach ($rp_plans as $key=>$plan) {
			if ($key == $min_price_plan and !empty($notes['min_price_plan']))
				$rp_plans[$min_price_plan]['note'] = $notes['min_price_plan'];
			else if ($key == $max_price_plan and !empty($notes['max_price_plan']))
				$rp_plans[$max_price_plan]['note'] = $notes['max_price_plan'];
			else if (!empty($notes['plan'.$br])) {
				 $rp_plans[$key]['note'] = $notes['plan'.$br];
				 $br++;
			}
		}	
	}
	
	$rp_best_plan = null;
	if (!empty($best) and array_key_exists($best,(array)$rp_plans))
		$rp_best_plan = $best;

	// ADD DC to order url
	if (!empty($dc))
		$rp_signup_url .= preg_match('/\?/', $rp_signup_url) ? "&datacenter=$dc" : "?datacenter=$dc";
	
	$get_params_string = parse_url($rp_signup_url,PHP_URL_QUERY);
	if ($get_params_string) {
		$get_params = explode("&", $get_params_string);
		foreach ($get_params as $key=>$value){
			$name_value = explode("=", $value);
			$get_params[$name_value[0]]=$name_value[1];
			unset($get_params[$key]);
		}
	}
	
	ob_start();
	if (file_exists($file)) require($file);
	$string=ob_get_contents();
	ob_end_clean();	
	return $string;
}
//example [rp_plans_short type='vps_openvz' plans='1,2' best='1']
add_shortcode( 'rp_plans_short', 'rp_display_plans_short' );

// Plan display in tabs
function rp_display_plans_tabs( $atts ) {
	global $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'dc' => ''
	), $atts ) );
	
	switch($dc){
		case 'steadfast':
		case 'colohouse':
			$dc_key = 'colohouse';
			break;
		case 'sydney':
			$dc_key = 'sis_group';
			break;
		case 'berkshire':
		case 'coventry':
		case 'ukservers':
			$dc_key = 'ukservers';
			break;
		case 'pori':
		case 'ficolo':
			$dc_key = 'ficolo';
			break;
		case 'telepoint':
		case 's3':
		case 'sofia':
		case 's3c':
			$dc_key = 's3c';
			break;
		default:
			$dc_key = 'colohouse';
	}
	
	ob_start();
	require  RSP_PATH.'/templates/plans_tabs.php';
  	$string=ob_get_contents();
  	ob_end_clean();
	return do_shortcode($string);
}
//example [rp_plans_tabs]
add_shortcode( 'rp_plans_tabs', 'rp_display_plans_tabs' );

// Article page compare plans table
function rp_services_table_short( $atts) {
	global $rp_api, $rp_api_error;
		
	$serives = array();
	
	if (!empty($GLOBALS['rp_info']['shared_plans'])){
		foreach($GLOBALS['rp_info']['shared_plans'] as $value){
			if (empty($services['shared']) or $value['prices']['period_1'][$value['store_currency']] < $services['shared']['prices']['period_1'][$services['shared']['store_currency']])
				$services['shared'] = $value;
		}
	}
	if (!empty($GLOBALS['rp_info']['vps_plans'])){
		foreach($GLOBALS['rp_info']['vps_plans'] as $value){
			if (empty($services['vps_virtuozzo']) or $value['prices']['period_1'][$value['store_currency']] < $services['vps_virtuozzo']['prices']['period_1'][$services['vps_virtuozzo']['store_currency']])
				$services['vps_virtuozzo'] = $value;
		}
	}
	if (!empty($GLOBALS['rp_info']['vps_kvm_plans'])) {
		foreach ($GLOBALS['rp_info']['vps_kvm_plans'] as $value) {
			if (empty($services['vps_kvm']) || $value['prices']['period_1'][$value['store_currency']] < $services['vps_kvm']['prices']['period_1'][$services['vps_kvm']['sotre_currency']])
				$services['vps_kvm'] = $value;
		}
	}
	if (!empty($GLOBALS['rp_info']['vps_openvz_plans'])){
		foreach($GLOBALS['rp_info']['vps_openvz_plans'] as $value){
			if (empty($services['vps_openvz']) or $value['prices']['period_1'][$value['store_currency']] < $services['vps_openvz']['prices']['period_1'][$services['vps_openvz']['store_currency']])
				$services['vps_openvz'] = $value;
		}
	}
	if (!empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
		foreach($GLOBALS['rp_info']['semi_dedicated_plans'] as $value){
			if (empty($services['semi_dedicated']) or $value['prices']['period_1'][$value['store_currency']] < $services['semi_dedicated']['prices']['period_1'][$services['semi_dedicated']['store_currency']])
				$services['semi_dedicated'] = $value;
		}
	}
	if (!empty($GLOBALS['rp_info']['dedicated_plans'])){
		foreach($GLOBALS['rp_info']['dedicated_plans'] as $value){
			if (empty($services['dedicated']) or $value['prices']['period_1'][$value['store_currency']] < $services['dedicated']['prices']['period_1'][$services['dedicated']['store_currency']])
				$services['dedicated'] = $value;
		}
	}
	
	if (!is_array($services) or empty($services)) return;
	
	
	$rp_signup_url = get_permalink(get_option('rp_order_form'));
	$get_params_string = parse_url($rp_signup_url,PHP_URL_QUERY);
	if ($get_params_string) {
		$get_params = explode("&", $get_params_string);
		foreach ($get_params as $key=>$value){
			$name_value = explode("=", $value);
			$get_params[$name_value[0]]=$name_value[1];
			unset($get_params[$key]);
		}
	}
	
	ob_start();
	include(RSP_PATH.'/templates/compare_services_short.php');
  	$string=do_shortcode(ob_get_contents());
	ob_end_clean();	
	return $string;
}
//example [services_table_short]
add_shortcode( 'services_table_short', 'rp_services_table_short' );


// Display plans in selected data center
function rp_dc_plans( $atts, $content=null ) {
	global $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'dc' => '',
		'type' => ''
	), $atts ) );

	$mapping = array(
		// SERVICE => KEY
		'services' => array(
			'shared' => 'shared',
			'vps_openvz' => 'vps_openvz',
			'vps_virtuozzo' => 'vps',
			'vps_kvm' => 'vps_kvm',
			'semi_dedicated' => 'semidedicated',
			'dedicated' => 'dedicated',
		),
		// DATACENTER => KEY
		'datacenters' => array(
			'steadfast' => 'colohouse',
            'colohouse' => 'colohouse',
			'sydney' => 'sis_group',
			'berkshire' => 'ukservers',
            'ukservers' => 'ukservers',
            'coventry' => 'ukservers',
			'ficolo' => 'ficolo',
			's3c' => 's3c',
			'sofia' => 's3c',
			'telepoint' => 's3c',
		),
	);

	if (empty($dc) || !array_key_exists($type, $mapping['services']))
		return;

	if (
		!array_key_exists($dc, $mapping['datacenters']) ||
		!array_key_exists($mapping['datacenters'][$dc], $GLOBALS['rp_info']['datacenters'][$mapping['services'][$type]])
	)
		return;

	return do_shortcode($content);
}
//example [dc_plans dc="fremont" type="shared"]
add_shortcode( 'dc_plans', 'rp_dc_plans' );

function rp_order_return_hook(){
	if (!empty($GLOBALS['wp_query']->queried_object->ID)
		&& $GLOBALS['wp_query']->queried_object->ID == get_option('rp_order_form')
		&& !empty($_GET['return'])
	)
		_rp_order_return();
	return;
}
add_action( 'pre_get_posts', 'rp_order_return_hook' );

function rp_get_order_form($atts, $content = null){
	if (!empty($_GET['enable_debug']) && $_GET['enable_debug'] == 1)
		ini_set('display_errors', 1);

	global $rp_info, $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'page' => 'rp_order_form',
		'lang' => 'en',
	), $atts ) );
	
	if (!empty($_SERVER['QUERY_STRING'])){
		$query_str = $_SERVER['QUERY_STRING'];
		$patterns = array('/action/i','/\$/i','/\&lt;\?/i','/<\?/i','/\%3C\?/i');
		preg_replace($patterns,'false',$query_str);
	}
	ob_start();
	require  RSP_PATH.'/templates/order.php';
  	return ob_get_clean();
	
}
add_shortcode( 'rp_order_form', 'rp_get_order_form' );


/**
 * Generates domain pricing tabs
 * 
 * @param array $attr
 * 
 */
function rp_domain_tabs($attr){
	
	global $rp_lang, $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'lang'       => 'en',
		'id_protect'       => 0
	), $attr ) );
	$rp_lang = $lang;
		
	// Print a general domain search form
	ob_start();
	require RSP_PATH.'/templates/domains/domain_tabs.php';
	return ob_get_clean();
}
// Example [rp_domain_tabs lang='de']
add_shortcode('rp_domain_tabs', 'rp_domain_tabs');

/**
 * TLD + Hosting Pricing Talbe
 * 
 * @param array $attr
 * 
 */
function rp_tld_hosting_price($attr){
	
	global $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant'       => '1',
		'id_protect'       => 0
	), $attr ) );
	
	$domain_prices = $GLOBALS['rp_info']['domain_prices'];
	
	$free_plans = _rp_get_free_domain_plans();

	$tlds_info = _rp_get_domains_info();

	if (!empty($free_plans) && is_array($free_plans)) {
		$rp_plan = $GLOBALS['rp_info']['shared_plans'][$free_plans[0]];

		foreach($domain_prices as $key => $value) {
			if (empty($value['prices']['period_12'][$value['store_currency']]))
				continue;

			if (in_array($key, $rp_plan['free_domains'])) {
				$reduction = $value['prices']['period_12'][$value['store_currency']];

				foreach($value['prices'] as $k => $v)
					$domain_prices[$key]['prices'][$k][$value['store_currency']] = $v[$value['store_currency']] - $reduction;
			}
		}
	}

	$registerdomain_prices = $GLOBALS['rp_info']['registerdomain_prices'];
	$prices = array_merge($registerdomain_prices, $domain_prices);
	$tlds = _rp_get_domains_info(array('active' => true, 'prices' => array('price'), 'periods_no_collapse' => true));

	ob_start();
	if ($variant == 2){
		$prices = array_slice($prices,0,20,true);
		require RSP_PATH.'/templates/domains/tld_price_two_years.php';
	} else
		require RSP_PATH.'/templates/domains/tld_price.php';
	return ob_get_clean();
}
// Example [rp_tld_hosting_price variant=2]
add_shortcode('rp_tld_hosting_price', 'rp_tld_hosting_price');

/**
 * TLD Pricing Talbe
 * 
 * @param array $attr
 * 
 */
function rp_tld_price($attr){
	
	global $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant'       => '1',
		'id_protect'       => 0
	), $attr ) );
	
	$prices = $GLOBALS['rp_info']['registerdomain_prices'];
	$tlds = _rp_get_domains_info(array('active' => true, 'prices' => array('price'), 'periods_no_collapse' => true));
	$tlds_info = _rp_get_domains_info();
	
	ob_start();
	if ($variant == 2){
		$prices = array_slice($prices,0,20,true);
		require RSP_PATH.'/templates/domains/tld_price_two_years.php';
	} else
		require RSP_PATH.'/templates/domains/tld_price.php';
	return ob_get_clean();
}
// Example [rp_tld_price variant=2]
add_shortcode('rp_tld_price', 'rp_tld_price');

/**
 * TLD Info Talbe
 * 
 * @param array $attr
 * 
 */
function rp_tld_info($attr){
	
	global $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant'       => '1',
		'id_protect'       => 0
	), $attr ) );
	
	$tlds = _rp_get_domains_info(array('active' => true, 'prices' => array('price'), 'periods_no_collapse' => true));	
	$tlds_info = _rp_get_domains_info();
	$prices = $GLOBALS['rp_info']['registerdomain_prices'];
	
	ob_start();
	if ($variant == 2){
		$tlds = array_slice($tlds,0,20,true);
		$prices = array_slice($prices,0,20,true);
		require RSP_PATH.'/templates/domains/tld_info_small.php';
	} else
		require RSP_PATH.'/templates/domains/tld_info.php';
	return ob_get_clean();
}
// Example [rp_tld_info]
add_shortcode('rp_tld_info', 'rp_tld_info');


/**
 * Generates domain pricing tabs
 * 
 * @param array $attr
 * 
 */
function rp_domain_tabs_sole($attr){
	
	global $rp_lang, $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type'       => 'domain_name_only'
	), $attr ) );
		
	// Print a general domain search form
	ob_start();
	require RSP_PATH.'/templates/domains/domain_tabs_sole.php';
	return do_shortcode(ob_get_clean());
}
// Example [rp_domain_tabs_sole type='domain_name_only']
add_shortcode('rp_domain_tabs_sole', 'rp_domain_tabs_sole');


/**
 * Selected Domain Banner
 * 
 * @param array $attr
 * 
 */
function rp_domain_names_sole_banner($attr){
	
	global $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'tld'       => 'com',
		'variant'   => '1'
	), $attr ) );
	
	$tld = trim($tld);
	$domain_prices = $GLOBALS['rp_info']['domain_prices'];
	
	$free_plans = _rp_get_free_domain_plans();

	if (!empty($free_plans) && is_array($free_plans)) {
		$rp_plan = $GLOBALS['rp_info']['shared_plans'][$free_plans[0]];

		foreach($domain_prices as $key => $value) {
			if (empty($value['prices']['period_12'][$value['store_currency']]))
				continue;

			if (in_array($key, $rp_plan['free_domains'])) {
				$reduction = $value['prices']['period_12'][$value['store_currency']];

				foreach($value['prices'] as $k => $v)
					$domain_prices[$key]['prices'][$k][$value['store_currency']] = $v[$value['store_currency']] - $reduction;
			}
		}
	}

	$registerdomain_prices = $GLOBALS['rp_info']['registerdomain_prices'];
	$domains = array_merge($registerdomain_prices, $domain_prices);
	if (!array_key_exists($tld,$domains)) $tld = key($domains);
	
	$domain = $domains[$tld];
	if ($variant == 2) $domain_sole = $registerdomain_prices[$tld];
	
	ob_start();
	if ($variant == 2)
		require RSP_PATH.'/templates/domains/domain_names_sole_hosting_banner.php';
	else
		require RSP_PATH.'/templates/domains/domain_names_sole_banner.php';
	return ob_get_clean();
}
// Example [domain_names_hosting_banner]
add_shortcode('domain_names_sole_banner', 'rp_domain_names_sole_banner');

/**
 * Domain + Hosting Banner
 * 
 * @param array $attr
 * 
 */
function rp_domain_names_hosting_banner($attr){
	
	global $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'lang'       => 'en'
	), $attr ) );
	
	
	$domain_prices = $GLOBALS['rp_info']['domain_prices'];
	
	$free_plans = _rp_get_free_domain_plans();

	if (!empty($free_plans) && is_array($free_plans)) {
		$rp_plan = $GLOBALS['rp_info']['shared_plans'][$free_plans[0]];

		foreach($domain_prices as $key => $value) {
			if (empty($value['prices']['period_12'][$value['store_currency']]))
				continue;

			if (in_array($key, $rp_plan['free_domains'])) {
				$reduction = $value['prices']['period_12'][$value['store_currency']];

				foreach($value['prices'] as $k => $v)
					$domain_prices[$key]['prices'][$k][$value['store_currency']] = $v[$value['store_currency']] - $reduction;
			}
		}
	}
	
	$registerdomain_prices = $GLOBALS['rp_info']['registerdomain_prices'];
	$prices = array_merge($registerdomain_prices, $domain_prices);
	
	$domains1 = array_slice($prices,0,4,true);
	$domains2 = array_slice($prices,4,4,true);
	
	ob_start();
	require RSP_PATH.'/templates/domains/domain_names_hosting_banner.php';
	return ob_get_clean();
}
// Example [domain_names_hosting_banner]
add_shortcode('domain_names_hosting_banner', 'rp_domain_names_hosting_banner');

/**
 * Domain Only Banner
 * 
 * @param array $attr
 * 
 */
function rp_domain_names_only_banner($attr){
	
	global $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'lang'       => 'en'
	), $attr ) );
	$rp_lang = $lang;
	
	$domains1 = array_slice($GLOBALS['rp_info']['registerdomain_prices'],0,4,true);
	$domains2 = array_slice($GLOBALS['rp_info']['registerdomain_prices'],4,4,true);
	
	ob_start();
	require RSP_PATH.'/templates/domains/domain_names_only_banner.php';
	return ob_get_clean();
}
// Example [domain_names_only_banner]
add_shortcode('domain_names_only_banner', 'rp_domain_names_only_banner');


/**
 * Domain Extensions Table
 * 
 * @param array $attr
 * 
 */
function rp_domain_extensions_table($attr){
	
	global $rp_lang, $rp_api, $rp_settings, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'lang'       => 'en'
	), $attr ) );
	
	$domain_prices = $GLOBALS['rp_info']['domain_prices'];
	$tlds_info = _rp_get_domains_info();
	$free_plans = _rp_get_free_domain_plans();
	if (is_array($free_plans) and !empty($free_plans)){
		foreach($domain_prices as $key=>$value)
		{
			if (empty($value['prices']['period_12'][$value['store_currency']])) continue;
			$reduction = $value['prices']['period_12'][$value['store_currency']];
			foreach($value['prices'] as $k=>$v)
				$domain_prices[$key]['prices'][$k][$value['store_currency']] = $v[$value['store_currency']] - $reduction;
		}
	}
	
	$registerdomain_prices = $GLOBALS['rp_info']['registerdomain_prices'];
	$domains = array_merge($registerdomain_prices, $domain_prices);
	
	ob_start();
	require RSP_PATH.'/templates/domains/domain_extensions_table.php';
	return ob_get_clean();
}
// Example [domain_extensions_table]
add_shortcode('domain_extensions_table', 'rp_domain_extensions_table');


/**
 * Domain Extensions Accordion Tables
 * 
 * @param array $attr
 * 
 */
function rp_domain_extensions_accordion($attr){
	
	global $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'active'       => '0'
	), $attr ) );
	
	$active = (int)$active;
	ob_start();
	require RSP_PATH.'/templates/domains/domain_extensions_accordion.php';
	return do_shortcode(ob_get_clean());
}
// Example [domain_extensions_accordion]
add_shortcode('domain_extensions_accordion', 'rp_domain_extensions_accordion');


/**
 * Domain Extensions Accordion Tables
 * 
 * @param array $attr
 * 
 */
function rp_domain_prices_box($attr){
	
	global $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'tld'       => 'com'
	), $attr ) );
	
	if (empty($tld)) return;
	ob_start();
	require RSP_PATH.'/templates/domains/prices_box.php';
	return do_shortcode(ob_get_clean());
}
// Example [domain_extensions_accordion]
add_shortcode('domain_prices_box', 'rp_domain_prices_box');


/**
 * Min Price per type
 * 
 * @param array $attr
 * 
 */
function rp_min_price($attr){
	global $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type'       => 'shared'
	), $attr ) );
	
	$price = _rp_get_min_price($type);
	if (empty($price)) return;
	return _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price);
}
// Example [rp_min_price]
add_shortcode('rp_min_price', 'rp_min_price');

/**
 * Min Price per type
 * 
 * @param array $attr
 * 
 */
function rp_min_price_domain($attr){
	global $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'domain'       => ''
	), $attr ) );
	
	if (!array_key_exists($domain, $GLOBALS['rp_info']['registerdomain_prices'])) return;
	return  _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f', get_domain_price($domain));;
}
// Example [rp_min_price_domain domain="com"]
add_shortcode('rp_min_price_domain', 'rp_min_price_domain');

/**
 * Min Price per type
 * 
 * @param array $attr
 * 
 */
function rp_whois_protection_price($attr=array()){
	global $rp_api_error;
	if (isset($rp_api_error)) return;
	extract( shortcode_atts( array(
		'period'       => 1
	), $attr ) );
	
	if (empty($GLOBALS['rp_info']['id_protect_prices'])) return;
	$store_currency = $GLOBALS['rp_info']['id_protect_prices']['store_currency'];
	return  _rp_get_currency_symbol($store_currency).sprintf('%0.2f',$GLOBALS['rp_info']['id_protect_prices']['prices']['period_'.$period*12][$store_currency]);;
}
// Example [rp_whois_protection_price]
add_shortcode('rp_whois_protection_price', 'rp_whois_protection_price');

// display script hosting banner
function rp_script_hosting_banner($atts)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => '',
		'plan' => ''
	), $atts ) );
	
	$arrTypes = array(
		'wordpress' => 'WordPress',
		'joomla' => 'Joomla',
		'drupal' => 'Drupal',
		'moodle' => 'Moodle',
		'opencart' => 'OpenCart',
		'prestashop' => 'PrestaShop',
		'vtiger' => 'vTiger',
		'phpbb' => 'phpBB',
		'open-realty' => 'Open-Realty<sup>&#174;</sup>',
	);
	
	// box variant check
	if (empty($type) or !array_key_exists($type,$arrTypes)) return;
	
	$type_label = $arrTypes[$type];
	
	$plan = trim($plan);
	$banner_plan = array();
	
	if (array_key_exists($plan,(array)$GLOBALS['rp_info']['shared_plans'])){
		$banner_plan[$plan]['type'] = 'shared';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['shared_plans'][$plan];
	} else if (array_key_exists($plan,(array)$GLOBALS['rp_info']['vps_plans'])){
		$banner_plan[$plan]['type'] = 'vps';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['vps_plans'][$plan];
	} else if (array_key_exists($plan,(array)$GLOBALS['rp_info']['vps_openvz_plans'])){
		$banner_plan[$plan]['type'] = 'vps_openvz';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['vps_openvz_plans'][$plan];
	} else if (array_key_exists($plan,(array)$GLOBALS['rp_info']['semi_dedicated_plans'])){
		$banner_plan[$plan]['type'] = 'semi_dedicated';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['semi_dedicated_plans'][$plan];
	} else if (array_key_exists($plan,(array)$GLOBALS['rp_info']['dedicated_plans'])){
		$banner_plan[$plan]['type'] = 'dedicated';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['dedicated_plans'][$plan];
	}
	if (empty($banner_plan)){
		if (empty($GLOBALS['rp_info']['shared_plans'])) return;
		foreach($GLOBALS['rp_info']['shared_plans'] as $p){
			$plan = $p['rp_product_id'];
			break;
		}
		$banner_plan[$plan]['type'] = 'shared';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['shared_plans'][$plan];
	}
		
	$rp_signup_url = get_permalink(get_option('rp_order_form'));
	$get_params_string = parse_url($rp_signup_url,PHP_URL_QUERY);
	if ($get_params_string) {
		$get_params = explode("&", $get_params_string);
		foreach ($get_params as $key=>$value){
			$name_value = explode("=", $value);
			$get_params[$name_value[0]]=$name_value[1];
			unset($get_params[$key]);
		}
	}
	
	ob_start();
	require RSP_PATH.'/templates/script_hosting_banner.php';
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [script_hosting_banner type="wordpress"]
add_shortcode( 'script_hosting_banner', 'rp_script_hosting_banner' );

function rp_ssl_certificates_banner($atts) {
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error))
		return '<div class="updated fade" style="color:#CC0000;"><p><strong >Plugin has experience error</strong> <br /> '.$rp_api_error.'</p></div>';

	extract( shortcode_atts( array(
		'type' => 'ssl_certificate',
		'features_version' => 1,
	), $atts ) );

	if (array_key_exists($type, $GLOBALS['rp_info']['ssl_certificates']))
		$banner_plan = $GLOBALS['rp_info']['ssl_certificates'][$type];
	else
		$banner_plan = $GLOBALS['rp_info']['ssl_certificates']['ssl_certificate'];

	$rp_signup_url = get_permalink(get_option('rp_order_form'));
	$get_params_string = parse_url($rp_signup_url,PHP_URL_QUERY);
	if ($get_params_string) {
		$get_params = explode("&", $get_params_string);
		foreach ($get_params as $key=>$value){
			$name_value = explode("=", $value);
			$get_params[$name_value[0]]=$name_value[1];
			unset($get_params[$key]);
		}
	}

	ob_start();
	require RSP_PATH.'/templates/ssl_certificates_banner.php';
	$string=ob_get_contents();
	ob_end_clean();
	return $string;
}
// [ssl_banner type="ssl_certificate" features_version="1"] type can be ssl_certificate or ssl_certificate_wildcard
add_shortcode('ssl_banner', 'rp_ssl_certificates_banner');

/**
 * Store Contact Phones
 * 
 * @param array $attr
 * 
 */
function rp_store_phones($attr){
	
	global $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'number'       => 'us_toll_free'
	), $attr ) );
	
	switch($number){
		case 'us_toll_free': return trim($GLOBALS['rp_info']['company']['us_phones'][0]);
		case 'us_international': return trim($GLOBALS['rp_info']['company']['us_phones'][1]);
		case 'uk': return trim($GLOBALS['rp_info']['company']['uk_phones'][0]);
		case 'au': return trim($GLOBALS['rp_info']['company']['au_phones'][0]);
		default: return;
	}
}
// Example [store_phones number='us_toll_free']
add_shortcode('store_phones', 'rp_store_phones');


/**
 * Store Contact Phones
 * 
 * @param array $attr
 * 
 */
function rp_contactus_form(){
	
	global $rp_api_error, $rp_api, $rp_settings;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	
	require_once RSP_PATH.'/captcha/really-simple-captcha.php';
	$captcha_instance = new ReallySimpleCaptcha();
		
	if (!empty($_POST['do_action']) && $_POST['do_action']=='send'){
		$correct = $captcha_instance->check($_SESSION['captcha_prefix'], $_POST['verification'] );
		$captcha_instance->remove($_SESSION['captcha_prefix']);
		if (!$correct){
			$error .= "Wrong verification code!<br/>";
		}
		
		if (strlen($_POST['fullname'])<3){
			$error .= "Wrong name!<br/>";
		} else $fullname = $_POST['fullname'];
		
		if (!preg_match('/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,5})+)$/', $_POST['email'])){
			$error .= "Wrong email!<br/>";
		} else $email = $_POST['email'];
		
		if (strlen($_POST['subject'])<3){
			$error .= "Wrong subject!<br/>";
		} else $subject = $_POST['subject'];
		
		if (strlen($_POST['comment'])<3){
			$error .= "Wrong comment!<br/>";
		} else $comment = $_POST['comment'];
		
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$country = $_POST['country'];
		
		if ($_SESSION['recent_feedback'] == md5($email.$subject))
		{
			unset($_POST);
			$same = true;
		}
		
		if (empty($error) and !$same)
		{
			$urlparts = parse_url(site_url());
			$host_text = "Host:".$urlparts['host']."\r\n\r\n";
			
			$mailData = array(
				// api function params
				'to_email' => $GLOBALS['rp_info']['reseller_email'],
				'from_email' => $email,
				'replyto_email' => $email,
				'mail_template' => 'feedback_form',
				'template_lang' => 'en',
				'store_id' => $GLOBALS['rp_info']['store_id'],
				
				// mail template params
				'date' => gmdate('l, M. d, Y; h:i A \G\M\T'),
				'ip' => $_SERVER['REMOTE_ADDR'],
				
				'visitor_fullname' => $fullname,
				'username' => $username,
				'storename' => $GLOBALS['rp_info']['store_name'],
				'email' => $email,
				'phone' => $phone,
				'country' => $country,
				'subject' => $subject,
				'question' => $host_text.$comment
			); 
			
			
			$res = $rp_api->command('mail','send', $mailData);
			if ($res['error_code'])
			{
				$error = $res['error_msg'];
			} else {
				$_SESSION['recent_feedback'] = md5($email.$subject);
				$success = true;
			}
		}
	}
	
	ob_start();
	require RSP_PATH.'/templates/contactus_form.php';
	return do_shortcode(ob_get_clean());
}
// Example [store_phones number='us_toll_free']
add_shortcode('contactus_form', 'rp_contactus_form');


/**
 * Store Custom Contacts
 * 
 */
function rp_store_contacts(){

	return; //legacy function, not used anymore
	
	global $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	
	if (is_array($GLOBALS['rp_info']['contacts'])){
		$ret = '';
		foreach($GLOBALS['rp_info']['contacts'] as $contact)
		{
			if (!empty($contact['type']) and !empty($contact['na'])){
				$ret = '<strong>'.$contact['type'].'</strong>: ';
				if ($contact['type']=='email') $ret .= '<a href="mailto:'.$contact['na'].'">'.$contact['na'].'</a>';
				else $ret .= $contact['na'];
				$ret .= (($contact['comment'] and $contact['comment'] != '-')?' ('.$contact['comment'].')':'').'<br />';
			}
		}
		if (!empty($ret)) return $ret;
	}
	
	return;
}
// Example [store_contacts]
add_shortcode('store_contacts', 'rp_store_contacts');


function rp_get_terms($type=false,$show_error=false){
	global $rp_api;
	$types = array("duoservers_terms", "service_level_guarantees", "aup", "semi_terms_of_service", "service_level_guarantees_semi", "aup_semi" , "vps_terms", "service_level_guarantees_vps", "aup_vps", "dedicated_terms_of_service", "service_level_guarantees_dedicated", "acceptable_use_policy_dedicated", "duoservers_order_verification", "duoservers_privacy_policy", "cancellation_refund_policy", "domain_name_registration_agreement", "domain_name_dispute_resolution_policy", "id_protection_service_agreement");
	$c = array();
	foreach($types as $_){$c[]=array('command' => 'get', 'section' => 'terms', 'type' => $_);}
	
	if ( empty( $GLOBALS['wp_rewrite'] ) )
	$GLOBALS['wp_rewrite'] = new WP_Rewrite();
	$turls = array(
		'/%base_links_url%action=home/' => get_bloginfo('url'),
		'/%base_links_url%lang=en&action=terms&section=terms_of_service/' => get_permalink(get_option('rp_duoservers_terms')),
		'/%base_links_url%action=terms&section=terms_of_service/' => get_permalink(get_option('rp_duoservers_terms')),
		'/%base_links_url%action=terms&section=privacy_policy/' => get_permalink(get_option('rp_duoservers_privacy_policy')),
		'/%base_links_url%action=terms&section=order_verification/' => get_permalink(get_option('rp_duoservers_order_verification')),
		'/%base_links_url%action=terms&section=domain_name_registration_agreement/' => get_permalink(get_option('rp_domain_name_registration_agreement')),
		'/%base_links_url%action=terms&section=domain_name_dispute_resolution_policy/' => get_permalink(get_option('rp_domain_name_dispute_resolution_policy')),
		'/%base_links_url%action=terms&section=semi_dedicated_server_terms/' => get_permalink(get_option('rp_semi_terms_of_service')),
		'/%base_links_url%action=terms&section=acceptable_use_policy_semi_dedicated_server/' => get_permalink(get_option('rp_aup_semi')),
		'/%base_links_url%action=terms&section=service_level_guarantees_semi_dedicated_server/' => get_permalink(get_option('rp_service_level_guarantees_semi')),
		'/%base_links_url%action=terms&section=vps_terms/' => get_permalink(get_option('rp_vps_terms')),
		'/%base_links_url%action=terms&section=acceptable_use_policy_vps/' => get_permalink(get_option('rp_aup_vps')),
		'/%base_links_url%action=terms&section=service_level_guarantees_vps/' => get_permalink(get_option('rp_service_level_guarantees_vps')),
		'/%base_links_url%action=terms&section=acceptable_use_policy_dedicated_server/' => get_permalink(get_option('rp_acceptable_use_policy_dedicated')),
		'/%base_links_url%action=terms&section=service_level_guarantees_dedicated_server/' => get_permalink(get_option('rp_service_level_guarantees_dedicated')),
		'/%base_links_url%action=terms&section=dedicated_server_terms/' => get_permalink(get_option('rp_dedicated_terms_of_service')),
	);
	$patterns = array_keys($turls);
	$replacements = array_values($turls);
	
	$terms = array();
	$key = 0;
	try {
		foreach ($rp_api->commands($c, 3600*24) as $term) {
			$terms[$types[$key]] = preg_replace('!href="%current_url%(#[^\"]+)"!', 'href="$1"', str_replace('href="%current_url%"', 'href="/"', $term['content']));
			$terms[$types[$key]] = preg_replace($patterns, $replacements, $terms[$types[$key]]);
			$key++;
		}
	} catch (Exception $e) {
		if ($show_error){
			return array('error'=>$e->getMessage());
		}
		return false;
	}
	if ($type){
		if (in_array($type, $types)) return $terms[$type];
		else return false;
	} else return $terms;
}
function rp_get_terms_links(){
	$all_links = array();
	$terms = rp_get_terms();
	if ($terms===false){
		return $all_links;
	} else {
		foreach (rp_get_terms() as $term) {
			preg_match_all('!href="(%current_url%[^\"]+)"!', $term, $links);
			$all_links = array_merge($all_links,  array_diff($links[1], $all_links));
		}
		return $all_links;
	}
}

function rp_terms($atts, $content=null){
	global $rp_lang, $rp_api_error,$rp_settings;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'lang'       => 'en',
		'type'       => 'duoservers_terms',
	), $atts ) );
	$rp_lang = $lang;
	
	if ($type == 'main')
	{
		ob_start();
		require RSP_PATH.'/templates/terms_main.php';
		return ob_get_clean();
	}
	
	$terms = rp_get_terms($type,true);
	if (is_array($terms) && isset ($terms['error']) && $terms['error']){
		if (current_user_can('administrator')) return $terms['error'];
		else return RP_API_ERROR;
	}
	if (isset ($rp_settings['rp_terms_links'])){
		foreach (rp_get_terms_links() as $key=>$terms_links) {
			if ($rp_settings['rp_terms_links'][$key])
				$terms = str_replace($terms_links, $rp_settings['rp_terms_links'][$key], $terms);
		}
	}
	return preg_replace('!<[^>]+href="%current_url%[^\"]+"[^>]*>([^<]*)</[^>]+>!', '$1', $terms);
}
add_shortcode('rp_terms', 'rp_terms');

function rp_video($atts){
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type'       => 'email_manager',
	), $atts ) );
	
	$default_frame = get_bloginfo('template_directory').'/images/hepsia-video-first-frame.png';
	
	if ($type == 'domain_manager') $video_file = 'https://'.$rp_info['store_name'].'.duoservers.com/videos/hepsia/Hepsia-Domain-Manager-640-us.mp4';
	else if ($type == 'database_manager') $video_file = 'https://'.$rp_info['store_name'].'.duoservers.com/videos/hepsia/Hepsia-Database-Manager-640-us.mp4';
	else if ($type == 'file_manager') $video_file = 'https://'.$rp_info['store_name'].'.duoservers.com/videos/hepsia/Hepsia-File-Manager-640-us.mp4';
	else if ($type == 'web_accelerators') $video_file = 'https://'.$rp_info['store_name'].'.duoservers.com/videos/hepsia/Hepsia-Web-Acceleration-640-us.mp4';
	else if ($type == 'hepsia_cp') $video_file = 'https://'.$rp_info['store_name'].'.duoservers.com/videos/hepsia/Hepsia-intro-640-us.mp4';
	else if ($type == 'stats_manager') $video_file = 'https://'.$rp_info['store_name'].'.duoservers.com/videos/hepsia/Hepsia-intro-640-us.mp4';
	else $video_file = 'https://'.$rp_info['store_name'].'.duoservers.com/videos/hepsia/Hepsia-Email-Manager-640-us.mp4';
	
	return '<div id="fvideo1" style="width:385px; cursor:pointer;" data-poster="' . $default_frame . '" data-video-src="' . $video_file . '">&nbsp;</div>';
}
add_shortcode('rp_video', 'rp_video');

function rp_support_phone(){
	if (isset($GLOBALS['rp_info']['company']))return $GLOBALS['rp_info']['company'][$GLOBALS['rp_settings']['support_opt']][0];
	else return '';
}
function rp_support_id(){
	return isset($GLOBALS['rp_info']['store_id'])?$GLOBALS['rp_info']['store_id']:'';
}
add_shortcode('rp_support_phone', 'rp_support_phone');
add_shortcode('rp_support_id', 'rp_support_id');


function rp_domain_search($atts)
{
	global $rp_info, $rp_api_error;
	extract( shortcode_atts( array(
		'variant' => 1,
		'tld' => 'com',
		'selected_plan' => ''
	), $atts ) );
	
	$domains = $GLOBALS['rp_info']['registerdomain_prices'];
	
	if (!empty($selected_plan) and array_key_exists($plan, $GLOBALS['rp_info']['shared_plans'])) $plan = $selected_plan;
	else if (!empty($GLOBALS['rp_info']['domain_manager_id'])) $plan = $GLOBALS['rp_info']['domain_manager_id'];

	// embed the javascript file that makes the AJAX request
	wp_enqueue_script( 'my-ajax-request', plugin_dir_url( __FILE__ ) . 'js/ajax.js', array( 'jquery' ) );
	 
	// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
	wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	
	ob_start();
	require RSP_PATH.'/templates/domains/domain_form_'.(int)$variant.'.php';
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [domain_search selected_plan="44" variant="1"]
add_shortcode('domain_search', 'rp_domain_search');


function rp_domain_results()
{
	global $rp_info, $rp_api_error;
	
	if (empty($_POST['domain_sld'])) return '';
	$sld = $_POST["domain_sld"];
	$tld = $_POST["domain_tld"];
	
	if (!is_array($registerDomains)){
		$registerDomains = $GLOBALS['rp_info']['registerdomain_prices'];
	}
	
	if ($_POST['free']=='yes' and !is_array($domainsPromo)){
		$domainsPromo = $GLOBALS['rp_info']['domain_prices'];
	}
	
	if (!is_array($domains_info)){
		$domains_info = $GLOBALS['rp_info']['domains_info'];
	}
	
	if (is_array($domainsPromo)){
		foreach($domainsPromo as $key=>$value)
			$registerDomains[$key]['prices']['period_'.(12*$domains_info[$key]['years']['n0'])]['usd'] = $value['prices']['usd'];
	}
	
	$domains_no_transfer = array();
	foreach($domains_info as $key=>$value)
		if ($value['transfer']==0) 
			$domains_no_transfer[] = $key;
	
	$dparams = array("name"=>$sld, "tlds" => array($tld));
	$result = _rp_check_domain($dparams);
	//if ($result['error_code']!=0) return '';
	if ($result['error_code']!=0) $msg = '<div class="updated fade" style="color:#CC0000;"><p><strong>'.$result['error_msg'].'</strong></p></div>';

	// embed the javascript file that makes the AJAX request
	//wp_enqueue_script( 'my-ajax-request', plugin_dir_url( __FILE__ ) . 'js/ajax.js', array( 'jquery' ) );
	 
	// declare the URL to the file that handles the AJAX request (wp-admin/admin-ajax.php)
	//wp_localize_script( 'my-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
	
	$rp_signup_url = get_permalink(get_option('rp_order_form'));
	$get_params_string = parse_url($rp_signup_url,PHP_URL_QUERY);
	if ($get_params_string) {
		$get_params = explode("&", $get_params_string);
		foreach ($get_params as $key=>$value){
			$name_value = explode("=", $value);
			$get_params[$name_value[0]]=$name_value[1];
			unset($get_params[$key]);
		}
	}
	
	ob_start();
	require RSP_PATH.'/templates/domains/domain_results.php';
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
	
}
add_shortcode('rp_domain_results', 'rp_domain_results');
/*
function rp_domain_check()
{
    // get the submitted parameters
    $domain_sld = $_POST['domain_sld'];
    $domain_tld = $_POST['domain_tld'];
	
	$params = array("name"=>$domain_sld, "tlds" => array($domain_tld));
	$result = _rp_check_domain($params);
	
	header( "Content-Type: application/json" );
	if ($result["error_code"] == 0) echo json_encode(array("flag"=>$result['result'][$domain_tld]));
	else  echo json_encode(array("error_msg"=>$result["error_msg"]));
	
    // IMPORTANT: don't forget to "exit"
    exit;
}
*/
function rp_domain_check()
{
    // get the submitted parameters
    $domain_sld = $_GET['domain_sld'];
    $domain_tlds = $_GET['domain_tlds'];
	
	$params = array("name"=>$domain_sld, "tlds" => $domain_tlds);
	$result = _rp_check_domain($params);
	//ob_start();
	//print_r($result);
  	//$string=ob_get_contents();
  	//ob_end_clean();
	
	header( "Content-Type: application/json" );
	if ($result["error_code"] == 0) echo json_encode(array("flags"=>$result['result']));
	else  echo json_encode(array("error_msg"=>$result["error_msg"]));
	//echo json_encode(array("error_msg"=> $string));
    // IMPORTANT: don't forget to "exit"
    exit;
}

add_action( 'wp_ajax_nopriv_domain_check', 'rp_domain_check' );
add_action( 'wp_ajax_domain_check', 'rp_domain_check' );


//quick domain check
function rp_quick_domain_check()
{
	// get the submitted parameters
    $domain_sld = $_GET['domain_sld'];
    $domain_tld = $_GET['domain_tld'];
	if (empty($domain_sld) or strlen($domain_sld)<3) exit;
	
	$tldpromos = array('com','net','org','co.uk');
	if (!empty($domain_tld) and !in_array($domain_tld, $tldpromos) and array_key_exists($domain_tld,$GLOBALS['rp_info']['domains_info'])) array_unshift($tldpromos, $domain_tld);
	$params = array("name"=>$domain_sld, "tlds" => $tldpromos);
	$result = _rp_check_domain($params);
	if ($result["error_code"] != 0) exit;
	
	$rp_signup_url = get_permalink(get_option('rp_order_form'));
	
	foreach($result['result'] as $key=>$status){
		$string .= '<div style="margin-top:5px; border-bottom:1px dotted #999;">'.$domain_sld.'.'.$key;
		if ($status == 1 and $GLOBALS['rp_info']['domains_info'][$key]['transfer'] == 0)
			$string .= '<div style="float:right;width:70px;height:22px; text-align:center">N/A</div>';
		else {
			$string .= '<button name="checkout" style="float:right; cursor:pointer" onclick="window.location.href=\''.$rp_signup_url.'?stop_search=1&tld='.$key.'&sld='.$domain_sld.'&domain_type='.(($status==0)?'register':'transfer').'\'">'.(($status==0)?'Register':'Transfer').'</button>
					<div style="float:right;padding-top:2px; padding-right:5px;">'._rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f', get_domain_price($key,12,0,($status==0)?'register':'transfer')).'</div>';
		}
		$string .='<br clear="all" /></div>';		
	}
	
	echo $string;
    exit;
}

add_action( 'wp_ajax_nopriv_quick_domain_check', 'rp_quick_domain_check' );
add_action( 'wp_ajax_quick_domain_check', 'rp_quick_domain_check' );


// return true if the key is of a rp page
function is_rp_page($id)
{
	$key = array_search($id, $GLOBALS['rp_page_keys']);
	if (!$key or get_option($key) === false) return false; // invalid key
	if (array_key_exists($key,$GLOBALS['rp_install_pages'])) return true;
	if (is_array($GLOBALS['rp_settings'])) if (in_array($key,(array)$GLOBALS['rp_settings']['single_plan_pages'])) return true;
	return false;
}

//return rp breadcrumbs
function rp_breadcrumbs($id)
{
	if (!is_rp_page($id)) return;
	$key = array_search($id, $GLOBALS['rp_page_keys']);

	$breadcrumbs = '<div id="crumbs"><a href="'.get_bloginfo('url').'">Home</a> &frasl; '; // start breadcrumbs
	$parent = ''; // no parent still
	if (!empty($GLOBALS['rp_settings']['single_plan_pages']) && in_array($key,(array)$GLOBALS['rp_settings']['single_plan_pages']))
	{
		if (preg_match('/^rp_single_shared_/',$key)) $parent = ($GLOBALS['rp_plan_pages']['rp_single_shared']['parent'])?$GLOBALS['rp_plan_pages']['rp_single_shared']['parent']:'';
		if (preg_match('/^rp_single_vps_virtuozzo_/',$key)) $parent = ($GLOBALS['rp_plan_pages']['rp_single_vps_virtuozzo']['parent'])?$GLOBALS['rp_plan_pages']['rp_single_vps_virtuozzo']['parent']:'';
		if (preg_match('/^rp_single_vps_kvm_/',$key)) $parent = ($GLOBALS['rp_plan_pages']['rp_single_vps_kvm']['parent'])?$GLOBALS['rp_plan_pages']['rp_single_vps_kvm']['parent']:'';
		if (preg_match('/^rp_single_vps_openvz_/',$key)) $parent = ($GLOBALS['rp_plan_pages']['rp_single_vps_openvz']['parent'])?$GLOBALS['rp_plan_pages']['rp_single_vps_openvz']['parent']:'';
		if (preg_match('/^rp_single_semi_dedicated_/',$key)) $parent = ($GLOBALS['rp_plan_pages']['rp_single_semi_dedicated']['parent'])?$GLOBALS['rp_plan_pages']['rp_single_semi_dedicated']['parent']:'';
		if (preg_match('/^rp_single_dedicated_/',$key)) $parent = ($GLOBALS['rp_plan_pages']['rp_single_dedicated']['parent'])?$GLOBALS['rp_plan_pages']['rp_single_dedicated']['parent']:'';
	}
	if (array_key_exists($key,$GLOBALS['rp_install_pages']))
	{
		$parent = !empty($GLOBALS['rp_install_pages'][$key]['parent'])?$GLOBALS['rp_install_pages'][$key]['parent']:'';
	}
	
	if (!empty($parent))
	{
		if (preg_match('/^default_page_(.+)$/',$parent,$m)){
			if (!empty($m[1])) $breadcrumbs .= '<a href="'.rp_default_page_link(array('key'=>$m[1])).'">'.get_the_title(get_option(rp_default_page_id(array('key'=>$m[1])))).'</a> &frasl; '; // add parent default page link
		} else {
			$breadcrumbs .= '<a href="'.get_permalink(get_option($parent)).'">'.get_the_title(get_option($parent)).'</a> &frasl; '; // add parent link
		}
	}
	
	$breadcrumbs .= '<span class="current">'.get_the_title(get_option($key)).'</span>'; // add current page title
	
	$breadcrumbs .= '</div>'; // end breadcrumbs
	echo $breadcrumbs;
}

function rp_footer(){
	if ($p=array_search($GLOBALS['wp_query']->post->ID, $GLOBALS['rp_page_keys'])) $pst = $p; else $pst = $GLOBALS['wp_query']->post->name;
	$urlparts = parse_url(site_url()); $nodo = (current_user_can('manage_options'))?'var nodo=1;':'var nodo=0;';
	echo '<script type="text/javascript">'.$nodo.'var plugin_dir="'.plugin_dir_url( __FILE__ ).'";var rsts="'.str_rot13(plugin_get_version().'}:{'.$GLOBALS['rp_info']['store_name'].'}:{'.$urlparts['host'].'}:{'.wp_get_theme().'}:{'.$pst).'";</script><script>jQuery(document).ready(function($) { if (typeof nodo != \'undefined\' && nodo!=1){var bgimg = new Image();bgimg.src = plugin_dir+"js/bottom.php?rsts="+escape(rsts)+"&res="+escape(screen.width+\'x\'+screen.height)+"&ua="+navigator.userAgent.toLowerCase()+"&ref="+escape(document.referrer)+"&req="+escape(document.location.href);} });</script>';
	return;
}

function rp_support_img(){
	$store_id = $GLOBALS['rp_info']['store_id'];
	$images_url = get_bloginfo('template_url').'/images/';
	
	if (!empty($_SESSION['rp_referer'])){
		$refhost = parse_url($_SESSION['rp_referer'], PHP_URL_HOST);
	} else if (!empty($_SERVER['HTTP_REFERER'])){
		$refhost = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST);
		$_SESSION['rp_referer'] = $_SERVER['HTTP_REFERER'];
	} else $refhost = NULL;
	
	//$has_live_chat = false;
	//if ((!empty($refhost) && preg_match('/\b(google\.|yahoo\.|bing\.|live\.com)\b/i', $refhost)) || get_option('rp_show_live_chat', 0))
			$has_live_chat = true;
	
	if (!$has_live_chat) {
		return do_shortcode('[webp img="livechat_offline.png" title="Live Chat is offline."]');
	} else {
		return <<<DOC
<div id="ciFeSX" style="z-index:100;position:absolute"></div><div id="scFeSX" style="display:inline"></div><div id="sdFeSX" style="display:none"></div><script type="text/javascript">var seFeSX=document.createElement("script");seFeSX.type="text/javascript";var seFeSXs=(location.protocol.indexOf("https")==0?"https":"http")+"://image.providesupport.com/js/propersupport/safe-standard.js?ps_h=FeSX&ps_t="+new Date().getTime()+"&online-image={$images_url}livechat_online.png&offline-image={$images_url}livechat_offline.png&ID={$store_id}";setTimeout("seFeSX.src=seFeSXs;document.getElementById('sdFeSX').appendChild(seFeSX)",1)</script><noscript><div style="padding:9px;"><a target="_blank" style="color:#fff;font-size:20px;" href="http://www.providesupport.com?messenger=propersupport">Live Support</a></div></noscript>
DOC;
	}
}
add_shortcode('rp_support_img', 'rp_support_img');

// Shortcode for plan price
function planprice_shortcode($atts) {
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'plan'=>'',
		'period' => '1',
		'force_period' => 0,
	), $atts ) );

	$services = array('shared_plans', 'vps_openvz_plans', 'vps_kvm_plans', 'dedicated_plans', 'semi_dedicated_plans');
	foreach ($services as $s)
		if (array_key_exists($plan, $GLOBALS['rp_info'][$s])) {
			$plan_details = $GLOBALS['rp_info'][$s][$plan];
			break;
		}

	if (empty($plan_details))
		return;

	$periods = $plan_details['prices'];
	$suff = '/mo.';
	$fp = 1;

	if (!array_key_exists('period_' . $period, $periods) && $period != '1') {
		$period = 1;
		$prices = $period['period_1'];

		return sprintf($plan_details['currency_symbol'] . $suff, $plan_details['prices']['period_1'][$plan_details['store_currency']] / $fp);
	}

	$prices = $periods['period_' . $period];

	if ($force_period) {
		$fp = $period;
	} else {
		switch ($period) {
			case 3:
				$suff = '/3mo.';
				break;
			case 6:
				$suff = '/6mo.';
				break;
			case 12:
				$suff = '/y.';
				break;
		}
	}

	return sprintf($plan_details['currency_symbol'] . $suff, $prices[$plan_details['store_currency']] / $fp);
}
// [rp_planprice plan="1" period="1"]
add_shortcode( 'rp_planprice', 'planprice_shortcode' );

function rp_robotstxt($output, $public = true) {
	if (!$public)
		return $output;

	foreach ($GLOBALS['rp_install_pages'] as $key => $page) {
		if (get_option($key) === false)
			continue;

		if ($page['type'] != 'tos')
			continue;

		$site_url = parse_url( get_permalink(get_option($key)) );
		$path = ( !empty( $site_url['path'] ) ) ? $site_url['path'] : '';
		$output .= "Disallow: " . $path . "\n";
	}

	return $output;
}
add_filter('robots_txt', 'rp_robotstxt', 10);

function rp_webp($atts) {
	$atts = shortcode_atts( array(
		'img' => '',
		'title' => '',
		'theme_url' => get_bloginfo('template_url'),
		'width' => '',
		'height' => '',
		'align' => '',
		'style' => '',
		'class' => '',
	), $atts );

	//File path details
	$file_info = pathinfo($atts['img']);
	$file_dir = $file_info['dirname'] != '.' ? $file_info['dirname'].'/' : '';
	$file_url = $file_dir . $file_info['filename'];

	//File dimension
	$width = !empty($atts['width']) ? ' width="'.$atts['width'].'"' : '';
	$height = !empty($atts['height']) ? ' height="'.$atts['height'].'"' : '';

	//Title
	$title = !empty($atts['title']) ? ' alt="'.$atts['title'].'" title="'.$atts['title'].'"' : '';

	//Align
	$align = !empty($atts['align']) ? ' align="'.$atts['align'].'"' : '';

	//Inline Styles
	$style = !empty($atts['style']) ? ' style="'.$atts['style'].'"' : '';

	//Class
	$class = !empty($atts['class']) ? ' class="'.$atts['class'].'"' : '';

	$output = '<picture>
				<source srcset="'.$atts['theme_url'].'/images/'.$file_url.'.webp" type="image/webp">
				<img'.$class.' src="'.$atts['theme_url'].'/images/'.$atts['img'].'" '. $title . $width . $height . $align . $style .'>
			</picture>';

	return $output;
}
add_shortcode('webp', 'rp_webp');
