    <div id="shared-box-wide" class="left"><div id="box-price-wide">
            <?php if (!empty(rp_store_promos($plan['rp_product_id']))) { 
        $promo = rp_store_promos($plan['rp_product_id']);
    ?>
                <span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo $promo['price_promo']; ?></span> <span>/mo*</span>
                <div class="old-price"><?php echo _rp_get_currency_symbol($plan['store_currency']);?><?php echo $promo['price_normal']; ?> /mo</div>
    <?php } else { ?>
                <span class="box-price-currency"><?php echo _rp_get_currency_symbol($plan['store_currency']);?></span><span class="box-price-value"><?php echo sprintf('%0.2f',$plan['prices']['period_1'][$plan['store_currency']]); ?></span> <span class="box-price-period">/mo</span><br />
    <?php } ?>
    </div>
        <div id="box-title"><h2><?php echo $plan['name'];?> <span class="box-sub-title">Dedicated Server</span></h2></div>
        <div id="box-content">
            <ul>
                <li><strong><?php echo $plan['services']['processor']?></strong></li>
                <li><strong><?php echo ($plan['services']['ram']).' GB '.$plan['services']['ram_type']; ?></strong> RAM</li>
                <li><?php if($plan['services']['hdd'] == 1) echo '<strong>'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drive'; else echo '<strong>'.$plan['services']['hdd'].'x'.($plan['services']['disk_space']/1024000).' GB '.$plan['services']['hdd_type'].'</strong> Hard Drives'; ?></li>
                <li><strong><?php echo (($plan['services']['traffic']) ? ($plan['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Data Transfer</li>
            </ul>
            <ul class="second-list">
                <li><?php if(!empty($plan['free_domains'])){ ?>FREE Domain Name<?php }else{ ?>Unlimited Domains Hosted<?php } ?></li>
                <li>Full Root Access</li>
                <li>No Set-up Fee</li>
                <li>Client Exec Billing Software</li>
            </ul><div class="clear"></div>
            <div id="box-bottom-wide"><div class="plan-details-link"><a href="<?php echo $plan['page_url'];?>">View Plan Details</a></div>
	  <div data-id="<?php echo $plan['rp_product_id'];?>" class="checkstock">Please wait...</div>
	  <div data-id="<?php echo $plan['rp_product_id'];?>" class="instock" style="display:none">
      <form class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>" method="get">
		<?php if (isset($button) && $button): echo $button; else: ?>
        <button type="submit" class="rpwp-button colorize"><span class="gloss"></span>buy now</button>
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
		<div data-id="<?php echo $plan['rp_product_id'];?>" class="outofstock" style="display:none">
			<span class="out-of-stock">Out of stock</span>
		</div>
</div>
        </div>
    </div>
    <br clear="all" /><br />
<script>
var checkforstock = true;
</script>