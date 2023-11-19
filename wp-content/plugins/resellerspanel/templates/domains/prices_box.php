<h3>.<?php echo strtoupper($tld)?> Specification</h3>
    <strong>Registration period:</strong> <?php echo ($GLOBALS['rp_info']['domains_info'][$tld]['years'][0]==1)?'1 year':$GLOBALS['rp_info']['domains_info'][$tld]['years'][0].' years'?><br />
	<strong>Transfer option:</strong> <?php echo ($GLOBALS['rp_info']['domains_info'][$tld]['transfer'])?'Yes':'No'?><br />
	<strong>Edit WHOIS:</strong> <?php echo ($GLOBALS['rp_info']['domains_info'][$tld]['whois'])?'Yes':'No'?><br />
	<strong>ID Protection:</strong> <?php echo ($GLOBALS['rp_info']['domains_info'][$tld]['id_protect'])?'Yes':'No'?><br />
	<br />
   <div id="sidebar_accordion">
	<h4>.<?php echo strtoupper($tld)?> Pricing</h4>
    <table width="100%" border="0" cellspacing="0" cellpadding="7" id="domain_years_short_<?php echo $tld?>">
    <?php 
	$br=0;
	foreach($GLOBALS['rp_info']['domains_info'][$tld]['years'] as $years){if($br==3) break; $br++; ?>
      <tr style="background:<?php echo ($br%2==0)?'#F1F1F1':'#FFF'?>;">
        <td class="year"><?php echo ($years==1)?'1 year':$years.' years'?></td>
        <td class="price" align="right"><span class="tld-price-currency"><?php echo _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']);?></span><?php echo sprintf('%0.2f',get_domain_price($tld,$years*12)); ?></td>
      </tr>
   <?php } ?>
    </table>
    <?php if(count($GLOBALS['rp_info']['domains_info'][$tld]['years'])>3){ ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="7" id="domain_years_long_<?php echo $tld?>" style="display:none">
    <?php 
	$br=0;
	foreach($GLOBALS['rp_info']['domains_info'][$tld]['years'] as $years){$br++; ?>
      <tr style="background:<?php echo ($br%2==0)?'#F1F1F1':'#FFF'?>;">
        <td class="year"><?php echo ($years==1)?'1 year':$years.' years'?></td>
        <td class="price" align="right"><span class="tld-price-currency"><?php echo _rp_get_currency_symbol($GLOBALS['rp_info']['store_currency']);?></span><?php echo sprintf('%0.2f',get_domain_price($tld,$years*12)); ?></td>
      </tr>
   <?php } ?>
    </table>
    <p align="center"><a href="#" tld="<?php echo $tld;?>" rel="expand_domain_years">View All Prices</a></p>
    <p align="center"><a href="#" tld="<?php echo $tld;?>" rel="collapse_domain_years" style="display:none">Collapse Prices</a></p>
    <?php } ?>
    </div> 
<script>
jQuery(document).ready(function($) {
	$(function(){
		// Expand / Collapse
		$('a[rel=expand_domain_years]').click(function() {
			$('#domain_years_short_'+$(this).attr('tld').replace(".", "\\.")).hide();
			$('#domain_years_long_'+$(this).attr('tld').replace(".", "\\.")).show('blind', {}, 500);
			$(this).hide();
			$('[rel=collapse_domain_years][tld='+$(this).attr('tld').replace(".", "\\.")+']').show();
			return false;
		});
		$('a[rel=collapse_domain_years]').click(function() {
			$('#domain_years_short_'+$(this).attr('tld').replace(".", "\\.")).show();
			$('#domain_years_long_'+$(this).attr('tld').replace(".", "\\.")).hide();
			$(this).hide();
			$('[rel=expand_domain_years][tld='+$(this).attr('tld').replace(".", "\\.")+']').show();
			return false;
		});
		
		
	})
});
</script>