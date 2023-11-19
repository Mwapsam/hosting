<?php if(!$msg){ ?>
<style type="text/css">
.radio{
	height:18px;
	width:18px;
	border:1px dotted #CCC;	
	padding:2px;
}
</style>
<script language="javascript">
var colors = {'bgSelected':'#E5FFD9', 'bgNotSelected':'#F4F4F4', 'textChecking':'#999999', 'textRegister':'#008200', 'textTransfer':'#FF4A0B'};
var orderURL = '<?php echo $rp_signup_url; if(!$get_params_string) echo '?';?>&tld=%tld%&domain_type=%domain_type%&sld=%sld%&plan=<?php echo (int)$_POST['plan'];?>&stop_search=1';
var dext = {};
<?php 
$tlds_array = array_keys($registerDomains);
$tld_br = 0;
$i=0;
$has_promo_price = false;
$arr = array();
foreach($tlds_array as $value){
	if($value == $tld) continue;
	if($tld_br%60 == 0){
		if($tld_br){
			$i++;
		}
	}
	$arr[$i][] = $value;
	$tld_br++;
}
foreach($arr as $key=>$value){
	echo 'dext['.$key.'] = new Array("'.implode('","',$value).'");';
}
?>
var domains_no_transfer = new Array("<?php echo implode('","',$domains_no_transfer)?>");
var domains_free = new Array(<?php if($_POST['free']=='yes') echo '"'.implode('","',array_keys($domainsPromo)).'"'; ?>);
var sld = '<?php echo $sld?>';
var tld = '<?php echo $tld?>';
var fdata = new Object();
fdata.flag = <?php echo $result['result'][$tld]?>;
var lastTLD;

(function($){
	$(document).ready(function(){
		displayDomainRow(fdata, sld, tld);
		if(fdata.flag == 0 || $.inArray(tld,domains_no_transfer) == -1){
			$('#register_transfer_'+tld.replace(".", "\\.")).trigger('click');
			$('#register_transfer_'+tld.replace(".", "\\.")).click(sel_tr(tld));
		}
		$.each(dext, function(key, value) {
			getDomainResults(sld,value);
		});
	});
})(jQuery)

function displayDomainRow(data, domain, tld){
   //alert(JSON.stringify(data));
   if(data.error_msg) jQuery('#domain_text_'+tld.replace(".", "\\.")).html(data.error_msg);
   else{
	   if(data.flag==0)
	   { 
		  jQuery('#domain_text_'+tld.replace(".", "\\.")).html('Register <a href="'+orderURL.replace("%tld%", tld).replace("%sld%", domain).replace("%domain_type%", 'register')+'">'+domain+'.'+tld+'</a>');
		  jQuery('#domain_text_'+tld.replace(".", "\\.")).css({'color': colors['textRegister']});
		  jQuery('#register_transfer_'+tld.replace(".", "\\.")).css({'display': 'block'});
		  jQuery('#order_'+tld.replace(".", "\\.")).attr('domain_type', 'register');
		  if(jQuery.inArray(tld,domains_free) == -1){
			  if(jQuery('#register_price_'+tld.replace(".", "\\.")).length) {
				  jQuery('#domain_price_'+tld.replace(".", "\\.")).html(jQuery('#register_price_'+tld.replace(".", "\\.")).html());
				  jQuery('#domain_promo_'+tld.replace(".", "\\.") + ' p').show();
			  } else jQuery('#domain_price_'+tld.replace(".", "\\.")).html(jQuery('#regular_price_'+tld.replace(".", "\\.")).html());
		  }else jQuery('#domain_price_'+tld.replace(".", "\\.")).html('<span style="color:'+colors['textRegister']+'">FREE</span>');
	   }else if(data.flag==1){
		  if(jQuery.inArray(tld,domains_no_transfer) > -1)
		  {
			  jQuery('#domain_text_'+tld.replace(".", "\\.")).html('Transfer '+domain+'.'+tld+' Not Supported');
			  jQuery('#domain_text_'+tld.replace(".", "\\.")).css({'color': colors['textChecking']});
			  jQuery('#register_transfer_'+tld.replace(".", "\\.")).css({'display': 'none'});
			  jQuery('#domain_price_'+tld.replace(".", "\\.")).html('N/A');
		  }else{
			  jQuery('#domain_text_'+tld.replace(".", "\\.")).html('Transfer <a href="'+orderURL.replace("%tld%", tld).replace("%sld%", domain).replace("%domain_type%", 'transfer')+'">'+domain+'.'+tld+'</a>');
			  jQuery('#domain_text_'+tld.replace(".", "\\.")).css({'color': colors['textTransfer']});
			  jQuery('#register_transfer_'+tld.replace(".", "\\.")).css({'display': 'block'});
			  jQuery('#order_'+tld.replace(".", "\\.")).attr('domain_type', 'transfer');
			  if(jQuery.inArray(tld,domains_free) == -1){
				  if(jQuery('#transfer_price_'+tld.replace(".", "\\.")).length) {
					  jQuery('#domain_price_'+tld.replace(".", "\\.")).html(jQuery('#transfer_price_'+tld.replace(".", "\\.")).html());
					  jQuery('#domain_promo_'+tld.replace(".", "\\.") + ' p').show();
				  } else jQuery('#domain_price_'+tld.replace(".", "\\.")).html(jQuery('#regular_price_'+tld.replace(".", "\\.")).html());
			  }else jQuery('#domain_price_'+tld.replace(".", "\\.")).html('<span style="color:'+colors['textRegister']+'">FREE</span>');
		  }
	   }
   }
}

function sel_tr(tld)
{
	if(tld == lastTLD) return;
	if(lastTLD){
		jQuery('#tr_'+lastTLD.replace(".", "\\.")).css({'background-color': colors['bgNotSelected']});
		jQuery('#order_'+lastTLD.replace(".", "\\.")).css({'display': 'none'});
	}
	jQuery('#tr_'+tld.replace(".", "\\.")).css({'background-color': colors['bgSelected']});
	jQuery('#order_'+tld.replace(".", "\\.")).css({'display': 'block'});
	lastTLD = tld
}
	

function doOrder(selTLD,selType)
{
	window.location.href = orderURL.replace("%tld%", selTLD).replace("%sld%", sld).replace("%domain_type%", selType);
}
</script>
<br />
<div id="domain_results_header">
	<div id="domain_results_header_left">Domain Name</div>
    <div id="domain_results_header_right">Price</div>
</div>
<table width="626" cellpadding="5" cellspacing="1" border="0" id="domain_results_table">
	<tr id="tr_<?php echo $tld?>" height="28">
		<td width="30"><input type="radio" name="domain" id="register_transfer_<?php echo $tld?>" value="<?php echo $tld?>" domain_type="" class="radio" onclick="sel_tr('<?php echo $tld?>')" /></td>
		<td id="domain_text_<?php echo $tld?>" style="color:#999999">Checking <?php echo $sld?>.<?php echo $tld?></td>
<?php /*
		<td id="domain_promo_<?php echo $tld?>">
<?php if (!empty($registerDomains[$tld]['prices_register']) || !empty($registerDomains[$tld]['prices_transfer'])) { ?>
			<p style="line-height:12px; text-align: right; display:none"><small>* the price is valid for<br> 1-year registrations only</small></p>
<?php } else 
		echo '&nbsp;';
?>
		</td>
 */ ?>
		<td width="80" id="domain_price_<?php echo $tld?>" align="right"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt=" " />
		<span id="regular_price_<?php echo $tld?>" style="display:none"><?php echo sprintf($registerDomains[$tld]['currency_symbol'],$registerDomains[$tld]['prices']['period_'.(12*$domains_info[$tld]['years'][0])][$registerDomains[$tld]['store_currency']])?></span>
		<?php if(!empty($registerDomains[$tld]['prices_register'])){ $has_promo_price = true; ?><span id="register_price_<?php echo $tld?>" style="display:none"><strong><?php echo sprintf($registerDomains[$tld]['currency_symbol'],$registerDomains[$tld]['prices_register']['period_'.(12*$domains_info[$tld]['years'][0])][$registerDomains[$tld]['store_currency']])?>*</strong><br><small style="text-decoration:line-through;"><?php echo sprintf($registerDomains[$tld]['currency_symbol'],$registerDomains[$tld]['prices']['period_'.(12*$domains_info[$tld]['years'][0])][$registerDomains[$tld]['store_currency']])?></small></span>
<?php } ?>
		<?php if(!empty($registerDomains[$tld]['prices_transfer'])){ $has_promo_price = true; ?><span id="transfer_price_<?php echo $tld?>" style="display:none"><strong><?php echo sprintf($registerDomains[$tld]['currency_symbol'],$registerDomains[$tld]['prices_transfer']['period_'.(12*$domains_info[$tld]['years'][0])][$registerDomains[$tld]['store_currency']])?>*</strong><br><small style="text-decoration:line-through;"><?php echo sprintf($registerDomains[$tld]['currency_symbol'],$registerDomains[$tld]['prices']['period_'.(12*$domains_info[$tld]['years'][0])][$registerDomains[$tld]['store_currency']])?></small></span><?php } ?>
		</td>
		<td width="80"><input type="button" id="order_<?php echo $tld?>" value="Checkout" style="display:none" domain_type="" onclick='doOrder("<?php echo $tld?>",jQuery(this).attr("domain_type"))' /></td>
	</tr>
	<?php foreach($domains_info as $key=>$value){
		if($key == $tld)
			continue;
		if(empty($registerDomains[$key]))
			continue;
	?>
	<tr id="tr_<?php echo $key?>" style="background-color:#F4F4F4" height="28">
		<td><input type="radio" name="domain" id="register_transfer_<?php echo $key?>" value="<?php echo $key?>" domain_type="" class="radio" onclick="sel_tr('<?php echo $key?>')" /></td>
		<td id="domain_text_<?php echo $key?>" style="color:#999999">Checking <?php echo $sld?>.<?php echo $key?></td>
<?php /*
		<td id="domain_promo_<?php echo $key?>">
<?php if (!empty($registerDomains[$key]['prices_register']) || !empty($registerDomains[$key]['prices_transfer'])) { ?>
			<p style="line-height:12px; text-align: right; display:none;"><small>* the price is valid for<br> 1-year registrations only</small></p>
<?php } else 
		echo '&nbsp;';
?>
		</td>
 */ ?>
		<td id="domain_price_<?php echo $key?>" align="right"><img src="<?php bloginfo('template_directory'); ?>/images/ajax-loader.gif" alt=" " />
		<span id="regular_price_<?php echo $key?>" style="display:none"><?php echo sprintf($registerDomains[$key]['currency_symbol'],$registerDomains[$key]['prices']['period_'.(12*$domains_info[$key]['years'][0])][$registerDomains[$key]['store_currency']])?></span>
		<?php if(!empty($registerDomains[$key]['prices_register'])){ $has_promo_price = true; ?><span id="register_price_<?php echo $key?>" style="display:none"><strong><?php echo sprintf($registerDomains[$key]['currency_symbol'],$registerDomains[$key]['prices_register']['period_'.(12*$domains_info[$key]['years'][0])][$registerDomains[$key]['store_currency']])?>*</strong><br><small style="text-decoration:line-through;"><?php echo sprintf($registerDomains[$key]['currency_symbol'],$registerDomains[$key]['prices']['period_'.(12*$domains_info[$key]['years'][0])][$registerDomains[$key]['store_currency']])?></small></span><?php } ?>
		<?php if(!empty($registerDomains[$key]['prices_transfer'])){ $has_promo_price = true; ?><span id="transfer_price_<?php echo $key?>" style="display:none"><strong><?php echo sprintf($registerDomains[$key]['currency_symbol'],$registerDomains[$key]['prices_transfer']['period_'.(12*$domains_info[$key]['years'][0])][$registerDomains[$key]['store_currency']])?>*</strong><br><small style="text-decoration:line-through;"><?php echo sprintf($registerDomains[$key]['currency_symbol'],$registerDomains[$key]['prices']['period_'.(12*$domains_info[$key]['years'][0])][$registerDomains[$key]['store_currency']])?></small></span><?php } ?>
		</td>
		<td><input type="button" id="order_<?php echo $key?>" value="Checkout" style="display:none" domain_type="" onclick='doOrder("<?php echo $key?>",jQuery(this).attr("domain_type"))' /></td>
	</tr>
	<?php } ?>
</table>
<?php if ($has_promo_price) { ?>
<p>* the price is valid for 1-year registrations only</p>
<?php } ?>
<?php }else echo $msg; ?>
