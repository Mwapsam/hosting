  <?php if(!empty($title)){?><h2><?php echo $title;?></h2><?php } ?>
  <table class="short-compare" align="center" cellpadding="0" cellspacing="0" border="0">
    <tr>
    <?php foreach($rp_plans as $key=>$plan) : ?>
      <td><div id="tower-box">
          <?php if(!empty($rp_best_plan) and $key == (int)$rp_best_plan){?><div class="best-plan"> </div><?php }?>
          <div id="tower-box-title">
            <h2><?php echo $plan['name'];?></h2>
          </div>
          <div id="tower-box-content">
            <ul>
              <li>
				<div id="tower-box-price">
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="tower-box-price-value"><?php echo $promo['price_promo']; ?>*</span> <span class="tower-box-price-period">/mo</span>
					<div class="old-price">
						<?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo
					</div>
	<?php } else { ?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="tower-box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="tower-box-price-period">/mo</span>
	<?php } ?>
				</div>
              </li>
              <li><strong><?php echo __rp_value($plan['services']['disk_space'],'disk_space');?></strong> storage</li>
              <li><strong><?php echo __rp_value($plan['services']['traffic'],'traffic');?></strong> bandwidth</li>
              <li><?php echo (($plan['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$plan['services']['domain'].'</strong>') ?> <?php if($plan['services']['domain'] == 1){ ?>domain<?php }else{ ?>domains<?php } ?></li>
              <li><strong>Daily</strong> Data Backup</li>
              <li><strong>24/7/365</strong> support</li>
              <li><strong>30-Day Free Trial</strong></li>
            </ul>
            <div class="clear"></div>
            <div id="tower-box-bottom">
              <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
		<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>
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
  <br />
 
  <div class="clear"></div>
