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
					<div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
	<?php } else { ?>
					<span class="tower-box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="tower-box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="tower-box-price-period">/mo</span>
	<?php } ?>
				</div>
              </li>
              <li><strong><?php echo preg_replace('/\(/','<br />(',$plan['services']['processor'])?></strong></li>
              <li><strong><?php echo ($plan['services']['ram']).' GB '.$plan['services']['ram_type']; ?></strong> RAM</li>
              <li><?php if($plan['services']['hdd'] == 1) echo '<strong>'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> HDD'; else echo '<strong>'.$plan['services']['hdd'].'x'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong>'; ?></li>
              <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
            </ul>
            <div class="clear"></div>
            <div id="tower-box-bottom">
	  <div data-id="<?php echo $plan['rp_product_id'];?>" class="checkstock">Please wait...</div>
	  <div data-id="<?php echo $plan['rp_product_id'];?>" class="instock" style="display:none">
      <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
        <button type="submit" class="rpwp-button colorize"><span class="gloss"></span>order now</button>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan['rp_product_id'];?>" />
         </form>
	<?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
		$promo = rp_store_promos($plan['rp_product_id']);
	?>
			<div class="promo-period-text">* valid for <?=$promo['period_promo']?> month(s)</div>
	<?php } ?>
	  </div>
		<div data-id="<?php echo $plan['rp_product_id'];?>" class="outofstock" style="display:none">
			<span class="out-of-stock">Out of stock</span>
		</div>
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
                <li>
<?php If (file_exists(get_theme_root().'/'.get_template().'/images/header_dedicated-img.jpg')) { 
					echo do_shortcode('[webp img="header_dedicated-img.jpg" title="Dedicated" width="181"]');
} else {
					echo do_shortcode('[webp img="header_dedicated.png" title="Dedicated" width="181"]');
} ?>
                </li>
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
<script>
var checkforstock = true;
</script>
