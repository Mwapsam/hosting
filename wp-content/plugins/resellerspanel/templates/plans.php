<?php if ($upgrades) echo '<div class="rp_upgrades">'?>
<table id="rp_presentation">
		<?php if(!$upgrades):?>
		<tr class="rp_pr_plan_header">
			<td class="rp_pr_desc"></td>
			<?php foreach($rp_plans as $plan_ord => $plan):?>
			<td class="rp_pr_plan rp_plan_<?php echo $plan_ord;?> <?php if (isset($rp_best_plan) && $plan_ord == $rp_best_plan) echo 'rp_pr_best'; elseif (isset($rp_best_plan) && $plan_ord == $rp_best_plan+1)echo 'rp_pr_after_best';?>">
				<?php echo $plan['name'];?>
			</td>
			<?php endforeach;?>
		</tr>
		<?php endif;?>
		<?php foreach ($guide as $category_label => $features):?>
		
		<tr class="rp_pr_feature_header">
			<td class="rp_pr_desc"><?php echo $category_label?></td>
			<?php foreach($rp_plans as $plan_ord => $plan):?>
			<td class="rp_pr_plan rp_plan_<?php echo $plan_ord;?> <?php if (isset($rp_best_plan) && $plan_ord == $rp_best_plan) echo 'rp_pr_best'; elseif (isset($rp_best_plan) && $plan_ord == $rp_best_plan+1)echo 'rp_pr_after_best';?>"><?php echo ($upgrades?$plan['name']:'');?></td>
			<?php endforeach;?>
		</tr>
		<?php
		foreach ($features as $feature): $rp_feature_name = $feature['column']; 
		if ($feature['info'] === null && $feature['value'] === null):?>
			<tr class="rp_pr_signup">
			<td class="rp_pr_desc">&nbsp;</td>
			<?php foreach($rp_plans as $plan_ord => $plan):?>
			<td class="rp_pr_plan rp_plan_<?php echo $plan_ord;?> <?php if (isset($rp_best_plan) && $plan_ord == $rp_best_plan) echo 'rp_pr_best'; elseif (isset($rp_best_plan) && $plan_ord == $rp_best_plan+1)echo 'rp_pr_after_best';?>">
				<form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
					<?php if (isset($button) && $button): echo $button; else: ?>
					<input class="pr_rp_sing_up_button" type="submit" value="<?php echo $feature['label'];?>"/>
					<?php endif;?>
					<?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
					<input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
					<?php endforeach; endif;?>
					<input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
				</form>
			</td>
			<?php endforeach;?>
		</tr>
		<?php else:	?>
		<tr class="rp_pr_features<?php if ($rp_feature_name == 'prices_1' || $rp_feature_name == 'prices_12' || $rp_feature_name == 'domain_price' )echo ' rp_pr_features_price'?>">
			<td class="rp_pr_desc"><div>
				<?php echo $feature['label']?>
				<?php if($feature['info']):?>
				<a class="pr_rp_desc_info" href="JavaScript:void(0);"><?php echo do_shortcode('[webp img="pr_features_desc.png" title="Feature"]');?></a>
				<span class="pr_rp_desc_info_test"><?php echo $feature['info']?></span>
				<?php endif;?>
			</div></td>
			<?php foreach($rp_plans as $plan_ord => $plan): ?>
			<td class="rp_pr_plan rp_plan_<?php echo $plan_ord;?> <?php if (isset($rp_best_plan) && $plan_ord == $rp_best_plan) echo 'rp_pr_best'; elseif (isset($rp_best_plan) && $plan_ord == $rp_best_plan + 1) echo 'rp_pr_after_best';?>">
				<?php echo __rp_value($rp_feature_name ? (isset($plan['services'][$rp_feature_name]) ? $plan['services'][$rp_feature_name] : '') : $feature['value'], $rp_feature_name);?>
<?php if (in_array($rp_feature_name, array('prices_1')) && !empty(rp_store_promos($plan['rp_product_id']))) { 
$promo = rp_store_promos($plan['rp_product_id']);
?>
				<small style="font-size:65%; display:block;">
					the price is valid for the first <?=$promo['period_promo']?> month(s)
					<br>Standard price: <strong><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?>/month</strong></small>
				</small>
<?php } ?>
			</td>
			<?php endforeach;?>
		</tr>

		<?php endif; endforeach;?>

		<?php endforeach;?>
		
		<tr class="rp_pr_end">
			<td class="rp_pr_desc">&nbsp;</td>
			<?php foreach($rp_plans as $plan_ord => $plan):?>
			<td class="rp_pr_plan rp_plan_<?php echo $plan_ord;?> <?php if (isset($rp_best_plan) && $plan_ord == $rp_best_plan) echo 'rp_pr_best'; elseif (isset($rp_best_plan) && $plan_ord == $rp_best_plan+1) echo 'rp_pr_after_best';?>">&nbsp;
				
			</td>
			<?php endforeach;?>
		</tr>
		
</table>
<?php if ($upgrades) echo '</div>'?>