<div class="content_vps_openvz">
  <a href="#" rel="expand_all" class="expand_all">View All VPS Features</a>
  <a href="#" rel="collapse_all" class="collapse_all" style="display:none">Collapse VPS Features</a>
  <br clear="all" />
    <table align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <?php
	$br=0; $rp_plans_next = array();
	foreach($rp_plans as $key=>$plan) : if($br++ >= 5){ $rp_plans_next[$key] = $plan; continue; }?>
      <td valign="top"><div id="tower-box">
          <?php if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){?><div class="best-plan"> </div><?php }?>
          <div id="tower-box-title">
            <h2><?php echo $plan['name'];?></h2>
          </div>
          <div id="tower-box-content-2">
            <ul id="vps_features_short_<?php echo $key;?>">
              <li>
				<div id="tower-box-price">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo $promo['price_promo']; ?></span> <span class="tower-box-price-period">/mo*</span>
				<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="tower-box-price-period">/mo</span>
	<?php } ?>
				</div>
			</li>
              <li><strong><?php echo $plan['services']['vcpu']?></strong> Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
              <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
              <li>Full Root access</li>
            </ul>
            <ul id="vps_features_long_<?php echo $key;?>" style="display:none">
              <li>
				<div id="tower-box-price">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo $promo['price_promo']; ?></span> <span class="tower-box-price-period">/mo*</span>
					<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="tower-box-price-period">/mo</span>
	<?php } ?>
				</div>
              </li>
              <li><strong><?php echo $plan['services']['vcpu']?></strong> Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
              <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
              <li><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Data Storage</li>
              <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
              <li>Full Root access</li>
            </ul>
            <a href="#" plan_id="<?php echo $key;?>" rel="expand" class="expand">Expand</a>
            <a href="#" plan_id="<?php echo $key;?>" rel="collapse" class="collapse" style="display:none">Collapse</a>
            <div class="clear"></div>
            <div id="tower-box-bottom">
              <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
		<?php if (isset($button) && $button): echo $button; else: ?>
        <button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span><?php echo $feature['label'];?></button>
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
            </div>
          </div>
        </div></td>
      <td width="11"></td>
      <?php endforeach; ?>
    </tr>
  </table>
<?php if(!empty($rp_plans_next)) : ?>
  <br />
  <br />
  <table align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <?php
	$br=0;
	foreach($rp_plans_next as $key=>$plan) : ?>
      <td valign="top"><div id="tower-box">
          <?php if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){?><div class="best-plan"> </div><?php }?>
          <div id="tower-box-title">
            <h2><?php echo $plan['name'];?></h2>
          </div>
          <div id="tower-box-content-2">
            <ul id="vps_features_short_<?php echo $key;?>">
              <li>
				<div id="tower-box-price">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo $promo['price_promo']; ?></span> <span class="tower-box-price-period">/mo*</span>
					<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="tower-box-price-period">/mo</span>
	<?php } ?>
				</div>
              </li>
              <li><strong><?php echo $plan['services']['vcpu']?></strong> Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
              <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
              <li>Full Root access</li>
            </ul>
            <ul id="vps_features_long_<?php echo $key;?>" style="display:none">
              <li>
				<div id="tower-box-price">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo $promo['price_promo']; ?></span> <span class="tower-box-price-period">/mo*</span>
					<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span> <span class="tower-box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="tower-box-price-period">/mo</span>
	<?php } ?>
				</div>
			</li>
              <li><strong><?php echo $plan['services']['vcpu']?></strong> Core<?php echo $plan['services']['vcpu'] > 1 ? 's' : ''?></li>
              <li><strong><?php echo $plan['services']['guaranteed_ram']/1024?> GB</strong> RAM</li>
              <li><strong><?php echo (($plan['services']['disk_space']) ? ($plan['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Data Storage</li>
              <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
              <li>Full Root access</li>
            </ul>
            <a href="#" plan_id="<?php echo $key;?>" rel="expand" class="expand">Expand</a>
            <a href="#" plan_id="<?php echo $key;?>" rel="collapse" class="collapse" style="display:none">Collapse</a>
            <div class="clear"></div>
            <div id="tower-box-bottom">
              <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
		<?php if (isset($button) && $button): echo $button; else: ?>
        <button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span><?php echo $feature['label'];?></button>
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
            </div>
          </div>
        </div></td>
      <td width="11"></td>
      <?php endforeach; ?>
    </tr>
  </table>
<?php endif; ?>
</div>
  <br />
  <br />
  <div class="clear"></div>
