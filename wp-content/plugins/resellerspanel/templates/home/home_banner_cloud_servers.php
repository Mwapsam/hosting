<div id="home-banner-1">
	<?php if($banner_plan[$plan]['type'] == 'vps'){ ?>
    <h2 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?></h2>
	<div id="home-banner-1-plan-features">
    <ul>
        <li><span><?php echo $banner_plan[$plan]['value']['services']['processor']?></span> CPU</li>
        <li><span><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></span> GB RAM</li>
    	<li><span><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></span> Disk Space</li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></span> Traffic</li>
        <li><span>Multiple</span> OS Choices</li>
    </ul>
    </div>
    <div class="home-banner-1-price">
        <span class="period">Monthly price</span><br />
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><span class="period">/mo</span>
    <?php } ?>
    </div>
    <div class="home-banner-1-buttons">
        <div class="home-banner-sign-up">
        <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
            <?php if (isset($button) && $button): echo $button; else: ?>
            <button class="rpwp-button2 colorize" type="submit"><span class="gloss"></span>SIGN UP</button>
            <?php endif;?>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan;?>" />
        </form>
        </div>
    </div>
<?php } else if ($banner_plan[$plan]['type'] == 'vps_kvm') { ?>
    <h2 class="home-banner-title-1">VPS Hosting <?php echo $banner_plan[$plan]['value']['name'];?></h2>
	<div id="home-banner-1-plan-features">
    <ul>
		<li><span><?php echo $banner_plan[$plan]['value']['services']['vcpu']?></span> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><span><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></span> GB RAM</li>
    	<li><span><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></span> Disk Space</li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></span> Traffic</li>
        <li><span>Multiple</span> OS Choices</li>
    </ul>
    </div>
    <div class="home-banner-1-price">
        <span class="period">Monthly price</span><br />
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><span class="period">/mo</span>
    <?php } ?>
    </div>
    <div class="home-banner-1-buttons">
        <div class="home-banner-sign-up">
        <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
            <?php if (isset($button) && $button): echo $button; else: ?>
            <button class="rpwp-button2 colorize" type="submit"><span class="gloss"></span>SIGN UP</button>
            <?php endif;?>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan;?>" />
        </form>
        </div>
    </div>
	<?php }elseif($banner_plan[$plan]['type'] == 'vps_openvz'){ ?>
    <h2 class="home-banner-title-1">VPS Hosting <?php echo $banner_plan[$plan]['value']['name'];?></h2>
	<div id="home-banner-1-plan-features">
    <ul>
		<li><span><?php echo $banner_plan[$plan]['value']['services']['vcpu']?></span> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><span><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></span> GB RAM</li>
    	<li><span><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></span> Disk Space</li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></span> Traffic</li>
        <li><span>Multiple</span> OS Choices</li>
    </ul>
    </div>
    <div class="home-banner-1-price">
        <span class="period">Monthly price</span><br />
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><span class="period">/mo</span>
    <?php } ?>
    </div>
    <div class="home-banner-1-buttons">
        <div class="home-banner-sign-up">
        <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
            <?php if (isset($button) && $button): echo $button; else: ?>
            <button class="rpwp-button2 colorize" type="submit"><span class="gloss"></span>SIGN UP</button>
            <?php endif;?>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan;?>" />
        </form>
        </div>
    </div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'semi_dedicated'){ ?>
    <h2 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> Plan</h2>
	<div id="home-banner-1-plan-features">
    <ul>
    	<li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?></span> Disk Space</li>
        <li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?></span> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?><span>FREE</span> Domain Name<?php }else{ ?><span>Multi-lingual</span> Control Panel<?php } ?></li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?></span> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['mailbox'] >= 999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['mailbox']) ?></span> Email <?php echo ($banner_plan[$plan]['value']['services']['mailbox']>1)?'Accounts':'Account';?></li>
        <li><span>30 Day Free Trial</span></li>
    </ul>
    </div>
    <div class="home-banner-1-price">
        <span class="period">Monthly price</span><br />
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><span class="period">/mo</span>
    <?php } ?>
    </div>
    <div class="home-banner-1-buttons">
        <div class="home-banner-sign-up">
        <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
            <?php if (isset($button) && $button): echo $button; else: ?>
            <button class="rpwp-button2 colorize" type="submit"><span class="gloss"></span>SIGN UP</button>
            <?php endif;?>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan;?>" />
        </form>
        </div>
    </div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'dedicated'){ ?>
    <h2 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> <?php echo (strlen($banner_plan[$plan]['value']['name'])>12)?'':'Dedicated';?> Plan</h2>
	<div id="home-banner-1-plan-features">
    <ul>
        <li><?php echo $banner_plan[$plan]['value']['services']['processor']?></li>
        <li><?php echo ($banner_plan[$plan]['value']['services']['ram']).' GB '.$banner_plan[$plan]['value']['services']['ram_type'].' RAM'; ?></li>
	   	<li><?php if($banner_plan[$plan]['value']['services']['hdd'] == 1) echo ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drive'; else echo $banner_plan[$plan]['value']['services']['hdd'].'x'.($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drives'; ?></li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li><?php if($banner_plan[$plan]['value']['services']['ips'] > 1) echo $banner_plan[$plan]['value']['services']['ips'].' IP Addresses'; else echo 'One IP Address'; ?></li>
    </ul>
    </div>
    <div class="home-banner-1-price">
        <span class="period">Monthly price</span><br />
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><span class="period">/mo</span>
    <?php } ?>
    </div>
    <div class="home-banner-1-buttons">
	  <div data-id="<?php echo $plan ?>" class="checkstock">Please wait...</div>
	  <div data-id="<?php echo $plan ?>" class="instock" style="display:none">
        <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
	        <div class="home-banner-sign-up">

            <?php if (isset($button) && $button): echo $button; else: ?>
            <button class="rpwp-button2 colorize" type="submit"><span class="gloss"></span>SIGN UP</button>
            <?php endif;?>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan;?>" />

			</div>
	</form>
	  </div>
		<div data-id="<?php echo $plan;?>" class="outofstock" style="display:none">
			<span class="out-of-stock">Out of stock</span>
		</div>
</div>
<script>
var checkforstock = true;
</script>
    
    <?php }else{ ?>
    <h2 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> <?php echo (strlen($banner_plan[$plan]['value']['name'])>12)?'':'Hosting';?> Plan</h2>
	<div id="home-banner-1-plan-features">
    <ul>
    	<li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?></span> Disk Space</li>
        <li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?></span> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?><span>FREE</span> Domain Name<?php }else{ ?><span>Multi-lingual</span> Control Panel<?php } ?></li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?></span> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['mailbox'] >= 999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['mailbox']) ?></span> Email <?php echo ($banner_plan[$plan]['value']['services']['mailbox']>1)?'Accounts':'Account';?></li>
        <li><span>30 Day Free Trial</span></li>
    </ul>
    </div>
    <div class="home-banner-1-price">
        <span class="period">Monthly price</span><br />
        <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span>
    </div>
    <div class="home-banner-1-buttons">
        <div class="home-banner-sign-up">
        <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
            <?php if (isset($button) && $button): echo $button; else: ?>
            <button class="rpwp-button2 colorize" type="submit"><span class="gloss"></span>SIGN UP</button>
            <?php endif;?>
            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
            <?php endforeach; endif;?>
            <input name="plan" type="hidden" value="<?php echo $plan;?>" />
        </form>
        </div>
    </div>   
    
    <?php } ?>
    <div class="clear"></div>
</div>