<div class="article2-text-plan-area">
    <?php foreach($rp_plans as $key=>$plan) : ?>
        <div class="article1-plan-box<?php if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' article-plan-best'; }?>">
            <div class="article1-plan-title"><span><?php echo $plan['name'];?></span></div>
            <div class="article1-plan-features"><strong><?php echo $plan['services']['processor']?> CPU</strong><br><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM<br><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Storage</div>
            <div class="article1-plan-price"><span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> / month</div>
            <div class="article1-plan-order">
            <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
			<center><button type="submit" class="rpwp-button colorize"><span class="gloss"></span>order now</button></center>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
            </form>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="clean">&nbsp;</div>  
</div>