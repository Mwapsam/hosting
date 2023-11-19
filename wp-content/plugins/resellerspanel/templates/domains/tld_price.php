<?php 
if(!function_exists('__rp_price')){
/**
 * Local helper - print the formated price by a given period
 * @param string $p The period
 * @return void
 */
	function __rp_price($price, $p){
		if (isset($price['prices'][$p][$price['store_currency']]) && $price['prices'][$p][$price['store_currency']] == '0.00')
			return __rp('FREE', 'FREE');
		//else echo isset($price['prices'][$p])?sprintf($price['currency_symbol'], $price['prices'][$p][$price['store_currency']]):"-";
		else {
			$has_promo_price = '';
			if (!empty($price['prices_register'])) {
				$pricesArr = $price['prices_register'];
				if (preg_match('/12$/', $p)) {
					$has_promo_price = '<strong class="red">*</strong>';
				}
			} else {
				$pricesArr = $price['prices'];
			}
			return isset($pricesArr[$p]) ? sprintf("{$price['currency_symbol']}{$has_promo_price}", $pricesArr[$p][$price['store_currency']]) : "-";
		}
	}
}
$show_promo_msg = false;
?>
<div class="long-domain-table">
<table class="rp-tld-price">
	<thead>
		<tr>
			<th class="rp-tld-col-first"><?php _erp('tldp_tld', 'TLD')?></th>
			<th><?php printf(__rp('tldp_year', '%d year'), 1)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 2)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 3)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 4)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 5)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 6)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 7)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 8)?></th>
			<th><?php printf(__rp('tldp_years', '%d years'), 9)?></th>
			<th class="rp-tld-col-last"><?php printf(__rp('tldp_years', '%d years'), 10)?></th>
		</tr>
	</thead>
	<tbody>
<?php $cnt=0;
foreach ($prices as $tld => $price) {
	if (empty($tlds_info[$tld]['register']) && empty($tlds_info[$tld]['transfer']))
		continue;
	
	if($id_protect == 1 and !$tlds[$tld]['id_protect'])
		continue;
	
	$p = 0; $cnt++;
?>
	<tr class="<?php if($cnt%2) echo 'rp-tld-row-odd'; else echo 'rp-tld-row-even'; if (array_key_exists($tld, $GLOBALS['rp_info']['domain_prices'])) echo ' rp-tld-promotional';?>">
	<td class="rp-tld-col-first"><?php if(get_option('rp_domain_names_'.$tld)) echo '<a href="'.get_permalink(get_option('rp_domain_names_'.$tld)).'">.'.$tld.'</a>'; else echo '.'.$tld; ?></td>
	<?php foreach(range(1,10) as $i) { ?>
<?php
$_price = __rp_price($price, 'period_'.($p+=12));
if (!$show_promo_msg && preg_match('/\*/', $_price))
	$show_promo_msg = true;
?>
	<td<?php if ($i == 10) echo ' class="rp-tld-col-last"'?>><?php echo $_price; ?></td>
	<?php } ?>
	</tr>
	
	<?php } ?>
	
	</tbody>
</table>
<?php if ($show_promo_msg) { ?>
<small><strong class="red">*</strong> the price is valid for 1-year registrations only</small>
<?php } ?>
</div>