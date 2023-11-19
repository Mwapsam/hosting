<?php


// display article domain search
function rp_article_domain_search($atts)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'tld' => 'com',
		'url_domain_search' => $GLOBALS['rp_settings']['default_urls']['domain_search']
	), $atts ) );
	//if(empty($tld)) $tld = 'com';
	$domains = $GLOBALS['rp_info']['registerdomain_prices'];

	//Cheapest tld
	$period_prices = array();
	foreach ($domains as $key => $info) {
		if (isset($info['prices_register']) && !empty($info['prices_register']))
			$prices = $info['prices_register'];
		else
			$prices = $info['prices'];

		$currency = $info['store_currency'];
		$price = reset($prices);
	
		if (empty($price))
			continue;

		$period_prices[$key]['price'] = sprintf("%.2f", $price[$currency]);
	}
	$cheapest_tld = min(array_column($period_prices, 'price'));

	$tld_count = count($GLOBALS['rp_info']['registerdomain_prices']);
	if($tld_count > 10)
	{
		$tmp = floor($tld_count/10)*10;
		$tld_count = $tmp;
	}
	
	$GLOBALS['dsearch_form_action'] = (!empty($url_domain_search) and get_option($url_domain_search) !== false) ? get_permalink(get_option($url_domain_search)) : '';
	
	ob_start();
	require RSP_PATH.'/templates/domains/domain_search_articles.php';
  	$string=do_shortcode(ob_get_contents());
  	ob_end_clean();
	return $string;
}
// [article_domain_search]
add_shortcode( 'article_domain_search', 'rp_article_domain_search' );

// display article plan box
function rp_article_plan_box($atts)
{
	global $rp_info, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => 'shared',
		'button' => '',
		'plan'=>'',
		'url_shared' => $GLOBALS['rp_settings']['default_urls']['shared_hosting'],
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']
	), $atts ) );
	
	
	$plan = (int)$plan;
	
	switch($type){
		case 'vps_openvz':
			if(is_array($GLOBALS['rp_info']['vps_openvz_plans']) and !empty($GLOBALS['rp_info']['vps_openvz_plans'])){
				if(!array_key_exists($plan,$GLOBALS['rp_info']['vps_openvz_plans'])) $plan = key($GLOBALS['rp_info']['vps_openvz_plans']);
				$sel_plan = $GLOBALS['rp_info']['vps_openvz_plans'][$plan];
				$sel_plan['page_url'] = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) : get_permalink(get_option('rp_vps_openvz_plan'));
				$file = RSP_PATH.'/templates/home/plan_box_vps_openvz_small_1.php';
			}
			break;
		case 'vps_virtuozzo':
			if(is_array($GLOBALS['rp_info']['vps_plans']) and !empty($GLOBALS['rp_info']['vps_plans'])){
				if(!array_key_exists($plan,$GLOBALS['rp_info']['vps_plans'])) $plan = key($GLOBALS['rp_info']['vps_plans']);
				$sel_plan = $GLOBALS['rp_info']['vps_plans'][$plan];
				$sel_plan['page_url'] = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) : get_permalink(get_option('rp_vps_plan'));
				$file = RSP_PATH.'/templates/home/plan_box_vps_small_1.php';
			}
			break;
		case 'vps_kvm':
			if (!empty($GLOBALS['rp_info']['vps_kvm_plans']) && is_array($GLOBALS['rp_info']['vps_kvm_plans'])) {
				if (!array_key_exists($plan, $GLOBALS['rp_info']['vps_kvm_plans']))
					$plan = key($GLOBALS['rp_info']['vps_kvm_plans']);
				$sel_plan = $GLOBALS['rp_info']['vps_kvm_plans'][$plan];
				$sel_plan['page_url'] = (!empty($url_vps_kvm) && get_option($url_vps_kvm) !== false) ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_kvm_plan'));
				$file = RSP_PATH . '/templates/home/plan_box_vps_kvm_small_1.php';
			}
			break;
		case 'semi_dedicated':
			if(is_array($GLOBALS['rp_info']['semi_dedicated_plans']) and !empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
				if(!array_key_exists($plan,$GLOBALS['rp_info']['semi_dedicated_plans'])) $plan = key($GLOBALS['rp_info']['semi_dedicated_plans']);
				$sel_plan = $GLOBALS['rp_info']['semi_dedicated_plans'][$plan];
				$sel_plan['page_url'] = (!empty($url_semi_dedicated) and get_option($url_semi_dedicated) !== false) ? get_permalink(get_option($url_semi_dedicated)) : get_permalink(get_option('rp_semi_dedicated_plan'));
				$file = RSP_PATH.'/templates/home/plan_box_semi_dedicated_small_1.php';
			}
			break;
		case 'dedicated':
			if(is_array($GLOBALS['rp_info']['dedicated_plans']) and !empty($GLOBALS['rp_info']['dedicated_plans'])){
				if(!array_key_exists($plan,$GLOBALS['rp_info']['dedicated_plans'])) $plan = key($GLOBALS['rp_info']['dedicated_plans']);
				$sel_plan = $GLOBALS['rp_info']['dedicated_plans'][$plan];
				$sel_plan['page_url'] = (!empty($url_dedicated) and get_option($url_dedicated) !== false) ? get_permalink(get_option($url_dedicated)) : get_permalink(get_option('rp_dedicated_plan'));
				$file = RSP_PATH.'/templates/home/plan_box_dedicated_small_1.php';
			}
			break;
		default:
			if(is_array($GLOBALS['rp_info']['shared_plans']) and !empty($GLOBALS['rp_info']['shared_plans'])){
				if(!array_key_exists($plan,$GLOBALS['rp_info']['shared_plans'])) $plan = key($GLOBALS['rp_info']['shared_plans']);
				$sel_plan = $GLOBALS['rp_info']['shared_plans'][$plan];
				$sel_plan['page_url'] = (!empty($url_shared) and get_option($url_shared) !== false) ? get_permalink(get_option($url_shared)) : get_permalink(get_option('rp_shared_plan'));
				$file = RSP_PATH.'/templates/home/plan_box_shared_small_1.php';
			}
	}
	if(empty($sel_plan)) return;
	
	$plan = $sel_plan;
	
	$floating = ' class="right"';
		
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
	if(file_exists($file)) require($file);
  	$string=ob_get_contents();
  	ob_end_clean();
	return $string;
}
// [article_plan_box type="shared" plan="1"]
add_shortcode( 'article_plan_box', 'rp_article_plan_box' );

// Article page compare plans table
function rp_article_plans_table( $atts) {
	global $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => 'shared',
		'best' => '',
		'url_shared' => $GLOBALS['rp_settings']['default_urls']['shared_hosting'],
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']
	), $atts ) );
	$plans_type = $type;
	
	// Get only required plan information from the api request
	switch ($plans_type){
		case 'vps_openvz':
			if(!empty($GLOBALS['rp_info']['vps_openvz_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_openvz_plans'],0,6,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
				$compare_url = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) : get_permalink(get_option('rp_vps_openvz_plan'));
				$file = RSP_PATH.'/templates/compare_vps_openvz_short_2.php';
			}else return;
			break;
		case 'vps_virtuozzo':
			if(!empty($GLOBALS['rp_info']['vps_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_plans'],0,6,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
				$compare_url = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) : get_permalink(get_option('rp_vps_plan'));
				$file = RSP_PATH.'/templates/compare_vps_virtuozzo_short_2.php';
			}else return;
			break;
		case 'vps_kvm':
			if (empty($GLOBALS['rp_info']['vps_kvm_plans']))
				return;
			$rp_plans = array_slice($GLOBALS['rp_info']['vps_kvm_plans'], 0, 6, true);
			$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
			$compare_url = !empty($url_vps_kvm) && get_option($url_vps_kvm) !== false ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_kvm_plan'));
			$file = RSP_PATH . '/templates/compare_vps_kvm_short_2.php';
			break;
		case 'semi_dedicated':
			if(!empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['semi_dedicated_plans'],0,6,true);
				$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
				$file = RSP_PATH.'/templates/compare_semi_dedicated_short_2.php';
			}else return;
			break;
		case 'dedicated':
			if(!empty($GLOBALS['rp_info']['dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['dedicated_plans'],0,6,true);
				$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
				$file = RSP_PATH.'/templates/compare_dedicated_short_2.php';
			}else return;
			break;
		default:
			if(!empty($GLOBALS['rp_info']['shared_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['shared_plans'],0,6,true);
				$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
				$file = RSP_PATH.'/templates/compare_shared_short_2.php';
			}else return;
	}
	
	if(!is_array($rp_plans) or empty($rp_plans)) return;
	
	$rp_best_plan = null;
	if (!empty($best) and array_key_exists($best,(array)$rp_plans))
		$rp_best_plan = $best;
	
	if(empty($rp_signup_url)) $rp_signup_url = get_permalink(get_option('rp_order_form'));
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
	if(file_exists($file)) require($file);
	$string=ob_get_contents();
	ob_end_clean();	
	return $string;
}
//example [article_plans_table type='vps_openvz' best='1']
add_shortcode( 'article_plans_table', 'rp_article_plans_table' );


// Article page left sidebar plans
function rp_article_plans_left( $atts) {
	global $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => 'shared',
		'best' => '',
		'limit' => '3',
		'url_shared' => $GLOBALS['rp_settings']['default_urls']['shared_hosting'],
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']
	), $atts ) );
	$plans_type = $type;
	if(!$limit) $limit = 3;
	// Get only required plan information from the api request
	switch ($plans_type){
		case 'vps_openvz':
			if(!empty($GLOBALS['rp_info']['vps_openvz_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_openvz_plans'],0,$limit,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
				$compare_url = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) : get_permalink(get_option('rp_vps_openvz_plan'));
				$file = RSP_PATH.'/templates/compare_vps_openvz_article_left.php';
			}else return;
			break;
		case 'vps_virtuozzo':
			if(!empty($GLOBALS['rp_info']['vps_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_plans'],0,$limit,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
				$compare_url = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) : get_permalink(get_option('rp_vps_plan'));
				$file = RSP_PATH.'/templates/compare_vps_virtuozzo_article_left.php';
			}else return;
			break;
		case 'vps_kvm':
			if(!empty($GLOBALS['rp_info']['vps_kvm_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_kvm_plans'],0,$limit,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
				$compare_url = (!empty($url_vps_kvm) and get_option($url_vps_kvm) !== false) ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_plan'));
				$file = RSP_PATH.'/templates/compare_vps_kvm_article_left.php';
			}else return;
			break;
		case 'semi_dedicated':
			if(!empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['semi_dedicated_plans'],0,$limit,true);
				$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
				$file = RSP_PATH.'/templates/compare_semi_dedicated_article_left.php';
			}else return;
			break;
		case 'dedicated':
			if(!empty($GLOBALS['rp_info']['dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['dedicated_plans'],0,$limit,true);
				$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
				$file = RSP_PATH.'/templates/compare_dedicated_article_left.php';
			}else return;
			break;
		default:
			if(!empty($GLOBALS['rp_info']['shared_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['shared_plans'],0,$limit,true);
				$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
				$file = RSP_PATH.'/templates/compare_shared_article_left.php';
			}else return;
	}
	
	if(!is_array($rp_plans) or empty($rp_plans)) return;
	
	$rp_best_plan = null;
	if (!empty($best) and array_key_exists($best,(array)$rp_plans))
		$rp_best_plan = $best;
	
	if(empty($rp_signup_url)) $rp_signup_url = get_permalink(get_option('rp_order_form'));
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
	if(file_exists($file)) require($file);
	$string=ob_get_contents();
	ob_end_clean();	
	return $string;
}
//example [article_plans_left type='vps_openvz' best='1']
add_shortcode( 'article_plans_left', 'rp_article_plans_left' );


// Article page left sidebar plans
function rp_article_sidebar_menu( $atts) {
	global $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'article_type' => '1',
		'selected' => ''
	), $atts ) );
	
	if(!in_array($article_type,array(1,2,3))) return;
	$ret = '';
	foreach($GLOBALS['rp_install_pages'] as $key=>$value)
	{
		if($value['type']=='article')
			if(preg_match('/_'.$article_type.'$/',$key))
				$ret .= '<a class="a-link'.(($key==$selected)?' a-link-selected':'').'" href="'.get_permalink(get_option($key)).'">'.get_the_title(get_option($key)).'</a>';
	}
	
	return $ret;
}
//example [article_plans_left type='vps_openvz' best='1']
add_shortcode( 'article_sidebar_menu', 'rp_article_sidebar_menu' );


// Article page left sidebar plans
function rp_article_plans_table_2( $atts) {
	global $rp_api, $rp_api_error;
	if (isset($rp_api_error)) return '<div class="updated fade" style="color:#CC0000;"><p><strong>Plugin has experienced error</strong> <br /> '.$rp_api_error.'</p></div>';
	extract( shortcode_atts( array(
		'type' => 'shared',
		'best' => '',
		'url_shared' => $GLOBALS['rp_settings']['default_urls']['shared_hosting'],
		'url_dedicated' => $GLOBALS['rp_settings']['default_urls']['dedicated_hosting'],
		'url_semi_dedicated' => $GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting'],
		'url_vps_virtuozzo' => $GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting'],
		'url_vps_kvm' => $GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting'],
		'url_vps_openvz' => $GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']
	), $atts ) );
	$plans_type = $type;
	
	// Get only required plan information from the api request
	switch ($plans_type){
		case 'vps_openvz':
			if(!empty($GLOBALS['rp_info']['vps_openvz_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_openvz_plans'],0,2,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_openvz_order_form'));
				$compare_url = (!empty($url_vps_openvz) and get_option($url_vps_openvz) !== false) ? get_permalink(get_option($url_vps_openvz)) : get_permalink(get_option('rp_vps_openvz_plan'));
				$file = RSP_PATH.'/templates/compare_vps_openvz_short_3.php';
			}else return;
			break;
		case 'vps_virtuozzo':
			if(!empty($GLOBALS['rp_info']['vps_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_plans'],0,2,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_virtuozzo_order_form'));
				$compare_url = (!empty($url_vps_virtuozzo) and get_option($url_vps_virtuozzo) !== false) ? get_permalink(get_option($url_vps_virtuozzo)) : get_permalink(get_option('rp_vps_plan'));
				$file = RSP_PATH.'/templates/compare_vps_virtuozzo_short_3.php';
			}else return;
			break;
		case 'vps_kvm':
			if(!empty($GLOBALS['rp_info']['vps_kvm_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['vps_kvm_plans'],0,2,true);
				$rp_signup_url = get_permalink(get_option('rp_vps_kvm_order_form'));
				$compare_url = (!empty($url_vps_kvm) and get_option($url_vps_kvm) !== false) ? get_permalink(get_option($url_vps_kvm)) : get_permalink(get_option('rp_vps_plan'));
				$file = RSP_PATH.'/templates/compare_vps_kvm_short_3.php';
			}else return;
			break;
		case 'semi_dedicated':
			if(!empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['semi_dedicated_plans'],0,2,true);
				$rp_signup_url = get_permalink(get_option('rp_semi_dedicated_order_form'));
				$file = RSP_PATH.'/templates/compare_semi_dedicated_short_3.php';
			}else return;
			break;
		case 'dedicated':
			if(!empty($GLOBALS['rp_info']['dedicated_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['dedicated_plans'],0,2,true);
				$rp_signup_url = get_permalink(get_option('rp_dedicated_order_form'));
				$file = RSP_PATH.'/templates/compare_dedicated_short_3.php';
			}else return;
			break;
		default:
			if(!empty($GLOBALS['rp_info']['shared_plans'])){
				$rp_plans = array_slice($GLOBALS['rp_info']['shared_plans'],0,2,true);
				$rp_signup_url = get_permalink(get_option('rp_shared_order_form'));
				$file = RSP_PATH.'/templates/compare_shared_short_3.php';
			}else return;
	}
	
	if(!is_array($rp_plans) or empty($rp_plans)) return;
	
	$rp_best_plan = null;
	if (!empty($best) and array_key_exists($best,(array)$rp_plans))
		$rp_best_plan = $best;
	
	if(empty($rp_signup_url)) $rp_signup_url = get_permalink(get_option('rp_order_form'));
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
	if(file_exists($file)) require($file);
	$string=ob_get_contents();
	ob_end_clean();	
	return $string;
}
//example [article_plans_table_2 type='shared' best='1']
add_shortcode( 'article_plans_table_2', 'rp_article_plans_table_2' );

// display article short summary
function rp_article_summary($atts) {
	extract( shortcode_atts( array(
		'type' => '',
		'title' => '',
		'text' => ''
	), $atts ) );
	if(empty($type)) return;
	if(rp_default_page_link(array('key'=>$type)) == '#') return;

	$template_url = get_bloginfo( 'template_url' );
	
	$articles_summary = array(
		'affordable_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_affordable_hosting\']">[webp img="articles-thumbs/affordable-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_affordable_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'best_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_best_hosting\']">[webp img="articles-thumbs/best-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_best_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'dedicated_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_dedicated_hosting\']">[webp img="articles-thumbs/dedicated-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_dedicated_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'domain_manager' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_domain_manager\']">[webp img="articles-thumbs/domain-manager.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_domain_manager\']">'.$title.'</a></h2>'.$text.'</div>',
		'domain_names' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_domain_names\']">[webp img="articles-thumbs/domain-names.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_domain_names\']">'.$title.'</a></h2>'.$text.'</div>',
		'domain_web_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_domain_web_hosting\']">[webp img="articles-thumbs/domain-web-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_domain_web_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'how_cpanel_hosting_works' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_how_cpanel_hosting_works\']">[webp img="articles-thumbs/how-cpanel-works.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_how_cpanel_hosting_works\']">'.$title.'</a></h2>'.$text.'</div>',
		'reseller_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_reseller_hosting\']">[webp img="articles-thumbs/reseller-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_reseller_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'semi_dedicated_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_semi_dedicated_hosting\']">[webp img="articles-thumbs/semi-dedicated-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_semi_dedicated_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'shared_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_shared_hosting\']">[webp img="articles-thumbs/shared-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_shared_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'ssl_certificates' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_ssl_certificates\']">[webp img="articles-thumbs/ssl-certificates.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_ssl_certificates\']">'.$title.'</a></h2>'.$text.'</div>',
		'vps_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_vps_hosting\']">[webp img="articles-thumbs/vps-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_vps_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'web_hosting_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_web_hosting_hosting\']">[webp img="articles-thumbs/web-hosting-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_web_hosting_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
		'web_hosting_services' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_web_hosting_services\']">[webp img="articles-thumbs/web-hosting-services.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_web_hosting_services\']">'.$title.'</a></h2>'.$text.'</div>',
		'what_is_cloud_hosting' => '<div class="article-summary"><a href="[rp_default_page_link key=\'article_rp_article_what_is_cloud_hosting\']">[webp img="articles-thumbs/what-is-cloud-hosting.jpg" class="article-thumb" title="'.$title.'"]</a>
			<h2><a href="[rp_default_page_link key=\'article_rp_article_what_is_cloud_hosting\']">'.$title.'</a></h2>'.$text.'</div>',
	);
	
	$filename = preg_replace('/^article_rp_article_/','',$type);
	if(array_key_exists($filename, $articles_summary)){
		return do_shortcode($articles_summary[$filename]);
	}else return;
}
//example [rp_article_summary type="article_rp_article_best_hosting" title="Best Hosting" text="Best Hosting Description"]
add_shortcode( 'rp_article_summary', 'rp_article_summary' );

// display article short summary
function rp_article_summaries($atts, $content=null) {
	extract( shortcode_atts( array(
		'param' => ''
	), $atts ) );
	
	$content = str_replace("</p>\n<p>", "\n\n", $content);
	$content = str_replace("<br />\n", "\n", do_shortcode($content));
	$content = html_entity_decode($content);
	
	$content = trim($content);
	$rows = explode("\n",$content);
	$summaries = array();
	if(is_array($rows) and count($rows)>0)
	{
		foreach($rows as $row)
		{
			if(empty($row)) continue;
			$row_content = explode('|', $row, 3);
			if(is_array($row_content) and count($row_content)==3)
				$summaries[$row_content[0]] = array('title'=>$row_content[1],'text'=>$row_content[2]);
		}
	}else return;
	
	if(!is_array($GLOBALS['rp_settings']['default_articles_order'])) return;
	
	$string = '';
	$article_type = (int)$GLOBALS['rp_settings']['default_urls']['articles'];
	foreach($GLOBALS['rp_settings']['default_articles_order'] as $page){
		if(!preg_match('/_'.$article_type.'$/',$page)) continue; // not the same article type
		$str = preg_replace('/_'.$article_type.'$/','',$page);
		if(!is_array($summaries['article_'.$str])) continue;
		else $string .= do_shortcode('[rp_article_summary type="article_'.$str.'" title="'.$summaries['article_'.$str]['title'].'" text="'.$summaries['article_'.$str]['text'].'"]');
	}
	
	return do_shortcode($string);
}
//example [rp_article_summaries]....[/rp_article_summaries]
add_shortcode( 'rp_article_summaries', 'rp_article_summaries' );

?>