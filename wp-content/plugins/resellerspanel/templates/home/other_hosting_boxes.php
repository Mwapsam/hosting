<?php
$boxes_html = array();

if (is_array($GLOBALS['rp_info']['vps_plans']) and !empty($GLOBALS['rp_info']['vps_plans'])){
	$price_from = null;
	foreach ($GLOBALS['rp_info']['vps_plans'] as $plan)
		if (!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']])
			$price_from = $plan['prices']['period_1'][$plan['store_currency']];

	$boxes_html['vps_virtuozzo'] = '
				<div id="other-hosting-services-2">
					<h3>Virtuozzo VPS</h3>
					<div id="service-price">from '._rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from).' a month</div>
					<p>'.$notes['vps_virtuozzo_content'].'</p>
				</div>';
}

if (is_array($GLOBALS['rp_info']['vps_openvz_plans']) and !empty($GLOBALS['rp_info']['vps_openvz_plans'])){
	$price_from = null;
	foreach ($GLOBALS['rp_info']['vps_openvz_plans'] as $plan)
		if (!$price_from or $price_from > $plan['prices']['period_1'][$plan['store_currency']])
			$price_from = $plan['prices']['period_1'][$plan['store_currency']];

	$boxes_html['vps_openvz'] = '
				<div id="other-hosting-services-3">
					<h3>OpenVZ VPS</h3>
					<div id="service-price">from '._rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from).' a month</div>
					<p>'.$notes['vps_openvz_content'].'</p>
				</div>';
}

if (!empty($GLOBALS['rp_info']['vps_kvm_plans']) && is_array($GLOBALS['rp_info']['vps_kvm_plans'])) {
	$price_from = null;
	foreach ($GLOBALS['rp_info']['vps_kvm_plans'] as $plan)
		if (!$price_form || $price_from > $plan['prices']['period_1'][$plan['store_currency']])
			$price_from = $plan['prices']['period_1'][$plan['store_currency']];

	$boxes_html['vps_kvm'] = '
				<div id="other-hosting-services-2">
					<h3>KVM VPS</h3>
					<div id="service-price">from ' . _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']) . sprintf('%0.2f', $price_from) . ' a month</div>
					<p>' . $notes['vps_kvm_content'] . '</p>
				</div>';
}

if (is_array($GLOBALS['rp_info']['semi_dedicated_plans']) and !empty($GLOBALS['rp_info']['semi_dedicated_plans'])){
	$price_from = null;
	foreach ($GLOBALS['rp_info']['semi_dedicated_plans'] as $plan)
		if (!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']])
			$price_from = $plan['prices']['period_1'][$plan['store_currency']];

	$boxes_html['semi_dedicated'] = '
				<div id="other-hosting-services-1">
					<h3>Semi-Dedicated Servers</h3>
					<div id="service-price">from '._rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from).' a month</div>
					<p>'.$notes['semi_dedicated_content'].'</p>
				</div>';
}

if (is_array($GLOBALS['rp_info']['dedicated_plans']) and !empty($GLOBALS['rp_info']['dedicated_plans'])){
	$price_from = null;
	foreach ($GLOBALS['rp_info']['dedicated_plans'] as $plan)
		if (!$price_from or $price_from >$plan['prices']['period_1'][$plan['store_currency']])
			$price_from = $plan['prices']['period_1'][$plan['store_currency']];

	$boxes_html['dedicated'] = '
				<div id="other-hosting-services-4">
					<h3>Dedicated Servers</h3>
					<div id="service-price">from '._rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']).sprintf('%0.2f',$price_from).' a month</div>
					<p>'.$notes['dedicated_content'].'</p>
				</div>';
}
?>
            <div id="front_page_content-main">
            <?php 
			$br=0;
			foreach ($boxes_html as $value) {
				if ($br==2)
					echo '</div><div id="front_page_content-main">';

				echo $value;
				$br++;
			}
			?>
			</div>