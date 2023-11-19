  <div id="domain-tld-banner">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td width="380" align="center">Get a unique<br />
          <span class="tld">.<?php echo $tld?></span><br />
          Domain Name</td>
        <td width="140" align="center" class="arrow"></td>
        <td width="380" align="center">
        <?php if($domain['prices']['period_'.$GLOBALS['rp_info']['domains_info'][$tld]['years'][0]*12][$domain['store_currency']]==0){?>
        	<span class="price-value">FREE</span><br /> with hosting plan
		<?php }else{?>
<?php
$has_promo_price = false;
$_ast = '';

if (!empty($GLOBALS['rp_info']['registerdomain_prices'][$tld]['prices_register'])) {
	$has_promo_price = true;
	$_ast = '*';
}
?>
        	only<br />
        	<span class="currency"><?php echo _rp_get_currency_symbol($domain['store_currency']);?></span><span class="price-value" style="font-size:100px; line-height:120px;"><?php echo sprintf("%0.2f{$_ast}", get_domain_price($tld)); ?></span>
          <br />
          <?php if($GLOBALS['rp_info']['domains_info'][$tld]['years'][0]>1){?>per <?php echo $GLOBALS['rp_info']['domains_info'][$tld]['years'][0];?> years<?php }else{?>per year<?php }?> 
<?php if ($has_promo_price) { ?>
	<br>
	<small style="font-size:40%">* the price is valid for 1-year registrations only</small>
<?php } ?>
		<?php }?>
          </td>
      </tr>
    </table>
    <br clear="all" />
  </div>