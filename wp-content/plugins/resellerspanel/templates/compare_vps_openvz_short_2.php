  <table id="rp_presentation">
    <tr class="rp_pr_plan_header">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>"><?php echo $plan['name'];?></td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_feature_header">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>"></td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
	  <strong><?php echo $plan['services']['vcpu']?> CPU Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></strong>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Storage
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features rp_pr_features_price">
	<?php $i=0; foreach($rp_plans as $key=>$plan) : $i++;
?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
			<span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span><?php echo $promo['price_promo']; ?></span> <span class="tower-box-price-period">/mo*</span>
			<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
			<span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> / month
	<?php } ?>
	</td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_signup">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
		<?php if (isset($button) && $button): echo $button; else: ?>
        <button type="submit" class="rpwp-button colorize"><span class="gloss"></span>order now</button>
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
	<?php } ?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_end">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">&nbsp;</td>
    <?php endforeach; ?>
    </tr>
  </table>
 