<div id="domain-tld-banner-2">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <td width="370" align="center">Get a unique<br />
          <span class="tld">.<?php echo $tld?></span><br />
          Domain Name</td>
        <td width="140" align="center" class="arrow"></td>
        <td width="400" align="center">
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <?php if($domain['prices']['period_'.$GLOBALS['rp_info']['domains_info'][$tld]['years'][0]*12][$domain['store_currency']]==0){?>
                  <tr>
                    <td>&nbsp;</td>
                    <td class="free-domain">FREE</td>
                    <td class="domain-tld-banner-text">with <br />
                      hosting plan</td>
                  </tr>
                  <tr>
                    <td height="70" colspan="3" align="center" class="or-color">or</td>
                    </tr>
                  <?php } ?>
<?php
$has_promo_price = false;
$_ast = '';

if (!empty($GLOBALS['rp_info']['registerdomain_prices'][$tld]['prices_register'])) {
	$has_promo_price = true;
	$_ast = '*';
}
?>
                  <tr>
                    <td class="domain-currency"><?php echo _rp_get_currency_symbol($domain['store_currency']);?></td>
                    <td class="domain-price"><?php echo sprintf("%0.2f{$_ast}", get_domain_price($tld)); ?></td>
                    <td class="domain-tld-banner-text"><?php if($GLOBALS['rp_info']['domains_info'][$tld]['years'][0]>1){?>per <?php echo $GLOBALS['rp_info']['domains_info'][$tld]['years'][0];?> years<?php }else{?>per year<?php }?><br />
                      domain only</td>
                  </tr>
				<tr>
					<td colspan="3">
<?php if ($has_promo_price) { ?>
	<small style="font-size:30%">* the price is valid for 1-year registrations only</small>
<?php } ?>
					</td>
				</tr>
                </table>
          </td>
      </tr>
    </table>
    <br clear="all" />
</div>