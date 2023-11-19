<?php 
if(!function_exists('__rp_price')){
/**
 * Local helper - print the formated price by a given period
 * @param string $p The period
 * @return void
 */
	function __rp_price($price, $p){
		//echo $price['prices'][$p]?sprintf($price['currency_symbol'], $price['prices'][$p][$price['store_currency']]):"-";
		$pricesArr = (@is_array($price['prices_register'])) ? $price['prices_register'] : $price['prices'];
		echo isset($pricesArr[$p]) ? sprintf($price['currency_symbol'], $pricesArr[$p][$price['store_currency']]) : "-";
	}
}
if (!is_array($registerDomains)){
	$registerDomains = $GLOBALS['rp_info']['registerdomain_prices'];
}
?>
<div class="long-domain-table">
<table class="rp-tld-info">
	<thead>
		<tr>
			<th class="rp-tld-col-first"><?php _erp('tldi_tld', 'TLD');?></th>
			<th><?php _erp('tldi_registrar_lock', 'Registrar-Lock')?></th>
			<th><?php _erp('tldi_transfers', 'Transfers')?></th>
			<th><?php _erp('tldi_whois', 'Edit WHOIS')?></th>
			<th><?php _erp('tldi_id_protect', 'ID Protect')?></th>
			<th><?php _erp('tldi_registration_period', 'Registration Period')?></th>
			<th class="rp-tld-col-last"><?php _erp('tldi_single_registration_transfer', 'Single registration/transfer')?></th>
		</tr>
	</thead>
	<tbody>
<?php $cnt=0; foreach ($tlds as $tld => $info):
	if (empty($registerDomains[$tld]))
		continue;

	if (empty($tlds_info[$tld]['register']) && empty($tlds_info[$tld]['transfer']))
		continue;

	if ($id_protect == 1 and !$info['id_protect'])
		continue;

	$price = isset($prices[$tld]) ? $prices[$tld] : '';
	$cnt++;
?>
	<tr class="<?php if($cnt%2) echo 'rp-tld-row-odd'; else echo 'rp-tld-row-even'; if (array_key_exists($tld, $GLOBALS['rp_info']['domain_prices'])) echo ' rp-tld-promotional';?>">
	<td class="rp-tld-col-first"><?php if(get_option('rp_domain_names_'.$tld)) echo '<a href="'.get_permalink(get_option('rp_domain_names_'.$tld)).'">.'.$tld.'</a>'; else echo '.'.$tld; ?></td>
	
	<td><?php echo $info['registrar_lock']?__rp('tldi_yes', 'yes'):__rp('tldi_no', 'no')?></td>
	<td><?php echo $info['transfer']?__rp('tldi_yes', 'yes').($info['epp']?__rp('tldi_epp', '(EPP)'):''):__rp('tldi_no', 'no')?></td>
	<td><?php echo $info['whois']?__rp('tldi_yes', 'yes'):__rp('tldi_no', 'no')?></td>
	<td><?php echo $info['id_protect']?__rp('tldi_yes', 'yes'):__rp('tldi_no', 'no')?></td>
	<td><?php 
	$period = false;
	foreach ($info['years'] as $y){
		if (!$period)$period=$y;
	}
	if ($y>$period)$period.='-'.$y;
	printf(__rp($period == '1' ? 'tldi_year' : 'tldi_years', $period == '1'?'%s yr':'%s yrs'), $period);
	?></td>
	<td class="rp-tld-col-last"><?php
	if ($price)
		if (isset($price['prices']['period_12'])) __rp_price($price, 'period_12');
		elseif(isset($price['prices']['period_24'])){ __rp_price($price, 'period_24'); echo " ("; printf(__rp('tldi_years', '%s yrs'), 2);echo ")";}
		elseif(isset($price['prices']['period_36'])){ __rp_price($price, 'period_36'); echo " ("; printf(__rp('tldi_years', '%s yrs'), 3);echo ")";}
	?></td>
	
	</tr>
	
	<?php endforeach;?>
	
	</tbody>
</table>
</div>