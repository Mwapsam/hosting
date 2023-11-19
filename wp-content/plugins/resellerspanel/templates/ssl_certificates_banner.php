<div id="script-banner">
	<div id="script-banner-plan-features">
		<h1 class="script-banner-title">SSL Certificates</h1>
<?php if ($features_version == 2) { ?>
		<ul>
			<li>Affordable Certificate Prices</li>
			<li>2048-Bit Keys &amp; 256-Bit Encryption</li>
			<li>Strong Authentication Warranty</li>
			<li>Free Re-Issue &amp; MBG</li>
		</ul>
<?php } else if ($features_version == 3) { ?>
		<ul>
			<li>Affordable Prices</li>
			<li>256-Bit Encryption</li>
			<li>Strong Authentication</li>
			<li>A Free Re-Issue</li>
		</ul>
<?php } else { ?>
		<ul>
			<li>Low Prices</li>
			<li>Strong Encryption for Your SSL</li>
			<li>A Strong Authentication Warranty</li>
			<li>Free Re-Issue &amp; MBG</li>
		</ul>
<?php } ?>
		<div class="script-banner-price">
<?php /*
			<span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span>
						<span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span>
						 */
?>
			<span class="currency"><?php echo _rp_get_currency_symbol($banner_plan['store_currency'])?></span>
			<span class="price-value"><?php echo sprintf('%0.2f', $banner_plan['prices']['period_12'][$banner_plan['store_currency']])?></span>
			<br>
			<span class="period">per year</span>
			<br><br>
			<form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
				<button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
				<?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
				<input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
				<?php endforeach; endif;?>
				<input name="ssl" type="hidden" value="<?php echo $banner_plan['rp_product_id'];?>" />
			</form>
		</div>
	</div>
	<div id="script-banner-img">
		<?php echo do_shortcode('[webp img="ssl-certificates.png" title="SSL Certificates" width="400" height="245"]');?>
	</div>
</div>
