<div id="home-banner-1">
	<?php if($banner_plan[$plan]['type'] == 'vps'){ ?>
	<div id="home-banner-1-plan-features"><h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?></h3>
    <ul>
        <li><?php echo $banner_plan[$plan]['value']['services']['processor']?> CPU</li>
        <li><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?> GB RAM</li>
    	<li><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?> Disk Space</li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li>Multiple OS Choices</li>
    </ul><div class="home-banner-1-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">/mo</span><br /><br />
    <?php } ?>
 
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button class="rpwp-button colorize" type="submit"><span class="gloss"></span>order now</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
<?php } else if ($banner_plan[$plan]['type'] == 'vps_kvm') { ?>
	<div id="home-banner-1-plan-features"><h3 class="home-banner-title-1">VPS Hosting <?php echo $banner_plan[$plan]['value']['name'];?></h3>
    <ul>
		<li><?php echo $banner_plan[$plan]['value']['services']['vcpu']?> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?> GB RAM</li>
    	<li><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?> Disk Space</li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li>Multiple OS Choices</li>
    </ul><div class="home-banner-1-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">/mo</span><br /><br />
    <?php } ?>

    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button class="rpwp-button colorize" type="submit"><span class="gloss"></span>order now</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'vps_openvz'){ ?>
	<div id="home-banner-1-plan-features"><h3 class="home-banner-title-1">VPS Hosting <?php echo $banner_plan[$plan]['value']['name'];?></h3>
    <ul>
		<li><?php echo $banner_plan[$plan]['value']['services']['vcpu']?> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?> GB RAM</li>
    	<li><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?> Disk Space</li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li>Multiple OS Choices</li>
    </ul><div class="home-banner-1-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">/mo</span><br /><br />
    <?php } ?>

    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button class="rpwp-button colorize" type="submit"><span class="gloss"></span>order now</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'semi_dedicated'){ ?>
	<div id="home-banner-1-plan-features"><h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> Plan</h3>
    <ul>
    	<li><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?> Disk Space</li>
        <li><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Multi-lingual Control Panel<?php } ?></li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
        <li>30 Day Free Trial</li>
    </ul><div class="home-banner-1-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">/mo</span><br /><br />
    <?php } ?>

    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button class="rpwp-button colorize" type="submit"><span class="gloss"></span>order now</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form>
</div></div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'dedicated'){ ?>
	<div id="home-banner-1-plan-features"><h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> <?php echo (strlen($banner_plan[$plan]['value']['name'])>12)?'':'Dedicated';?> Plan</h3>
    <ul>
        <li><small><?php echo $banner_plan[$plan]['value']['services']['processor']?></small></li>
        <li><?php echo ($banner_plan[$plan]['value']['services']['ram']).' GB '.$banner_plan[$plan]['value']['services']['ram_type'].' RAM'; ?></li>
	   	<li><?php if($banner_plan[$plan]['value']['services']['hdd'] == 1) echo ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drive'; else echo $banner_plan[$plan]['value']['services']['hdd'].'x'.($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drives'; ?></li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li><?php if($banner_plan[$plan]['value']['services']['ips'] > 1) echo $banner_plan[$plan]['value']['services']['ips'].' IP Addresses'; else echo 'One IP Address'; ?></li>
    </ul><div class="home-banner-1-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo $promo['price_promo']; ?></span> <span class="period">/mo*</span>
                
                <div class="promo-period-text">* for <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">/mo</span><br /><br />
    <?php } ?>

	  <div data-id="<?php echo $plan ?>" class="checkstock">Please wait...</div>
	  <div data-id="<?php echo $plan ?>" class="instock" style="display:none">
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button class="rpwp-button colorize" type="submit"><span class="gloss"></span>order now</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form>
	  </div>
		<div data-id="<?php echo $plan;?>" class="outofstock" style="display:none">
			<span class="out-of-stock">Out of stock</span>
		</div>
</div></div>
<script>
var checkforstock = true;
</script>
    
    <?php }else{ ?>
	<div id="home-banner-1-plan-features"><h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> <?php echo (strlen($banner_plan[$plan]['value']['name'])>12)?'':'Hosting';?> Plan</h3>
    <ul>
    	<li><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?> Disk Space</li>
        <li><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Multi-lingual Control Panel<?php } ?></li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
        <li>30 Day Free Trial</li>
    </ul><div class="home-banner-1-price"><span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">per month</span><br /><br />
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button class="rpwp-button colorize" type="submit"><span class="gloss"></span>order now</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>    
    
    <?php } ?>
<?php if ($banner_plan[$plan]['type'] != 'vps_kvm') { ?>
    <div id="home-banner-1-video"><div id="fvideo1" style="width:380px; height:217px; cursor:pointer; background-image:url(<?php bloginfo('template_directory'); ?>/images/video.png);" data-video-src="<?php echo $video_url.$movie?>">&nbsp;</div></div><br clear="all" />
<?php } else { ?>
	<div class="novideo hide-for-small">
		<?php echo do_shortcode('[webp img="kvm-banner-img.png" title="KVM VPS"]');?>
	</div>
<?php } ?>
</div>