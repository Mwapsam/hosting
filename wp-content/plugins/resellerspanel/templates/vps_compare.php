  <?php if(!empty($title)){?><h2><?php echo $title;?></h2><?php } ?>
  <table align="center" cellpadding="0" cellspacing="0" border="0">
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
            <div class="clear"></div>
            <div id="tower-box-bottom">
              <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
		<?php if (isset($button) && $button): echo $button; else: ?>
        <button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>
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
      <td> <div id="compare-box">
            <div id="compare-box-title">
              <h2><?php echo $title;?></h2>
            </div>
            <div id="compare-box-content">
              <ul>
                <li>
                  <div id="compare-box-text"><?php echo $content;?></div>
                </li>
                <li><?php if ($plans_type == 'vps_openvz') { ?>
					<?php if (file_exists(get_theme_root().'/'.get_template().'/images/header_vps_openvz-img.jpg')) { 
						echo do_shortcode('[webp img="header_vps_openvz-img.jpg" title="VPS OpenVZ" width="181"]');
					} else {
						echo do_shortcode('[webp img="header_vps_openvz.png" title="VPS OpenVZ" width="181"]');
					} ?>
                <?php } else if ($plans_type == 'vps_kvm') { ?>
					<?php if (file_exists(get_theme_root().'/'.get_template().'/images/header_vps_kvm-img.jpg')) {
						echo do_shortcode('[webp img="header_vps_kvm-img.jpg" title="VPS KVM" width="181"]');
					} else {
						echo do_shortcode('[webp img="header_vps_kvm.png" title="VPS KVM" width="181"]');
					} ?>
                <?php } ?></li>
              </ul>
              <div class="clear"></div>
              <div id="compare-box-bottom">
                <form class="pr_rp_sing_up_form" action="<?php echo $compare_url;?>" method="post">
                  <button type="submit" class="rpwp-button compare-box-button colorize-2"><span class="gloss"></span>Compare Plans</button>
                </form>
              </div>
            </div>
          </div></td>
    </tr>
  </table>
  <br />
 
  <div class="clear"></div>
