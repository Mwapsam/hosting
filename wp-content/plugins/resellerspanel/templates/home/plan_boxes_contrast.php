<div id="front_page_content-plan-area">
<?php
$box_classes = array('first','second','third');
$cnt_plans = count($index_plans);
if($cnt_plans == 6 or $cnt_plans == 5 or $cnt_plans == 3){
	$br=0;
	foreach($index_plans as $single_plan){
		if($br == 3){
			$br = 0;
			echo '</div><br /><div id="front_page_content-plan-area">';
		}
		$plan = $single_plan['value'];
		$plan['page_url'] = $single_plan['page_url'];
		?>
                <div id="shared-box-small" class="<?php echo $box_classes[$br];?>">
					<div id="box-title"><h4><a href="<?php echo $plan['page_url'];?>"><?php echo $plan['name'];?></a></h4></div>
					<div id="box-price">
							<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
				<span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo $promo['price_promo']; ?></span> <span>/mo*</span>
				<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
				<span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="box-price-period">/mo</span><br />
	<?php } ?>
					</div>
					<div id="box-content">
                        <?php if($single_plan['type'] == 'shared' or $single_plan['type'] == 'semi_dedicated'){ ?>
						<ul>
							<li><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> Data Storage</li>
							<li><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> Data Transfer</li>
							<li><?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
							<li><?php echo (($plan['services']['mailbox'] >= 999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['mailbox'].'</strong>') ?> Email <?php echo ($plan['services']['mailbox']>1)?'Accounts':'Account';?></li>
							<li><strong>30 Day Free Trial</strong></li>
						</ul>
                        <?php }elseif($single_plan['type'] == 'dedicated'){ ?>
						<ul>
							<li><strong><?php echo $plan['services']['processor']?></strong></li>
                            <li><strong><?php echo ($plan['services']['ram']).' GB '.$plan['services']['ram_type']; ?></strong> RAM</li>
                            <li><?php if($plan['services']['hdd'] == 1) echo '<strong>'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drive'; else echo '<strong>'.$plan['services']['hdd'].'x'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drives'; ?></li>
                            <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
						</ul>
                        <?php }elseif($single_plan['type'] == 'vps' or $single_plan['type'] == 'vps_openvz' or $single_plan['type'] == 'vps_kvm'){ ?>
						<ul>
							<li><strong><?php echo $plan['services']['vcpu']?></strong> CPU Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
                            <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
                            <li><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Data Storage</li>
                            <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
						</ul>
                        <?php } ?>
					</div>
					<div id="box-form">
<?php if ($plan['type'] == 'dedicated') { ?>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="checkstock">Please wait...</div>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="instock" style="display:none">
<?php } ?>
						<form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
							<?php if (isset($button) && $button): echo $button; else: ?>
                            <button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
                            <?php endif;?>
                            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
                            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
                            <?php endforeach; endif;?>
                            <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
                        </form>
<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
				<div class="promo-period-text">* valid for<?php if ($plan['type'] != 'dedicated') { ?> the first<?php } ?> <?=$promo['period_promo']?> month(s)</div>
	<?php } ?>
<?php if ($plan['type'] == 'dedicated') { ?>
	</div>
	<div data-id="<?php echo $plan['rp_product_id'];?>" class="outofstock" style="display:none">
		<span class="out-of-stock">Out of stock</span>
	</div>
<script>
var checkforstock = true;
</script>
<?php } ?>
					</div>
				</div>
        <?php
		$br++;
	}
}elseif($cnt_plans == 2 or $cnt_plans == 4){
	$br=0;
	foreach($index_plans as $single_plan){
		$plan = $single_plan['value'];
		$plan['page_url'] = $single_plan['page_url'];
		if($br==2){
			$br = 0;
			echo '</div><br /><div id="front_page_content-plan-area">';
		}
		?>
                <div id="shared-box-medium" class="<?php echo $box_classes[$br];?>">
					<div id="box-title"><h4><a href="<?php echo $plan['page_url'];?>"><?php echo $plan['name'];?></a></h4></div>
					<div id="box-price">
							<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
				<span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo $promo['price_promo']; ?></span> <span>/mo*</span>
				<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
				<span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="box-price-period">/mo</span><br />
	<?php } ?>
					</div>
					<div id="box-content">
                        <?php if($single_plan['type'] == 'shared' or $single_plan['type'] == 'semi_dedicated'){ ?>
						<ul>
							<li><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> Data Storage</li>
							<li><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> Data Transfer</li>
							<li><?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
							<li><?php echo (($plan['services']['mailbox'] >= 999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['mailbox'].'</strong>') ?> Email <?php echo ($plan['services']['mailbox']>1)?'Accounts':'Account';?></li>
							<li><strong>30 Day Free Trial</strong></li>
						</ul>
						<ul>
							<li><?php if(!empty($plan['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Multi-lingual Control Panel<?php } ?></li>
							<li>1-Click 40+ Scripts Installer</li>
							<li>PHP4/PHP5/PHP7 Support</li>
							<li>Anti-Virus/Spam Protection</li>
						</ul>
                        <?php }elseif($single_plan['type'] == 'dedicated'){ ?>
						<ul>
							<li><strong><?php echo $plan['services']['processor']?></strong></li>
                            <li><strong><?php echo ($plan['services']['ram']).' GB '.$plan['services']['ram_type']; ?></strong> RAM</li>
                            <li><?php if($plan['services']['hdd'] == 1) echo '<strong>'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drive'; else echo '<strong>'.$plan['services']['hdd'].'x'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drives'; ?></li>
						</ul>
						<ul>
                            <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
							<li><?php if(!empty($plan['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Unlimited Domains Hosted<?php } ?></li>
							<li>Full Root Access</li>
						</ul>
                        <?php }elseif($single_plan['type'] == 'vps' or $single_plan['type'] == 'vps_openvz' or $single_plan['type'] == 'vps_kvm'){ ?>
						<ul>
							<li><strong><?php echo $plan['services']['vcpu']?></strong> CPU Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
                            <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
                            <li><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Data Storage</li>
                            <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
						</ul>
						<ul>
							<li><?php if(!empty($plan['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Unlimited Domains Hosted<?php } ?></li>
                            <li>SSH Access</li>
                            <li>Full Root access</li>
                            <li>24/7/365 Support</li>
						</ul>
                        <?php } ?>
					</div>
					<div id="box-form">
<?php if ($plan['type'] == 'dedicated') { ?>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="checkstock">Please wait...</div>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="instock" style="display:none">
<?php } ?>
						<form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
							<?php if (isset($button) && $button): echo $button; else: ?>
                            <button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
                            <?php endif;?>
                            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
                            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
                            <?php endforeach; endif;?>
                            <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
                        </form>
<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
				<div class="promo-period-text">* valid for<?php if ($plan['type'] != 'dedicated') { ?> the first<?php } ?> <?=$promo['period_promo']?> month(s)</div>
	<?php } ?>
<?php if ($plan['type'] == 'dedicated') { ?>
	</div>
	<div data-id="<?php echo $plan['rp_product_id'];?>" class="outofstock" style="display:none">
		<span class="out-of-stock">Out of stock</span>
	</div>
<script>
var checkforstock = true;
</script>
<?php } ?>
					</div>
				</div>
        <?php
		$br++;
	}
}elseif($cnt_plans == 1){
	foreach($index_plans as $single_plan){
		$plan = $single_plan['value'];
		$plan['page_url'] = $single_plan['page_url'];
		?>
                <div id="shared-box-large">
					<div id="box-title"><h4><a href="<?php echo $plan['page_url'];?>"><?php echo $plan['name'];?></a></h4></div>
					<div id="box-price">
							<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
				<span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo $promo['price_promo']; ?></span> <span>/mo*</span>
				<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
				<span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="box-price-period">/mo</span><br />
	<?php } ?>
					</div>
					<div id="box-content">
                        <?php if($single_plan['type'] == 'shared' or $single_plan['type'] == 'semi_dedicated'){ ?>
						<ul>
							<li><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> Data Storage</li>
							<li><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> Data Transfer</li>
							<li><?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>Domain<?php }else{ ?>Domains<?php } ?> Hosted</li>
							<li><?php echo (($plan['services']['mailbox'] >= 999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['mailbox'].'</strong>') ?> Email <?php echo ($plan['services']['mailbox']>1)?'Accounts':'Account';?></li>
							<li><strong>30 Day Free Trial</strong></li>
						</ul>
						<ul>
							<li><?php if(!empty($plan['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Multi-lingual Control Panel<?php } ?></li>
							<li>Custom Error Pages</li>
							<li>Integrated Ticketing System</li>
							<li>24/7/365 support</li>
						</ul>
						<ul>
							<li>30 Day Money-Back</li>
							<li>1-Click 40+ Scripts Installer</li>
							<li>PHP4/PHP5/PHP7 Support</li>
							<li>Anti-Virus/Spam Protection</li>
						</ul>
                        <?php }elseif($single_plan['type'] == 'dedicated'){ ?>
						<ul>
							<li><strong><?php echo $plan['services']['processor']?></strong></li>
                            <li><strong><?php echo ($plan['services']['ram']).' GB '.$plan['services']['ram_type']; ?></strong> RAM</li>
                            <li><?php if($plan['services']['hdd'] == 1) echo '<strong>'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drive'; else echo '<strong>'.$plan['services']['hdd'].'x'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drives'; ?></li>
                            <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
						</ul>
						<ul>
							<li><?php if(!empty($plan['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Unlimited Domains Hosted<?php } ?></li>
							<li>CentOS</li>
							<li>Debian</li>
							<li>Ubuntu</li>
						</ul>
						<ul>
							<li>99.9% Network Uptime</li>
							<li>Full Root Access</li>
							<li>No Set-up Fee</li>
							<li>Client Exec Billing Software</li>
						</ul>
                        <?php }elseif($single_plan['type'] == 'vps' or $single_plan['type'] == 'vps_openvz' or $single_plan['type'] == 'vps_kvm'){ ?>
						<ul>
							<li><strong><?php echo $plan['services']['vcpu']?></strong> CPU Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
                            <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
                            <li><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Data Storage</li>
                            <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
						</ul>
						<ul>
							<li><?php if(!empty($plan['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Unlimited Domains Hosted<?php } ?></li>
                            <li>24/7/365 Support</li>
                            <li>SSH Access</li>
                            <li>Full Root access</li>
						</ul>
						<ul>
							<li>NO Setup Fees</li>
							<li>CentOS</li>
							<li>Debian</li>
							<li>Ubuntu</li>
						</ul>
                        <?php } ?>
					</div>
					<div id="box-form">
<?php if ($plan['type'] == 'dedicated') { ?>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="checkstock">Please wait...</div>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="instock" style="display:none">
<?php } ?>
						<form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
							<?php if (isset($button) && $button): echo $button; else: ?>
                            <button class="rpwp-button colorize"><span class="gloss"></span>order now</button>
                            <?php endif;?>
                            <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
                            <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
                            <?php endforeach; endif;?>
                            <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
                        </form>
<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>

				<div class="promo-period-text">* valid for<?php if ($plan['type'] != 'dedicated') { ?> the first<?php } ?> <?=$promo['period_promo']?> month(s)</div>
	<?php } ?>
<?php if ($plan['type'] == 'dedicated') { ?>
	</div>
	<div data-id="<?php echo $plan['rp_product_id'];?>" class="outofstock" style="display:none">
		<span class="out-of-stock">Out of stock</span>
	</div>
<script>
var checkforstock = true;
</script>
<?php } ?>
					</div>
				</div>
        <?php
	}
}
?>
</div><br clear="all" />
<div class="line-height-20px"> </div>