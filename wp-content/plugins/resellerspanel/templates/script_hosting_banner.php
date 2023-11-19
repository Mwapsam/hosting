<div id="script-banner">
	<?php if($banner_plan[$plan]['type'] == 'vps'){ ?>
	<div id="script-banner-plan-features"><h1 class="script-banner-title"><?php echo $type_label;?> Hosting Plan</h1>
    <ul>
        <li><?php echo $banner_plan[$plan]['value']['services']['vcpu']?> Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?> GB RAM</li>
    	<li><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?> Disk Space</li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li>Unlimited Domains Hosted</li>
    </ul><div class="script-banner-price"><span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">per month</span><br /><br />
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
		<button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'vps_openvz'){ ?>
	<div id="script-banner-plan-features"><h3 class="script-banner-title"><?php echo $type_label;?> Hosting Plan</h3>
    <ul>
        <li><?php echo $banner_plan[$plan]['value']['services']['vcpu']?> Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?> GB RAM</li>
    	<li><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?> Disk Space</li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li>Unlimited Domains Hosted</li>
    </ul><div class="script-banner-price"><span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">per month</span><br /><br />
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
		<button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'vps_kvm'){ ?>
	<div id="script-banner-plan-features"><h3 class="script-banner-title"><?php echo $type_label;?> Hosting Plan</h3>
    <ul>
        <li><?php echo $banner_plan[$plan]['value']['services']['vcpu']?> Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
        <li><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?> GB RAM</li>
    	<li><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?> Disk Space</li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li>Unlimited Domains Hosted</li>
    </ul><div class="script-banner-price"><span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">per month</span><br /><br />
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
		<button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'semi_dedicated'){ ?>
	<div id="script-banner-plan-features"><h3 class="script-banner-title"><?php echo $type_label;?> Hosting Plan</h3>
    <ul>
    	<li><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?> Disk Space</li>
        <li><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Multi-lingual Control Panel<?php } ?></li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
        <li>30-Day Free Trial</li>
    </ul><div class="script-banner-price"><span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">per month</span><br /><br />
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
		<button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'dedicated'){ ?>
	<div id="script-banner-plan-features"><h3 class="script-banner-title"><?php echo $type_label;?> Hosting Plan</h3>
    <ul>
        <li><?php echo $banner_plan[$plan]['value']['services']['processor']?></li>
        <li><?php echo ($banner_plan[$plan]['value']['services']['ram']).' GB '.$banner_plan[$plan]['value']['services']['ram_type'].' RAM'; ?></li>
	   	<li><?php if($banner_plan[$plan]['value']['services']['hdd'] == 1) echo ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drive'; else echo $banner_plan[$plan]['value']['services']['hdd'].'x'.($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB '.$banner_plan[$plan]['value']['services']['hdd_type'].' Hard Drives'; ?></li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?> Traffic</li>
        <li><?php if($banner_plan[$plan]['value']['services']['ips'] > 1) echo $banner_plan[$plan]['value']['services']['ips'].' IP Addresses'; else echo 'One IP Address'; ?></li>
    </ul><div class="script-banner-price"><span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">per month</span><br /><br />
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
		<button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>
    
    <?php }else{ ?>
	<div id="script-banner-plan-features"><h3 class="script-banner-title"><?php echo $type_label;?> Hosting Plan</h3>
    <ul>
    	<li><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?> Disk Space</li>
        <li><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?> Traffic</li>
        <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Multi-lingual Control Panel<?php } ?></li>
        <li><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? 'Unlimited' : $banner_plan[$plan]['value']['services']['domain']) ?> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
        <li>30-Day Free Trial</li>
    </ul><div class="script-banner-price"><span class="currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span><br /><span class="period">per month</span><br /><br />
    <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
		<button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form></div></div>    
    
    <?php } ?>
	<div id="script-banner-img">
		<?php echo do_shortcode('[webp img="script-hosting/'.$type.'.png" title="'.$type_label.' Hosting Plan" width="400" height="245"]');?>
	</div>
 </div>