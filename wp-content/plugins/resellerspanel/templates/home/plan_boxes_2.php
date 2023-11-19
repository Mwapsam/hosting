  <center>
    <h2><?php echo trim($title);?></h2>
  </center>
  <table id="rp_presentation">
    <tr class="rp_pr_plan_header">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>"><?php echo $plan['name'];?></td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_feature_header">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>"></td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>"><div class="plan-overview"><?php echo $value['note'];?></div></td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <?php if($value['type']=='shared'){?><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> storage<?php }?>
      <?php if($value['type']=='vps'){?><strong><?php echo $plan['services']['processor']?> CPU</strong><?php }?>
      <?php if($value['type']=='vps_openvz'){?><strong><?php echo $plan['services']['vcpu']?> CPU Core(s)</strong><?php }?>
      <?php if($value['type']=='vps_kvm'){?><strong><?php echo $plan['services']['vcpu']?> CPU Core(s)</strong><?php }?>
      <?php if($value['type']=='semi_dedicated'){?><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> storage<?php }?>
      <?php if($value['type']=='dedicated'){?><strong><?php echo $plan['services']['processor']?></strong><?php }?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <?php if($value['type']=='shared'){?><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> bandwidth<?php }?>
      <?php if($value['type']=='vps'){?><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM<?php }?>
      <?php if($value['type']=='vps_openvz'){?><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM<?php }?>
      <?php if($value['type']=='vps_kvm'){?><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM<?php }?>
      <?php if($value['type']=='semi_dedicated'){?><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> bandwidth<?php }?>
      <?php if($value['type']=='dedicated'){?><strong><?php echo ($plan['services']['ram']).' GB '.$plan['services']['ram_type']; ?></strong> RAM<?php }?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <?php if($value['type']=='shared'){?><?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>website hosted<?php }else{ ?>websites hosted<?php } ?><?php }?>
      <?php if($value['type']=='vps'){?><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Storage<?php }?>
      <?php if($value['type']=='vps_openvz'){?><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Storage<?php }?>
      <?php if($value['type']=='vps_kvm'){?><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Storage<?php }?>
      <?php if($value['type']=='semi_dedicated'){?><?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>website hosted<?php }else{ ?>websites hosted<?php } ?><?php }?>
      <?php if($value['type']=='dedicated'){?><?php if($plan['services']['hdd'] == 1) echo '<strong>'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drive'; else echo '<strong>'.$plan['services']['hdd'].'x'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drives'; ?><?php }?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <?php if($value['type']=='shared'){?><strong>24/7/365</strong> support<?php }?>
      <?php if($value['type']=='vps'){?><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer<?php }?>
      <?php if($value['type']=='vps_openvz'){?><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer<?php }?>
      <?php if($value['type']=='vps_kvm'){?><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer<?php }?>
      <?php if($value['type']=='semi_dedicated'){?><strong>24/7/365</strong> support<?php }?>
      <?php if($value['type']=='dedicated'){?><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer<?php }?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <?php if($value['type']=='shared'){?><strong>30</strong> Days<br> Money Back Guarantee<?php }?>
      <?php if($value['type']=='vps'){?><strong>Full</strong> Root access<?php }?>
      <?php if($value['type']=='vps_openvz'){?><strong>Full</strong> Root access<?php }?>
      <?php if($value['type']=='vps_kvm'){?><strong>Full</strong> Root access<?php }?>
      <?php if($value['type']=='semi_dedicated'){?><strong>30</strong> Days<br> Money Back Guarantee<?php }?>
      <?php if($value['type']=='dedicated'){?><strong>Full</strong> Root access<?php }?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <?php if($value['type']=='shared'){?><strong>30 Day Free Trial</strong><?php }?>
      <?php if($value['type']=='vps'){?><strong>50+ Free</strong> Apps Installer<?php }?>
      <?php if($value['type']=='vps_openvz'){?><strong>50+ Free</strong> Apps Installer<?php }?>
      <?php if($value['type']=='vps_kvm'){?><strong>50+ Free</strong> Apps Installer<?php }?>
      <?php if($value['type']=='semi_dedicated'){?><strong>30 Day Free Trial</strong><?php }?>
      <?php if($value['type']=='dedicated'){?><strong>50+ Free</strong> Apps Installer<?php }?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features rp_pr_features_price">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
  <?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
    $promo = rp_store_promos($plan['rp_product_id']);
  ?>
        <span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo $promo['price_promo']; ?></span> <span>/mo*</span>
        <div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
  <?php } else { ?>
        <span class="currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> / month
  <?php } ?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_features">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
      <?php if($value['type']=='shared'){?><a class='inline_compare' href="#compare_overlay_shared">Compare All Plans</a><?php }?>
      <?php if($value['type']=='vps'){?><a class='inline_compare' href="#compare_overlay_vps_virtuozzo">Compare All Plans</a><?php }?>
      <?php if($value['type']=='vps_openvz'){?><a class='inline_compare' href="#compare_overlay_vps_openvz">Compare All Plans</a><?php }?>
      <?php if($value['type']=='vps_kvm'){?><a class='inline_compare' href="#compare_overlay_vps_kvm">Compare All Plans</a><?php }?>
      <?php if($value['type']=='semi_dedicated'){?><a class='inline_compare' href="#compare_overlay_semi_dedicated">Compare All Plans</a><?php }?>
      <?php if($value['type']=='dedicated'){?><a class='inline_compare' href="#compare_overlay_dedicated">Compare All Plans</a><?php }?>
      </td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_signup">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">
<?php if ($plan['type'] == 'dedicated') { ?>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="checkstock">Please wait...</div>
	<div data-id="<?php echo $plan['rp_product_id'] ?>" class="instock" style="display:none">
<?php } ?>
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
</td>
    <?php endforeach; ?>
    </tr>
    <tr class="rp_pr_end">
    <?php foreach($index_plans as $i=>$value) : $plan = $value['value']; ?>
      <td class="rp_pr_plan<?php if($i==0){ echo ' first-plan'; } if(!empty($rp_best_plan) and $plan['rp_product_id'] == (int)$rp_best_plan){ echo ' rp_pr_best'; }?>">&nbsp;</td>
    <?php endforeach; ?>
    </tr>
  </table>
  <br />
  