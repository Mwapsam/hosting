<div id="shared-box" <?php echo $floating;?>><div id="box-price">
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
                <li><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> Data Storage</li>
                <li><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> Data Transfer</li>
                <li><?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
                <?/*<li><?php echo (($plan['services']['mailbox'] >= 999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['mailbox'].'</strong>') ?> Email <?php echo ($plan['services']['mailbox']>1)?'Accounts':'Account';?></li>*/?>
                <li><strong>30-Day Free Trial</strong></li>
            </ul><div class="clear"></div>
            <div id="box-bottom"><div class="plan-details-link"><a href="<?php echo $plan['page_url'];?>">View Plan Details</a></div>
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
	<?php } ?></div>
        </div>
    </div>