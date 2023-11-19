<?php
$class = null;
foreach($rp_plans as $plan){
	 if(empty($class) or $class=='odd') $class='even'; else $class='odd';
?>
<div class="openvz-plan-<?php echo $class?><?php if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' best'; }?>">
<?php if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){?><div class="best-plan-openvz"></div><?php }?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td width="130" align="center">
		<?php echo do_shortcode('[webp img="openvz-vps-hosting-icon.png" title="OpenVZ VPS plan"]');?>
	</td>
	<td width="110" align="center" class="openvz-plan-name"><?php echo $plan['name'];?></td>
    <td width="190" class="openvz-plan-features">Platform: <strong>Linux</strong><br />
                    CPU Cores: <strong><?php echo $plan['services']['vcpu']?></strong><br />
                    RAM: <strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong></td>
    <td width="200" class="openvz-plan-features">Space: <strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong><br />
                    Bandwidth: <strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong><br />
                    Management: <strong><?php echo !empty($plan['services']['managed_services'])?'Managed':'Non-managed';?></strong></td>
	<td align="center">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
			<span class="openvz-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="openvz-plan-price"><?php echo $promo['price_promo'] ?></span> <span class="openvz-plan-price-mo">/mo*</span>
					<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
					<div class="promo-period-text">* valid for the first <?=$promo['period_promo']?> month(s)</div>
	<?php } else { ?>
			<span class="openvz-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="openvz-plan-price"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="openvz-plan-price-mo">/mo</span>
	<?php } ?>
	</td>
	<td width="150" align="center"><form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
		<?php if (isset($button) && $button): echo $button; else: ?>
        <input class="pr_rp_sing_up_button" type="submit" value="<?php echo $feature['label'];?>"/>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
	</form></td>
  </tr>
</table>
</div>
<?php } ?>
<br />