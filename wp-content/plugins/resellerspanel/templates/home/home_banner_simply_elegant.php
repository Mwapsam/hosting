<div id="home-banner-1">
	<?php if($banner_plan[$plan]['type'] == 'vps'){ ?>
    <h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?></h3>
	<div id="home-banner-1-plan-features">
    <ul>
		<li><span><?php echo $banner_plan[$plan]['value']['services']['vcpu']?></span> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><span><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></span> GB RAM</li>
    	<li><span><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></span> Disk Space</li>
    </ul>
    <ul>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></span> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['services']['free_domains'])){ ?><span>FREE</span> Domain Name<?php }else{ ?><span>Unlimited</span> Domains Hosted<?php } ?></li>
        <li><span>SSH</span> Access</li>
    </ul>
    </div>
    <div class="home-banner-1-price">
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
        <div class="home-banner-play-video" data-video-src="<?php echo $video_url.$movie?>"><a href="#video1" class="inline_video">Play Video</a></div>
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
    <div class="home-banner-1-common-features">
        <div class="home-banner-1-feat1">Cloud<br />Hosting Platform</div>
        <div class="home-banner-1-feat2">Hepsia<br />Control Panel</div>
        <div class="home-banner-1-feat3">24/7<br />Support</div>
        <div class="home-banner-1-feat4">Web App<br />Installer</div>
        <div class="home-banner-1-feat5">Website<br />Installer </div>
        <div class="home-banner-1-feat6">Free Website<br />Templates</div>
    </div>
	<?php }elseif($banner_plan[$plan]['type'] == 'vps_kvm'){ ?>
    <h3 class="home-banner-title-1">VPS Hosting <?php echo $banner_plan[$plan]['value']['name'];?></h3>
	<div id="home-banner-1-plan-features">
    <ul>
		<li><span><?php echo $banner_plan[$plan]['value']['services']['vcpu']?></span> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><span><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></span> GB RAM</li>
    	<li><span><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></span> Disk Space</li>
    </ul>
    <ul>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></span> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['services']['free_domains'])){ ?><span>FREE</span> Domain Name<?php }else{ ?><span>Unlimited</span> Domains Hosted<?php } ?></li>
        <li><span>SSH</span> Access</li>
    </ul>
    </div>
    <div class="home-banner-1-price">
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
    <div class="home-banner-1-common-features">
        <div class="kvm-feat1 feat">SolusVM<br>Admin Panel</div>
        <div class="kvm-feat2 feat">Pure SSD<br>Servers</div>
        <div class="kvm-feat3 feat">Weekly<br>Server Backup</div>
        <div class="kvm-feat4 feat">24/7<br>Tech Support</div>
        <div class="kvm-feat5 feat">99.9%<br>Network Uptime</div>
        <div class="kvm-feat6 feat">No<br>Setup Fees</div>
    </div>
	<?php }elseif($banner_plan[$plan]['type'] == 'vps_openvz'){ ?>
    <h3 class="home-banner-title-1">VPS Hosting <?php echo $banner_plan[$plan]['value']['name'];?></h3>
	<div id="home-banner-1-plan-features">
    <ul>
		<li><span><?php echo $banner_plan[$plan]['value']['services']['vcpu']?></span> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><span><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></span> GB RAM</li>
    	<li><span><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></span> Disk Space</li>
    </ul>
    <ul>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></span> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['services']['free_domains'])){ ?><span>FREE</span> Domain Name<?php }else{ ?><span>Unlimited</span> Domains Hosted<?php } ?></li>
        <li><span>SSH</span> Access</li>
    </ul>
    </div>
    <div class="home-banner-1-price">
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
        <div class="home-banner-play-video" data-video-src="<?php echo $video_url.$movie?>"><a href="#video1" class="inline_video">Play Video</a></div>
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
    <div class="home-banner-1-common-features">
        <div class="home-banner-1-feat1">Cloud<br />Hosting Platform</div>
        <div class="home-banner-1-feat2">Hepsia<br />Control Panel</div>
        <div class="home-banner-1-feat3">24/7<br />Support</div>
        <div class="home-banner-1-feat4">Web App<br />Installer</div>
        <div class="home-banner-1-feat5">Website<br />Installer </div>
        <div class="home-banner-1-feat6">Free Website<br />Templates</div>
    </div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'semi_dedicated'){ ?>
    <h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> Plan</h3>
	<div id="home-banner-1-plan-features">
    <ul>
    	<li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?></span> Disk Space</li>
        <li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?></span> Traffic</li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?></span> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
    </ul>
    <ul>
        <li><span>1-Click</span> 40+ Scripts Installer</li>
        <li><span>PHP4/PHP5/PHP7</span> Support</li>
        <li><span>30 Day Free Trial </span></li>
    </ul>
    </div>
    <div class="home-banner-1-price">
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
        <div class="home-banner-play-video" data-video-src="<?php echo $video_url.$movie?>"><a href="#video1" class="inline_video">Play Video</a></div>
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
    <div class="home-banner-1-common-features">
        <div class="home-banner-1-feat1">Cloud<br />Hosting Platform</div>
        <div class="home-banner-1-feat2">Hepsia<br />Control Panel</div>
        <div class="home-banner-1-feat3">24/7<br />Support</div>
        <div class="home-banner-1-feat4">Web App<br />Installer</div>
        <div class="home-banner-1-feat5">Website<br />Installer </div>
        <div class="home-banner-1-feat6">Free Website<br />Templates</div>
    </div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'dedicated'){ ?>
    <h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> <?php echo (strlen($banner_plan[$plan]['value']['name'])>12)?'':'Dedicated';?> Plan</h3>
	<div id="home-banner-1-plan-features">
    <ul>
        <li><?php echo $banner_plan[$plan]['value']['services']['processor']?></li>
        <li><?php echo ($banner_plan[$plan]['value']['services']['ram']).' GB '.$banner_plan[$plan]['value']['services']['ram_type'].' RAM'; ?></li>
	   	<li><?php if($banner_plan[$plan]['value']['services']['hdd'] == 1) echo ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drive'; else echo $banner_plan[$plan]['value']['services']['hdd'].'x'.($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drives'; ?></li>
    </ul>
    <ul>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li><span>Full</span> Root Access</li>
        <li><?php if($banner_plan[$plan]['value']['services']['ips'] > 1) echo $banner_plan[$plan]['value']['services']['ips'].' IP Addresses'; else echo 'One IP Address'; ?></li>
    </ul>
    </div>
    <div class="home-banner-1-price">
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
        <div class="home-banner-play-video" data-video-src="<?php echo $video_url.$movie?>"><a href="#video1" class="inline_video">Play Video</a></div>
        <div class="home-banner-sign-up out-of-stock">
	  <div data-id="<?php echo $plan ?>" class="checkstock">Please wait...</div>
	  <div data-id="<?php echo $plan ?>" class="instock" style="display:none">
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
	<div data-id="<?php echo $plan;?>" class="outofstock" style="display:none">
		<span class="out-of-stock">Out of stock</span>
	</div>
        </div>
    </div>
    <div class="home-banner-1-common-features">
        <div class="home-banner-1-feat1">Cloud<br />Hosting Platform</div>
        <div class="home-banner-1-feat2">Hepsia<br />Control Panel</div>
        <div class="home-banner-1-feat3">24/7<br />Support</div>
        <div class="home-banner-1-feat4">Web App<br />Installer</div>
        <div class="home-banner-1-feat5">Website<br />Installer </div>
        <div class="home-banner-1-feat6">Free Website<br />Templates</div>
    </div>
<script>
var checkforstock = true;
</script>
    
    <?php }else{ ?>
    <h3 class="home-banner-title-1"><?php echo $banner_plan[$plan]['value']['name'];?> <?php echo (strlen($banner_plan[$plan]['value']['name'])>12)?'':'Hosting';?> Plan</h3>
	<div id="home-banner-1-plan-features">
    <ul>
    	<li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?></span> Disk Space</li>
        <li><span><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?></span> Traffic</li>
        <li><span><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?></span> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
    </ul>
    <ul>
        <li><span>1-Click</span> 40+ Scripts Installer</li>
        <li><span>PHP4/PHP5/PHP7</span> Support</li>
        <li><span>30 Day Free Trial </span></li>
    </ul>
    </div>
    <div class="home-banner-1-price">
        <span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><span class="period">/mo</span>
    </div>
    <div class="home-banner-1-buttons">
        <div class="home-banner-play-video" data-video-src="<?php echo $video_url.$movie?>"><a href="#video1" class="inline_video">Play Video</a></div>
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
    <div class="home-banner-1-common-features">
        <div class="home-banner-1-feat1">Cloud<br />Hosting Platform</div>
        <div class="home-banner-1-feat2">Hepsia<br />Control Panel</div>
        <div class="home-banner-1-feat3">24/7<br />Support</div>
        <div class="home-banner-1-feat4">Web App<br />Installer</div>
        <div class="home-banner-1-feat5">Website<br />Installer </div>
        <div class="home-banner-1-feat6">Free Website<br />Templates</div>
    </div>
    
    <?php } ?>
    <div style='display:none'><div id='video1' style='padding:10px; background:#fff;'><div data-vid="1" class="video_overlay" data-video-src="<?php echo $video_url.$movie?>"></div></div></div>
    <div class="clear"></div>
</div>