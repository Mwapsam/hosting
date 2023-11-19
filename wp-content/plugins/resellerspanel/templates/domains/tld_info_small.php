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
?>
<table class="rp-tld-info">
	<thead>
		<tr>
			<th class="rp-tld-col-first"><?php _erp('tldi_tld', 'TLD')?></th>
			<th>Registrar<br />Lock</th>
			<th>Transfers</th>
		</tr>
	</thead>
	<tbody>
	<?php $cnt=0; foreach ($tlds as $tld => $info) {
		if (empty($tlds_info[$tld]['register']) && empty($tlds_info[$tld]['transfer']))
			continue;
   
		$price = isset($prices[$tld]) ? $prices[$tld] : '';
		$cnt++;
	?>
	<tr class="<?php if($cnt%2) echo 'rp-tld-row-odd'; else echo 'rp-tld-row-even'; if (array_key_exists($tld, $GLOBALS['rp_info']['domain_prices'])) echo ' rp-tld-promotional';?>">
	<td class="rp-tld-col-first"><?php if(get_option('rp_domain_names_'.$tld)) echo '<a href="'.get_permalink(get_option('rp_domain_names_'.$tld)).'">.'.$tld.'</a>'; else echo '.'.$tld; ?></td>
	<td><?php echo $info['registrar_lock']?__rp('tldi_yes', 'yes'):__rp('tldi_no', 'no')?></td>
	<td><?php echo $info['transfer']?__rp('tldi_yes', 'yes'):__rp('tldi_no', 'no')?></td>
	</tr>
	
	<?php } ?>
	
	</tbody>
</table>