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
      <div class="plan-overview"><?php echo $plan['note'];?></div>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <strong><?php echo $plan['services']['processor']?> CPU</strong>
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
    <tr class="rp_pr_features">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <strong>Full Root access</strong>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features rp_pr_features_price">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> / month
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <a class='inline_compare' href="#compare_overlay">Compare All Hosting Plans</a>
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
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_end">
    <?php $i=0; foreach($rp_plans as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; } if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">&nbsp;</td>
    <?php endforeach; ?>
    </tr>
  </table>
 