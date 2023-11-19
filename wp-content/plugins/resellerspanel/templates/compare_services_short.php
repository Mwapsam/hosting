  <table id="rp_presentation">
    <tr class="rp_pr_plan_header">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">
	  <?php
	   if ($key == 'shared') echo 'SHARED HOSTING';
	   else if ($key == 'vps_kvm') echo 'KVM VPS';
	   else if ($key == 'vps_virtuozzo') echo 'VIRTUOZZO VPS';
	   else if ($key == 'vps_openvz') echo 'OPENVZ VPS';
	   else if ($key == 'semi_dedicated') echo 'SEMI-DEDICATED PLANS';
	   else if ($key == 'dedicated') echo 'DEDICATED SERVERS';
	  ?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_feature_header">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>"></td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">
      <strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> storage
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">
      <strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> bandwidth
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">
        <?php
           if (isset($plan['services']['domain'])) {
                   $plan_domains = $plan['services']['domain'] == 1 ? 'website hosted' : 'websites hosted';
                        if ($plan['services']['domain'] == 99999)
                                echo '<strong>Unlimited</strong> ' . $plan_domains;
                        else
                                echo '<strong>'.$plan['services']['domain'].'</strong> ' . $plan_domains;
           } else {
                        echo '<strong>Unlimited</strong> websites hosted';
           }
        ?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">
      <?php if (($key == 'shared') || ($key == 'semi_dedicated')) { ?><strong>30-Day Free Trial</strong><?php }else{ ?><strong>24/7/365</strong> support<?php } ?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features rp_pr_features_price">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) {
			$promo = rp_store_promos($plan['rp_product_id']);
			$price = $promo['price_promo'];
		} else {
			$price = $plan['prices']['period_1'][$plan['store_currency']];
		}
	?>
		<small>start from</small> <span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo sprintf('%0.2f', $price); ?></span>/mo
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_signup">
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">
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
    <?php $i=0; foreach($services as $key=>$plan) : $i++; ?>
      <td class="rp_pr_plan<?php if($i==1){ echo ' first-plan'; }?>">&nbsp;</td>
    <?php endforeach; ?>
    </tr>
  </table>
 