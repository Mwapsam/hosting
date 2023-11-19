<?php
// display home main banner
function rp_home_banner($atts)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant' => 1,
		'button' => '',
		'plan' => ''
	), $atts ) );
	
	
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
	} else if (array_key_exists($plan,(array)$GLOBALS['rp_info']['vps_kvm_plans'])){
		$banner_plan[$plan]['type'] = 'vps_kvm';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['vps_kvm_plans'][$plan];
	} else if (array_key_exists($plan,(array)$GLOBALS['rp_info']['semi_dedicated_plans'])){
		$banner_plan[$plan]['type'] = 'semi_dedicated';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['semi_dedicated_plans'][$plan];
	} else if (array_key_exists($plan,(array)$GLOBALS['rp_info']['dedicated_plans'])){
		$banner_plan[$plan]['type'] = 'dedicated';
		$banner_plan[$plan]['value'] = $GLOBALS['rp_info']['dedicated_plans'][$plan];
	}
	if (empty($banner_plan)){
		if (empty($GLOBALS['rp_info']['shared_plans'])) return;
		$plan = ($GLOBALS['rp_info']['shared_plans_on_index'][0])?$GLOBALS['rp_info']['shared_plans_on_index'][0]:key($GLOBALS['rp_info']['shared_plans']);
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
	
	$video_url = "https://".$GLOBALS['rp_info']['store_name'].".duoservers.com/videos/";
	
	$ss_flag = (!empty($GLOBALS['rp_info']['shared_plans_site_studio'])) ? 1 : 0;
	$dedi_flag = (!empty($GLOBALS['rp_info']['dedicated_plans'])) ? 1 : 0;
	$semidedi_flag = (!empty($GLOBALS['rp_info']['semi_dedicated_plans'])) ? 1 : 0;
	$vps_flag = (!empty($GLOBALS['rp_info']['vps_plans'])) ? 1 : 0;
	
	
	if ($ss_flag and $dedi_flag and $semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new1.mp4';
	else if (!$ss_flag and $dedi_flag and $semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new8.mp4';
	else if ($ss_flag and $dedi_flag and !$semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new2.mp4';
	else if (!$ss_flag and $dedi_flag and !$semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new8.mp4';
	else if ($ss_flag and !$dedi_flag and $semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new4.mp4';
	else if (!$ss_flag and !$dedi_flag and $semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new8.mp4';
	else if ($ss_flag and $dedi_flag and $semidedi_flag and !$vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new3.mp4';
	else if (!$ss_flag and $dedi_flag and $semidedi_flag and !$vps_flag) $movie = 'DuoServers-Semi-Dedicated-640-var.new1.mp4';
	else if ($ss_flag and !$dedi_flag and !$semidedi_flag and !$vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new9.mp4';
	else if ($ss_flag and $dedi_flag and !$semidedi_flag and !$vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new5.mp4';
	else if ($ss_flag and !$dedi_flag and !$semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new7.mp4';
	else if ($ss_flag and !$dedi_flag and $semidedi_flag and !$vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new6.mp4';
	else if (!$ss_flag and $dedi_flag and !$semidedi_flag and !$vps_flag) $movie = 'DuoServers-dedicated-640-var.new1.mp4';
	else if (!$ss_flag and !$dedi_flag and !$semidedi_flag and $vps_flag) $movie = 'DuoServers-Intro-Video-full-640-var.new11.mp4';
	else if (!$ss_flag and !$dedi_flag and $semidedi_flag and !$vps_flag) $movie = 'DuoServers-Semi-Dedicated-640-var.new1.mp4';
	else $movie = 'DuoServers-Intro-Video-full-640-var.new10.mp4';
	
	$file = RSP_PATH.'/templates/home/home_banner_'.$variant.'.php';
	ob_start();
	if (file_exists($file)) require $file;
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [home_banner variant="1"]
add_shortcode( 'home_banner', 'rp_home_banner' );

// display domain search
function rp_domain_search_box($atts=array())
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant' => 1,
		'tld' => 'com',
		'url_domain_search' => $GLOBALS['rp_settings']['default_urls']['domain_search']
	), $atts ) );
	
	
	if (empty($GLOBALS['rp_info']['registerdomain_prices'])) return;
	
	if (in_array($variant,array(1,2,7,8,10,11)))
		$domains = array_slice($GLOBALS['rp_info']['registerdomain_prices'],0,4,true);
	elseif (in_array($variant,array(9,12,13)))
		$domains = array_slice($GLOBALS['rp_info']['registerdomain_prices'],0,3,true);
	elseif ($variant==3)
		$domains = array_slice($GLOBALS['rp_info']['registerdomain_prices'],0,8,true);
	elseif ($variant==6){
		$tld_count = count($GLOBALS['rp_info']['registerdomain_prices']);
		if ($tld_count > 10)
		{
			$tmp = floor($tld_count/10)*10;
			$tld_count = $tmp.'+';
		}
	}
	
	$GLOBALS['dsearch_form_action'] = (!empty($url_domain_search) and get_option($url_domain_search) !== false) ? get_permalink(get_option($url_domain_search)) : '';
	
	$file = RSP_PATH.'/templates/domains/domain_search_area_'.(int)$variant.'.php';
	ob_start();
	if (file_exists($file)) require $file;
  	$string=do_shortcode(ob_get_contents());
  	ob_end_clean();
	return $string;
}
// [domain_search_box variant="1"]
add_shortcode( 'domain_search_box', 'rp_domain_search_box' );

// display plan boxes
function rp_home_plan_boxes($atts=array(), $content=null)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant' => 1,
		'button' => '',
		'plans'=>'',
		'best'=>'',
		'url_shared' => $GLOBALS['rp_settings']['default_urls']['shared_hosting'],
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'title'=>'Find the Right Hosting Plan For You'
	), $atts ) );
	
	$content = str_replace('</p>
<p>', "\n\n", $content);
	$content = str_replace('<p>', "", $content);
	$content = str_replace('</p>', "", $content);
	$content = str_replace("<br />\n", "\n", $content);
	$content = html_entity_decode($content);
	
	
	$plans = explode(',',$plans);
	if (empty($plans)) return;
	//limit to 6 plans only
	$plans = array_slice($plans,0,6,true);
	
	$index_plans = array();
	$br=0;
	foreach ($plans as $key => $value) {
		$value = trim($value);
		if (array_key_exists($value, (array)$GLOBALS['rp_info']['shared_plans'])) {
			$index_plans[$br]['type'] = 'shared';
			$index_plans[$br]['value'] = $GLOBALS['rp_info']['shared_plans'][$value];
			$index_plans[$br]['page_url'] = (!empty($url_shared) and get_option($url_shared) !== false) ? get_permalink(get_option($url_shared)) : get_permalink(get_option('rp_shared_plan'));
		} else if (array_key_exists($value, (array)$GLOBALS['rp_info']['vps_plans'])) {
			$index_plans[$br]['type'] = 'vps';
			$index_plans[$br]['value'] = $GLOBALS['rp_info']['vps_plans'][$value];
			$index_plans[$br]['page_url'] = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) : get_permalink(get_option('rp_vps_plan'));
		} else if (array_key_exists($value,(array)$GLOBALS['rp_info']['vps_openvz_plans'])) {
			$index_plans[$br]['type'] = 'vps_openvz';
			$index_plans[$br]['value'] = $GLOBALS['rp_info']['vps_openvz_plans'][$value];
			$index_plans[$br]['page_url'] = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) : get_permalink(get_option('rp_vps_openvz_plan'));
		} else if (array_key_exists($value, (array)$GLOBALS['rp_info']['vps_kvm_plans'])) {
			$index_plans[$br]['type'] = 'vps_kvm';
			$index_plans[$br]['value'] = $GLOBALS['rp_info']['vps_kvm_plans'][$value];
			$index_plans[$br]['page_url'] = (!empty($URL_vps_kvm) && get_option($url_vps_kvm) !== false) ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_kvm_plan'));
		} else if (array_key_exists($value,(array)$GLOBALS['rp_info']['semi_dedicated_plans'])) {
			$index_plans[$br]['type'] = 'semi_dedicated';
			$index_plans[$br]['value'] = $GLOBALS['rp_info']['semi_dedicated_plans'][$value];
			$index_plans[$br]['page_url'] = (!empty($url_semi_dedicated) and get_option($url_semi_dedicated) !== false) ? get_permalink(get_option($url_semi_dedicated)) : get_permalink(get_option('rp_semi_dedicated_plan'));
		} else if (array_key_exists($value,(array)$GLOBALS['rp_info']['dedicated_plans'])) {
			$index_plans[$br]['type'] = 'dedicated';
			$index_plans[$br]['value'] = $GLOBALS['rp_info']['dedicated_plans'][$value];
			$index_plans[$br]['page_url'] = (!empty($url_dedicated) and get_option($url_dedicated) !== false) ? get_permalink(get_option($url_dedicated)) : get_permalink(get_option('rp_dedicated_plan'));
		} else
			continue;

		$br++;
	}
	if (empty($index_plans)) {
		if (empty($GLOBALS['rp_info']['shared_plans'])) return;
		$index_plans = array(); $br=0;
		foreach($GLOBALS['rp_info']['shared_plans'] as $key=>$value){
			$index_plans[$br]['type'] = 'shared';
			$index_plans[$br]['value'] = $value;
			$index_plans[$br]['page_url'] =  (!empty($url_shared) and get_option($url_shared) !== false) ? get_permalink(get_option($url_shared)) : get_permalink(get_option('rp_shared_plan'));
			$br++;
		}
	}
	if (empty($index_plans)) return;
	
	if ($variant == 2){
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
		
		$shared_min_price_plan = null;
		$shared_max_price_plan = null;
		$vps_virtuozzo_min_price_plan = null;
		$vps_virtuozzo_max_price_plan = null;
		$vps_openvz_min_price_plan = null;
		$vps_openvz_max_price_plan = null;
		$vps_kvm_min_price_plan = null;
		$vps_kvm_max_price_plan = null;
		$semi_dedicated_min_price_plan = null;
		$semi_dedicated_max_price_plan = null;
		$dedicated_min_price_plan = null;
		$dedicated_max_price_plan = null;
		foreach($index_plans as $i=>$value)
		{
			$plan = $value['value'];
			if ($value['type']=='shared'){
				if (is_null($shared_min_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] < $index_plans[$shared_min_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$shared_min_price_plan = $i;
				
				if (is_null($shared_max_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] > $index_plans[$shared_max_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$shared_max_price_plan = $i;
			} else if ($value['type']=='vps'){
				if (is_null($vps_virtuozzo_min_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] < $index_plans[$vps_virtuozzo_min_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$vps_virtuozzo_min_price_plan = $i;
				
				if (is_null($vps_virtuozzo_max_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] > $index_plans[$vps_virtuozzo_max_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$vps_virtuozzo_max_price_plan = $i;

			} else if ($value['type']=='vps_openvz'){
				if (is_null($vps_openvz_min_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] < $index_plans[$vps_openvz_min_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$vps_openvz_min_price_plan = $i;
				
				if (is_null($vps_openvz_max_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] > $index_plans[$vps_openvz_max_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$vps_openvz_max_price_plan = $i;

			} else if ($value['type'] == 'vps_kvm') {
				if (is_null($vps_kvm_min_price_plan) || $plan['prices']['period_1'][$plan['store_currency']] < $index_plans[$vps_kvm_min_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$vps_kvm_min_price_plan = $i;

				if (is_null($vps_kvm_max_price_plan) || $plan['prices']['period_1'][$plan['store_currency']] > $index_plans[$vps_kvm_max_price_plan]['vlaue']['prices']['period_1'][$plan['store_currency']])
					$vps_kvm_max_price_plan = $i;

			} else if ($value['type']=='semi_dedicated'){
				if (is_null($semi_dedicated_min_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] < $index_plans[$semi_dedicated_min_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$semi_dedicated_min_price_plan = $i;
				
				if (is_null($semi_dedicated_max_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] > $index_plans[$semi_dedicated_max_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$semi_dedicated_max_price_plan = $i;
			} else if ($value['type']=='dedicated'){
				if (is_null($dedicated_min_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] < $index_plans[$dedicated_min_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$dedicated_min_price_plan = $i;
				
				if (is_null($dedicated_max_price_plan) or $plan['prices']['period_1'][$plan['store_currency']] > $index_plans[$dedicated_max_price_plan]['value']['prices']['period_1'][$plan['store_currency']])
					$dedicated_max_price_plan = $i;
			}
		}
		
		$shared_br = $vps_virtuozzo_br = $vps_openvz_br = $vps_kvm_br = $semi_dedicated_br = $dedicated_br = 1;
		foreach($index_plans as $i=>$value)
		{
			$plan = $value['value'];
			if ($value['type']=='shared'){
				if ($i == $shared_min_price_plan and !empty($notes['shared_min_price_plan'])) $index_plans[$shared_min_price_plan]['note'] = $notes['shared_min_price_plan'];
				elseif ($i == $shared_max_price_plan and !empty($notes['shared_max_price_plan'])) $index_plans[$shared_max_price_plan]['note'] = $notes['shared_max_price_plan'];
				elseif (!empty($notes['shared_plan'.$br])){
					 $index_plans[$i]['note'] = $notes['shared_plan'.$shared_br];
					 $shared_br++;
				}
			} else if ($value['type']=='vps'){
				if ($i == $vps_virtuozzo_min_price_plan and !empty($notes['vps_virtuozzo_min_price_plan'])) $index_plans[$vps_virtuozzo_min_price_plan]['note'] = $notes['vps_virtuozzo_min_price_plan'];
				elseif ($i == $vps_virtuozzo_max_price_plan and !empty($notes['vps_virtuozzo_max_price_plan'])) $index_plans[$vps_virtuozzo_max_price_plan]['note'] = $notes['vps_virtuozzo_max_price_plan'];
				elseif (!empty($notes['vps_virtuozzo_plan'.$br])){
					 $index_plans[$i]['note'] = $notes['vps_virtuozzo_plan'.$vps_virtuozzo_br];
					 $vps_virtuozzo_br++;
				}
			} else if ($value['type']=='vps_openvz'){
				if ($i == $vps_openvz_min_price_plan and !empty($notes['vps_openvz_min_price_plan'])) $index_plans[$vps_openvz_min_price_plan]['note'] = $notes['vps_openvz_min_price_plan'];
				elseif ($i == $vps_openvz_max_price_plan and !empty($notes['vps_openvz_max_price_plan'])) $index_plans[$vps_openvz_max_price_plan]['note'] = $notes['vps_openvz_max_price_plan'];
				elseif (!empty($notes['vps_openvz_plan'.$br])){
					 $index_plans[$i]['note'] = $notes['vps_openvz_plan'.$vps_openvz_br];
					 $vps_openvz_br++;
				}
			} else if ($value['type'] == 'vps_kvm') {
				if ($i == $vps_kvm_min_price_plan && !empty($notes['vps_kvm_min_price_plan']))
					$index_plans[$vps_kvm_min_price_plan]['note'] = $notes['vps_kvm_min_price_plan'];
				else if ($i == $vps_kvm_max_price_plan && !empty($notes['vps_kvm_max_price_plan']))
					$index_plans[$vps_kvm_max_price_plan]['note'] = $notes['vps_kvm_max_price_plan'];
				else if (!empty($notes['vps_kvm_plan' . $br])) {
					$index_plans[$i]['note'] = $notes['vps_kvm_plan' . $vps_openvz_br];
					$vps_openvz_br++;
				}
			} else if ($value['type']=='semi_dedicated'){
				if ($i == $semi_dedicated_min_price_plan and !empty($notes['semi_dedicated_min_price_plan'])) $index_plans[$semi_dedicated_min_price_plan]['note'] = $notes['semi_dedicated_min_price_plan'];
				elseif ($i == $semi_dedicated_max_price_plan and !empty($notes['semi_dedicated_max_price_plan'])) $index_plans[$semi_dedicated_max_price_plan]['note'] = $notes['semi_dedicated_max_price_plan'];
				elseif (!empty($notes['semi_dedicated_plan'.$br])){
					 $index_plans[$i]['note'] = $notes['semi_dedicated_plan'.$semi_dedicated_br];
					 $semi_dedicated_br++;
				}
			} else if ($value['type']=='dedicated'){
				if ($i == $dedicated_min_price_plan and !empty($notes['dedicated_min_price_plan'])) $index_plans[$dedicated_min_price_plan]['note'] = $notes['dedicated_min_price_plan'];
				elseif ($i == $dedicated_max_price_plan and !empty($notes['dedicated_max_price_plan'])) $index_plans[$dedicated_max_price_plan]['note'] = $notes['dedicated_max_price_plan'];
				elseif (!empty($notes['dedicated_plan'.$br])){
					 $index_plans[$i]['note'] = $notes['dedicated_plan'.$dedicated_br];
					 $dedicated_br++;
				}
			}
		}	
	}
	
	$rp_best_plan = null;
	if (!empty($best))
		$rp_best_plan = $best;
			
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
	
	$file = RSP_PATH.'/templates/home/plan_boxes_'.$variant.'.php';
	ob_start();
	if (file_exists($file)) require $file;
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [home_plan_boxes variant="1"]
add_shortcode( 'home_plan_boxes', 'rp_home_plan_boxes' );

// display sidebar box
function rp_home_sidebar_box($atts=array(), $content=null)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => 'dedicated',
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_shared' => $GLOBALS['rp_settings']['default_urls']['shared_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'variant' => 1,
	), $atts ) );
	
	if ($variant == 1) $class_suffix = '_box';
	if ($variant == 2) $class_suffix = '_box_2';
	
	$content = html_entity_decode($content);
	
	$price_from = null;
	
	switch($type)
	{
		case 'dedicated':
			if (!is_array($GLOBALS['rp_info']['dedicated_plans']) or empty($GLOBALS['rp_info']['dedicated_plans'])) return;
			foreach($GLOBALS['rp_info']['dedicated_plans'] as $plan)
				if (!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			$title = 'Dedicated Servers';
			$class = 'dedicated'.$class_suffix;
			if ($variant == 3) $class = 'eight';
			if ($variant == 5) $class = 'dedicated-text';
			$more = 'View Dedicated Plans';
			$page_url = (!empty($url_dedicated) and get_option($url_dedicated) !== false) ? get_permalink(get_option($url_dedicated)) : get_permalink(get_option('rp_dedicated_plan'));
			$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
			break;
		case 'semi_dedicated':
			if (!is_array($GLOBALS['rp_info']['semi_dedicated_plans']) or empty($GLOBALS['rp_info']['semi_dedicated_plans'])) return;
			foreach($GLOBALS['rp_info']['semi_dedicated_plans'] as $plan)
				if (!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			$title = 'Semi-Dedicated';
			$class = 'semi_dedicated'.$class_suffix;
			if ($variant == 3) $class = 'seventh';
			if ($variant == 5) $class = 'semidedicated-text';
			$more = 'View Semi-Dedicated Plans';
			$page_url = (!empty($url_semi_dedicated) and get_option($url_semi_dedicated) !== false) ? get_permalink(get_option($url_semi_dedicated)) : get_permalink(get_option('rp_semi_dedicated_plan'));
			$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
			break;
		case 'shared':
			if (!is_array($GLOBALS['rp_info']['shared_plans']) or empty($GLOBALS['rp_info']['shared_plans'])) return;
			foreach($GLOBALS['rp_info']['shared_plans'] as $plan)
				if (!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			$title = 'Shared Hosting';
			$class = 'shared'.$class_suffix;
			if ($variant == 3) $class = 'fifth';
			if ($variant == 5) $class = 'virtuozzo-text';
			$more = 'View Shared Hosting Plans';
			$page_url = (!empty($url_shared) and get_option($url_shared) !== false) ? get_permalink(get_option($url_shared)) : get_permalink(get_option('rp_shared_plan'));
			$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
			break;
		case 'vps_virtuozzo':
			if (!is_array($GLOBALS['rp_info']['vps_plans']) or empty($GLOBALS['rp_info']['vps_plans'])) return;
			foreach($GLOBALS['rp_info']['vps_plans'] as $plan)
				if (!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			$title = 'Virtuozzo VPS';
			$class = 'vps'.$class_suffix;
			if ($variant == 3) $class = 'second';
			if ($variant == 5) $class = 'virtuozzo-text';
			$more = 'View Virtuozzo Plans';
			$page_url = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) : get_permalink(get_option('rp_vps_plan'));
			$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
			break;
		case 'vps_openvz':
			if (!is_array($GLOBALS['rp_info']['vps_openvz_plans']) or empty($GLOBALS['rp_info']['vps_openvz_plans'])) return;
			foreach($GLOBALS['rp_info']['vps_openvz_plans'] as $plan)
				if (!$price_from or $price_from > $plan['prices']['period_1'][$plan['store_currency']]) $price_from = $plan['prices']['period_1'][$plan['store_currency']];
			$title = 'OpenVZ VPS';
			$class = 'vps_openvz'.$class_suffix;
			if ($variant == 3) $class = 'first';
			if ($variant == 5) $class = 'openvz-text';
			$more = 'View OpenVZ Plans';
			$page_url = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) : get_permalink(get_option('rp_vps_openvz_plan'));
			$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
			break;
		case 'vps_kvm':
			if (!is_array($GLOBALS['rp_info']['vps_kvm_plans']) || empty($GLOBALS['rp_info']['vps_kvm_plans']))
				return;
			foreach ($GLOBALS['rp_info']['vps_kvm_plans'] as $plan)
				if (!$price_from || $price_from > $plan['prices']['period_1'][$plan['store_currency']])
					$price_from = $plan['prices']['period_1'][$plan['store_currency']];
			$title = 'KVM VPS';
			$class = 'vps' . $class_suffix;
			if ($variant == 3)
				$class = 'second';
			if ($variant == 5)
				$class = 'kvm-text';
			$more = 'View KVM Plans';
			$page_url = (!empty($url_vps_kvm) && get_option($url_vps_kvm) !== false) ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_kvm_plan'));
			$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
			break;
	}
	
	$price_from = _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from);
	
	$file = RSP_PATH.'/templates/home/sidebar_box_'.(int)$variant.'.php';
	ob_start();
	if (file_exists($file)) require $file;
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [home_sidebar_box type="dedicated" variant="1"]
add_shortcode( 'home_sidebar_box', 'rp_home_sidebar_box' );

// display other hosting box
function rp_home_other_hosting_boxes($atts=array(), $content=null)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant' => 1,
	), $atts ) );
	
	
	$content = html_entity_decode($content);
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
	
	ob_start();
	require RSP_PATH.'/templates/home/other_hosting_boxes.php';
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [home_other_hosting_boxes]
add_shortcode( 'home_other_hosting_boxes', 'rp_home_other_hosting_boxes' );

// display latest news
function rp_home_latest_news($atts=array())
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant' => 1,
		'query_args' => 'cat=1&posts_per_page=1'
	), $atts ) );
	
	// box variant check
	if (!in_array($variant,array(1))) return;
	
	ob_start();
	require RSP_PATH.'/templates/home/news_'.(int)$variant.'.php';
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [news_box variant="1" query_args="cat=7&posts_per_page=2"]
add_shortcode( 'news_box', 'rp_home_latest_news' );

// more than shared box
function rp_home_more_than_shared_box($atts=array())
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'variant' => 1,
		'title' => 'More Than Shared Hosting',
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'onlyshared' => ''
	), $atts ) );
	
	$title = trim($title);
	$price_from_vps_virtuozzo = null;
	$price_from_vps_openvz = null;
	$price_from_vps_kvm = null;
	$price_from_semi_dedicated = null;
	$price_from_dedicated = null;

	if (is_array($GLOBALS['rp_info']['dedicated_plans']) and !empty($GLOBALS['rp_info']['dedicated_plans'])){
		foreach($GLOBALS['rp_info']['dedicated_plans'] as $plan) {
			$id = $plan['rp_product_id'];
			if (!empty(rp_store_promos($id))) {
				$promo = rp_store_promos($id);
				$price = $promo['price_promo'];
			} else {
				$price = $plan['prices']['period_1'][$plan['store_currency']]; 
			}

			if (!$price_from_dedicated or $price_from_dedicated > $price) 
				$price_from_dedicated = $price;
		}

		$price_from_dedicated = _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from_dedicated);
		$page_url_dedicated = (!empty($url_dedicated) and get_option($url_dedicated) !== false) ? get_permalink(get_option($url_dedicated)) : get_permalink(get_option('rp_dedicated_plan'));
	}
	
	if (is_array($GLOBALS['rp_info']['semi_dedicated_plans']) and !empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
		foreach($GLOBALS['rp_info']['semi_dedicated_plans'] as $plan) {
			$id = $plan['rp_product_id'];
			if (!empty(rp_store_promos($id))) {
				$promo = rp_store_promos($id);
				$price = $promo['price_promo'];
			} else {
				$price = $plan['prices']['period_1'][$plan['store_currency']]; 
			}

			if (!$price_from_semi_dedicated or $price_from_semi_dedicated > $price) 
				$price_from_semi_dedicated = $price;
		}

		$price_from_semi_dedicated = _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from_semi_dedicated);
		$page_url_semi_dedicated = (!empty($url_semi_dedicated) and get_option($url_semi_dedicated) !== false) ? get_permalink(get_option($url_semi_dedicated)) : get_permalink(get_option('rp_semi_dedicated_plan'));
	}
	
	if (is_array($GLOBALS['rp_info']['vps_plans']) and !empty($GLOBALS['rp_info']['vps_plans'])){
		foreach($GLOBALS['rp_info']['vps_plans'] as $plan)
			if (!$price_from_vps_virtuozzo or $price_from_vps_virtuozzo > $plan['prices']['period_1'][$plan['store_currency']]) $price_from_vps_virtuozzo = $plan['prices']['period_1'][$plan['store_currency']];
		$price_from_vps_virtuozzo = _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from_vps_virtuozzo);
		$page_url_vps_virtuozzo = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) :get_permalink(get_option('rp_vps_plan'));
	}
	
	if (is_array($GLOBALS['rp_info']['vps_openvz_plans']) and !empty($GLOBALS['rp_info']['vps_openvz_plans'])){
		foreach($GLOBALS['rp_info']['vps_openvz_plans'] as $plan) {
			$id = $plan['rp_product_id'];
			if (!empty(rp_store_promos($id))) {
				$promo = rp_store_promos($id);
				$price = $promo['price_promo'];
			} else {
				$price = $plan['prices']['period_1'][$plan['store_currency']]; 
			}

			if (!$price_from_vps_openvz or $price_from_vps_openvz > $price) 
				$price_from_vps_openvz = $price;
		}

		$price_from_vps_openvz = _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from_vps_openvz);
		$page_url_vps_openvz = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) : get_permalink(get_option('rp_vps_openvz_plan'));
	}

	if (!empty($GLOBALS['rp_info']['vps_kvm_plans']) && is_array($GLOBALS['rp_info']['vps_kvm_plans'])) {
		foreach ($GLOBALS['rp_info']['vps_kvm_plans'] as $plan) {
			$id = $plan['rp_product_id'];
			if (!empty(rp_store_promos($id))) {
				$promo = rp_store_promos($id);
				$price = $promo['price_promo'];
			} else {
				$price = $plan['prices']['period_1'][$plan['store_currency']]; 
			}

			if (!$price_from_vps_kvm || $price_from_vps_openvz > $price)
				$price_from_vps_kvm = $price;
		}

		$price_from_vps_kvm = _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']) . sprintf('%0.2f', $price_from_vps_kvm);
		$page_url_vps_kvm = (!empty($url_vps_kvm) && get_option($url_vps_kvm) !== false) ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_kvm_plan'));
	}
	
	if (!($price_from_dedicated || $price_from_semi_dedicated || $price_from_vps_virtuozzo || $price_from_vps_openvz || $price_from_vps_kvm)) {
		$onlyshared = trim($onlyshared);
		$onlyshared_text = explode('|',$onlyshared);
	}
	
	if ($variant==1 or empty($variant)) $file = RSP_PATH.'/templates/home/more_than_shared.php';
	else $file = RSP_PATH.'/templates/home/more_than_shared_'.$variant.'.php';
	ob_start();
	if (file_exists($file)) require $file;
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [more_than_shared_box title="More Than Shared Hosting" url_dedicated="rp_dedicated_plan" url_semi_dedicated="rp_semi_dedicated_plan" url_vps_virtuozzo="rp_vps_plan" url_vps_openvz="rp_vps_openvz_plan"]
add_shortcode('more_than_shared_box', 'rp_home_more_than_shared_box');


?>