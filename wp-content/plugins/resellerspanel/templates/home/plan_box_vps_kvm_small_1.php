<div id="shared-box"<?php echo $floating;?>><div id="box-price">
    <?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
        $promo = rp_store_promos($plan['rp_product_id']);
    ?>
                <span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo $promo['price_promo']; ?></span> <span>/mo*</span>
                <div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
    <?php } else { ?>
                <span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="box-price-period">/mo</span><br />
    <?php } ?>
</div>
        <div id="box-title"><h2><?php echo $plan['name'];?> <span class="box-sub-title">Plan</span></h2></div>
<div id="box-content">
            <ul>
                <li><strong><?php echo $plan['services']['vcpu']?></strong> CPU Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
                <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
                <li><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Data Storage</li>
                <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
            </ul><div class="clear"></div>
            <div id="box-bottom"><div class="plan-details-link"><a href="<?php echo $plan['page_url'];?>">View Plan Details</a></div>
<?php if (!isset($plan['stock']) || $plan['stock'] > 0) { ?>
            <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button class="rpwp-button colorize"><span class="gloss"></span>buy now</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
	</form>
<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
				<div class="promo-period-text">* valid for the first <?=$promo['period_promo']?> month(s)</div>
	<?php } ?>
<?php } else { ?>
						<span class="out-of-stock">Out of stock</span>
<?php } ?>
					</div>
        </div>
    </div>

