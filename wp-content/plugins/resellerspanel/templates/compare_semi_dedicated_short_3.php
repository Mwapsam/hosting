<div class="article2-text-plan-area">
    <?php foreach($rp_plans as $key=>$plan) : ?>
        <div class="article1-plan-box<?php if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' article-plan-best'; }?>">
            <div class="article1-plan-title"><span><?php echo $plan['name'];?></span></div>
            <div class="article1-plan-features"><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> storage<br><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> bandwidth<br> <?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>website hosted<?php }else{ ?>websites hosted<?php } ?><br><strong>30-Day Free Trial</strong></div>
			<div class="article1-plan-price">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
				<span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo $promo['price_promo']; ?>*</span> /mo
				<div class="old-price">
					<?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo
				</div>
	<?php } else { ?>
				<span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> / month
	<?php } ?>
			</div>
            <div class="article1-plan-order">
            <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
			<center><button type="submit" class="rpwp-button colorize"><span class="gloss"></span>order now</button></center>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
            </form>
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
			<div class="promo-period-text">* valid for the first <?=$promo['period_promo']?> month(s)</small></div>
	<?php } ?>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="clean">&nbsp;</div>  
</div>