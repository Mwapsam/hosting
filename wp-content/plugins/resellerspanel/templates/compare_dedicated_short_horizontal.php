<?php
$dedicated_types = array(
	'high'=> array(
		'title' => 'High-performance Servers',
		'plans' => array(
			'60548',
			'60549',
			'60550',
			'60554',
			'65557',
			'63567',
			'60551',
			'65246',
			'64892',
			'65247',
			//'64893',
			'64894',
			'64895',
			//'64896',
			'64897',
		),
	),
	'old'=> array(
		'title' => 'Other Server Configurations',
		'plans' => array(
			'48174',
		),
		'note' => '<strong>Important:</strong> All servers listed below are available in limited quantities only. If the server you are looking for is not currently available, we suggest that you check out our line of high-performance servers.',
	),
);

//print_r($rp_plans);
$dedicated_group = array();
foreach ($dedicated_types as $type => $v) {
	foreach ($v['plans'] as $id) { 
		if (empty($rp_plans[$id]))
			continue;

		$dedicated_group[$type][$id] = $id;
	}
}

foreach ($dedicated_types as $type => $v) {
	if (!empty($dedicated_group[$type])) {
?>
<div class="dedicated-wrapper">
	<div class="dedicated-service-title">
		<div>
			<h2><?php echo $v['title']?></h2>
		</div>
		<div class="period-choice">
			<form>
				<div><label><input type="radio" class="dediperiod" data-grp="<?php echo $type?>" name="dedicated-period-<?php echo $type?>" value="1" checked><span class="radio-img"></span><span class="dedicated-period">Monthly</span></label></div>
				<div><label><input type="radio" class="dediperiod" data-grp="<?php echo $type?>" name="dedicated-period-<?php echo $type?>" value="3"><span class="radio-img"></span><span class="dedicated-period">Quarterly (10% OFF)</span></label></div>
				<div><label><input type="radio" class="dediperiod" data-grp="<?php echo $type?>" name="dedicated-period-<?php echo $type?>" value="6"><span class="radio-img"></span><span class="dedicated-period">Semi-annually (20% OFF)</span></label></div>
			</form>
		</div>
<?php if (!empty($v['note'])) { ?>
	<div class="dedicated-service-note">
		<p><?php echo $v['note']?></p>
	</div>
<?php } ?>
	</div>
<?php
	foreach ($v['plans'] as $id) {
		if (empty($rp_plans[$id]))
			continue;

		$plan = $rp_plans[$id];

		$_format_cpu = _format_cpu($plan['services']['processor']);
		$hdd_type = strtolower($plan['services']['hdd_type']);

		if (preg_match('/\bnvme\b/i', $hdd_type))
			$hdd_type_format = 'NVMe';
		else if (preg_match('/\bssd\b/i', $hdd_type))
			$hdd_type_format = 'SATA SSD';
		else
			$hdd_type_format = strtoupper($hdd_type);

		//Logos
		if (preg_match('/atom/i', $_format_cpu['model'])) {
			$plan['img'] = "atom.svg";
		} else if (preg_match('/opteron/i', $_format_cpu['model'])) {
			$plan['img'] = "amd.svg";
		} else {
			if (isset($plan['services']['rank']) && !empty($plan['services']['rank'])) {
				$plan_services = $plan['services'];

				if ($plan_services['rank'] == 'gold')
					$plan['img'] = "xeon-gold.svg";
				else if ($plan_services['rank'] == 'silver')
					$plan['img'] = "xeon-silver.svg";
				else if ($plan_services['rank'] == 'bronze')
					$plan['img'] = "xeon-bronze.svg";
				} else {
					$plan['img'] = "xeon.svg";
				}
		}
?>
	<div class="dedicated-plan">
		<table>
			<tbody>
				<tr>
					<td class="dedicated-plan-name">
						<img class="hide-for-small" src="<?php echo get_bloginfo('template_directory')?>/images/<?php echo $plan['img']?>" alt="<?php echo $plan['name']?>">
					</td>
					<td class="dedicated-plan-features">
						<div class="dedicated-plan-name">
							<span><?php echo $plan['name']?></span>
							<strong class="discount" style="display: none;"></strong>
						</div>
						<ul>
							<li>CPU: <strong><?php echo $_format_cpu['model']?></strong></li>
							<li>Disk Space: <strong><?php echo "{$plan['services']['hdd']}x" . __rp_value($plan['services']['disk_space'], 'disk_space') . ' <small>' . $hdd_type_format . '</small>'?></strong></li>
							<li>Monthly Traffic: <strong><?php echo __rp_value($plan['services']['traffic'], 'traffic')?></strong></li>
							<li><strong><?php echo "{$_format_cpu['cpu']} ({$_format_cpu['cores']} cores)"?></strong></li>
							<li>Upgradeable Storage: <strong><?php echo __rp_value($plan['services']['upgradeable_storage'], 'upgradeable_storage')?></strong></li>
							<li>RAM: <strong><?php echo $plan['services']['ram']?>GB</strong></li>
<?php
if (!empty($plan['services']['assembly_time'])) { 
	$_t = $plan['services']['assembly_time'];
	if ($_t % 7 == 0) {
		$_t = ($_t / 7);
		$_t = $_t > 1 ? "$_t Weeks" : "$_t Week";
	} else {
		$_t .= ' Days';
	}
?>
							<li><small>*<?php echo $_t; ?> Assembly Time</small></li>
<?php } ?>
						</ul>
					</td>
<?php
$data_atts = '';
foreach ($plan['prices'] as $period => $price) {
	$curr = _rp_get_currency_symbol($plan['store_currency']);
	$_period = str_replace('period_', '', $period);
	
	if (isset($plan['prices_promo'][$period])) {
		foreach ($plan['promo_period'] as $pk => $pv) {
			$data_atts .= ' data-price-' . $pv .'="' . sprintf('%.2f', $plan['prices_promo']['period_'.$pv][$plan['store_currency']] / $pv) . '"';
			$data_atts .= ' data-price-' . $pv .'-old="' . sprintf('%.2f', $plan['prices']['period_'.$pv][$plan['store_currency']] / $pv) . '"';
		}
	} else {
		$data_atts .= ' data-price-' . $_period . '="' . sprintf('%.2f', $price[$plan['store_currency']] / $_period) . '"';
	}
}
?>
					<td class="dedicated-plan-price <?=$type?>" <?php echo $data_atts?>>
						<span class="price"><?php echo $curr?><strong><?php echo sprintf('%.2f', $plan['prices']['period_1'][$plan['store_currency']])?></strong><span class="astrx" style="display:none;">*</span><small>/mo</small></span>
						<span class="old-price" style="display:none;"><?php echo $curr?><strong><?php echo sprintf('%.2f', $plan['prices']['period_1'])?></strong><small>/mo</small></span>
						<div class="promo-period-text" style="display:none;">* valid for <strong></strong> month(s)</div>
					</td>
					<td>
						<div data-id="<?php echo $plan['rp_product_id'];?>" class="checkstock">Please wait...</div>
						<div data-id="<?php echo $plan['rp_product_id'];?>" class="instock" style="display:none">
							<form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
								<button class="rpwp-button colorize"><span class="gloss"></span>Order</button>
								<?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
								<input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
								<?php endforeach; endif;?>
								<input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
								<input name="period" type="hidden" value="1" class="period_<?=$type?>" />
							</form>
						</div>
						<div data-id="<?php echo $plan['rp_product_id'];?>" class="outofstock" style="display:none">
							<span class="out-of-stock">Out of stock</span>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
<?php } ?>
<?php if (!empty($show_link)) { ?>
	<div class="show-features">
		<a class="inline_compare" href="#compare_overlay">view additional server features</a>
	</div>
<?php } ?>
</div>
<?php } ?>
<?php } ?>
<script>
var checkforstock = true;
</script>
