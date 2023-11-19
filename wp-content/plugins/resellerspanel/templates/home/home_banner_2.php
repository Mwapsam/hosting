<div id="home-banner-2">
	<?php if($banner_plan[$plan]['type'] == 'vps'){ ?>
      <h3 class="home-banner-title-2"><?php echo $banner_plan[$plan]['value']['name'];?> Plan</h3>
      <br />
      <div class="play-movie-text"><a href="#video1" class="inline_video">From Zero to Website in just 5 minutes!</a> <span class="play-movie-button"><a href="#video1" class="inline_video">PLAY MOVIE</a></span></div>
	<div style='display:none'><div id='video1' style='padding:10px; background:#fff;'><div data-vid="1" class="video_overlay" data-video-src="<?php echo $video_url.$movie?>"></div></div></div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong><?php echo $banner_plan[$plan]['value']['services']['processor']?></strong> CPU</li>
          <li><strong><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></strong> GB RAM</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Disk Space</li>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Traffic</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong>Multiple</strong> OS Choices</li>
          <li><strong>Full</strong> Root access</li>
        </ul>
      </div>
      <div class="clear"></div>
      <h4>Multiple Data Center Options:</h4>
      <div class="clear"></div>
      <div class="data-centers">
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['fremont'] and count($GLOBALS['rp_info']['datacenters']['vps'])<5){ 
			echo do_shortcode('[webp img="california-data-center.png" title="California Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['colohouse']){ 
			echo do_shortcode('[webp img="usa-data-center.png" title="USA Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['ukservers']){ 
			echo do_shortcode('[webp img="uk-data-center.png" title="UK Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['sis_group']){ 
			echo do_shortcode('[webp img="au-data-center.png" title="AU Data Center" width="137"]');
		} ?>
        <div class="clear"> </div>
      </div>
      <div class="clear"></div>
      <div class="home-banner-2-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo $promo['price_promo']; ?></span> /mo*
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                  Only <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span> /mo
    <?php } ?>        
      </div>
      <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button type="input" class="rpwp-button get-started"><span class="gloss"></span>Get Started</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	  </form>
	<?php } else if ($banner_plan[$plan]['type'] == 'vps_kvm') { ?>
      <h3 class="home-banner-title-2"><?php echo $banner_plan[$plan]['value']['name'];?> Plan</h3>
      <div id="home-banner-2-plan-features">
        <ul>
		<li><strong><?php echo $banner_plan[$plan]['value']['services']['vcpu']?></strong> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
          <li><strong><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></strong> GB RAM</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Disk Space</li>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Traffic</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong>Multiple</strong> OS Choices</li>
          <li><strong>Full</strong> Root access</li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="data-centers">
	<?php if($GLOBALS['rp_info']['datacenters']['vps']['colohouse']){ 
		echo do_shortcode('[webp img="usa-data-center.png" title="USA Data Center" width="137"]');
	} ?>
        <div class="clear"> </div>
      </div>
      <div class="clear"></div>
      <div class="home-banner-2-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo $promo['price_promo']; ?></span> /mo*
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                  Only <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span> /mo
    <?php } ?>
      </div>
      <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button type="input" class="rpwp-button get-started"><span class="gloss"></span>Get Started</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	  </form>
	<?php }elseif($banner_plan[$plan]['type'] == 'vps_openvz'){ ?>
      <h3 class="home-banner-title-2">VPS <?php echo $banner_plan[$plan]['value']['name'];?> Plan</h3>
      <br />
      <div class="play-movie-text"><a href="#video1" class="inline_video">From Zero to Website in just 5 minutes!</a> <span class="play-movie-button"><a href="#video1" class="inline_video">PLAY MOVIE</a></span></div>
	<div style='display:none'><div id='video1' style='padding:10px; background:#fff;'><div data-vid="1" class="video_overlay" data-video-src="<?php echo $video_url.$movie?>"></div></div></div>
      <div id="home-banner-2-plan-features">
        <ul>
		  <li><strong><?php echo $banner_plan[$plan]['value']['services']['vcpu']?></strong> CPU Core<?php echo $banner_plan[$plan]['value']['services']['vcpu'] > 1 ? 's' : ''?></li>
          <li><strong><?php echo $banner_plan[$plan]['value']['services']['guaranteed_ram']/1024?></strong> GB RAM</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Disk Space</li>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Traffic</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong>Multiple</strong> OS Choices</li>
          <li><strong>Full</strong> Root access</li>
        </ul>
      </div>
      <div class="clear"></div>
      <h4>Multiple Data Center Options:</h4>
      <div class="clear"></div>
      <div class="data-centers">
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['fremont'] and count($GLOBALS['rp_info']['datacenters']['vps'])<5){ 
			echo do_shortcode('[webp img="california-data-center.png" title="California Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['colohouse']){ 
			echo do_shortcode('[webp img="usa-data-center.png" title="USA Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['ukservers']){ 
			echo do_shortcode('[webp img="uk-data-center.png" title="UK Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['sis_group']){ 
			echo do_shortcode('[webp img="au-data-center.png" title="AU Data Center" width="137"]');
		} ?>
        <div class="clear"> </div>
      </div>
      <div class="clear"></div>
      <div class="home-banner-2-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo $promo['price_promo']; ?></span> /mo*
                
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                  Only <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span> /mo
    <?php } ?>
      </div>
      <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button type="input" class="rpwp-button get-started"><span class="gloss"></span>Get Started</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	  </form>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'semi_dedicated'){ ?>
      <h3 class="home-banner-title-2"><?php echo $banner_plan[$plan]['value']['name'];?> Plan</h3>
      <br />
      <div class="play-movie-text"><a href="#video1" class="inline_video">From Zero to Website in just 5 minutes!</a> <span class="play-movie-button"><a href="#video1" class="inline_video">PLAY MOVIE</a></span></div>
	<div style='display:none'><div id='video1' style='padding:10px; background:#fff;'><div data-vid="1" class="video_overlay" data-video-src="<?php echo $video_url.$movie?>"></div></div></div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?></strong> Disk Space</li>
          <li><strong><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?></strong> Traffic</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?><strong>FREE</strong> Domain Name<?php }else{ ?><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$banner_plan[$plan]['value']['services']['domain'].'</strong>') ?> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain Hosted<?php }else{ ?>Domains Hosted<?php } ?><?php } ?></li>
          <li><strong>Free</strong> Web Templates</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong>Free</strong> Scripts Installer </li>
          <li><strong>Free</strong> Website Builder</li>
        </ul>
      </div>
      <div class="clear"></div>
      <h4>Multiple Data Center Options:</h4>
      <div class="clear"></div>
      <div class="data-centers">
		<?php if($GLOBALS['rp_info']['datacenters']['semidedicated']['fremont'] and count($GLOBALS['rp_info']['datacenters']['semidedicated'])<5){ 
			echo do_shortcode('[webp img="california-data-center.png" title="California Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['semidedicated']['colohouse']){ 
			echo do_shortcode('[webp img="usa-data-center.png" title="USA Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['semidedicated']['ukservers']){ 
			echo do_shortcode('[webp img="uk-data-center.png" title="UK Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['semidedicated']['sis_group']){ 
			echo do_shortcode('[webp img="AU-data-center.png" title="AU Data Center" width="137"]');
		} ?>
        <div class="clear"> </div>
      </div>
      <div class="clear"></div>
      <div class="home-banner-2-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo $promo['price_promo']; ?></span> /mo*
                \
                <div class="promo-period-text">* for the first <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                  Only <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span> /mo
    <?php } ?>
      </div>
      <p class="guarantee-text">Sign up for our 30 day free trial. No credit card required.</p>
      <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button type="input" class="rpwp-button get-started"><span class="gloss"></span>Get Started</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	  </form>
    
	<?php }elseif($banner_plan[$plan]['type'] == 'dedicated'){ ?>
      <h3 class="home-banner-title-2"><?php echo $banner_plan[$plan]['value']['name'];?> Server</h3>
      <br />
      <div class="play-movie-text"><a href="#video1" class="inline_video">From Zero to Website in just 5 minutes!</a> <span class="play-movie-button"><a href="#video1" class="inline_video">PLAY MOVIE</a></span></div>
	<div style='display:none'><div id='video1' style='padding:10px; background:#fff;'><div data-vid="1" class="video_overlay" data-video-src="<?php echo $video_url.$movie?>"></div></div></div>
      <div id="home-banner-2-plan-features-long">
        <ul>
          <li><?php echo $banner_plan[$plan]['value']['services']['processor']?></li>
          <li><strong><?php echo ($banner_plan[$plan]['value']['services']['ram']).' GB '.$banner_plan[$plan]['value']['services']['ram_type']; ?></strong> RAM</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features-long">
        <ul>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['disk_space']) ? ($banner_plan[$plan]['value']['services']['disk_space']/1024000).' GB' : 'Unlimited' ) ?></strong> Disk Space</li>
          <li><strong><?php echo (($banner_plan[$plan]['value']['services']['traffic']) ? ($banner_plan[$plan]['value']['services']['traffic']/1024000000).' TB' : 'Unlimited' ) ?></strong> Traffic</li>
        </ul>
      </div>
      <div class="clear"></div>
      <h4>Multiple Data Center Options:</h4>
      <div class="clear"></div>
      <div class="data-centers">
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['fremont'] and count($GLOBALS['rp_info']['datacenters']['vps'])<5){ 
			echo do_shortcode('[webp img="california-data-center.png" title="California Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['colohouse']){ 
			echo do_shortcode('[webp img="usa-data-center.png" title="USA Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['ukservers']){ 
			echo do_shortcode('[webp img="uk-data-center.png" title="UK Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['vps']['sis_group']){ 
			echo do_shortcode('[webp img="au-data-center.png" title="AU Data Center" width="137"]');
		} ?>
        <div class="clear"> </div>
      </div>
      <div class="clear"></div>
      <div class="home-banner-2-price">
   <?php if (!empty(rp_store_promos($banner_plan[$plan]['value']['rp_product_id']))) { 
        $promo = rp_store_promos($banner_plan[$plan]['value']['rp_product_id']);
    ?>
                <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo $promo['price_promo']; ?></span> /mo*
                
                <div class="promo-period-text">* for <?=$promo['period_promo']?> mо/(s), renews at - <?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?><?php echo $promo['price_normal']; ?></div>
    <?php } else { ?>
                  Only <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span> /mo
    <?php } ?>
      </div>
	  <div data-id="<?php echo $plan ?>" class="checkstock">Please wait...</div>
	  <div data-id="<?php echo $plan ?>" class="instock" style="display:none">
      <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button type="input" class="rpwp-button get-started"><span class="gloss"></span>Get Started</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	</form>
	</div>
	<div data-id="<?php echo $plan;?>" class="outofstock" style="display:none">
		<span class="out-of-stock">Out of stock</span>
	</div>
<script>
var checkforstock = true;
</script>
    
    <?php }else{ ?>
      <h3 class="home-banner-title-2"><?php echo $banner_plan[$plan]['value']['name'];?> <?php echo (strlen($banner_plan[$plan]['value']['name'])>12)?'':'Shared';?> Hosting Plan</h3>
      <br />
      <div class="play-movie-text"><a href="#video1" class="inline_video">From Zero to Website in just 5 minutes!</a> <span class="play-movie-button"><a href="#video1" class="inline_video">PLAY MOVIE</a></span></div>
	<div style='display:none'><div id='video1' style='padding:10px; background:#fff;'><div data-vid="1" class="video_overlay" data-video-src="<?php echo $video_url.$movie?>"></div></div></div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong><?php echo __rp_value($banner_plan[$plan]['value']['services']['disk_space'],'disk_space');?></strong> Disk Space</li>
          <li><strong><?php echo __rp_value($banner_plan[$plan]['value']['services']['traffic'],'traffic');?></strong> Traffic</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><?php if(!empty($banner_plan[$plan]['value']['free_domains'])){ ?><strong>FREE</strong> Domain Name<?php }else{ ?><?php echo (($banner_plan[$plan]['value']['services']['domain'] == 99999) ? '<strong>Unlimited</strong>' : '<strong>'.$banner_plan[$plan]['value']['services']['domain'].'</strong>') ?> <?php if($banner_plan[$plan]['value']['services']['domain'] == 1){ ?>Domain Hosted<?php }else{ ?>Domains Hosted<?php } ?><?php } ?></li>
          <li><strong>Free</strong> Web Templates</li>
        </ul>
      </div>
      <div id="home-banner-2-plan-features">
        <ul>
          <li><strong>Free</strong> Scripts Installer </li>
          <li><strong>Free</strong> Website Builder</li>
        </ul>
      </div>
      <div class="clear"></div>
      <h4>Multiple Data Center Options:</h4>
      <div class="clear"></div>
      <div class="data-centers">
		<?php if($GLOBALS['rp_info']['datacenters']['shared']['fremont'] and count($GLOBALS['rp_info']['datacenters']['shared'])<5){ 
			echo do_shortcode('[webp img="california-data-center.png" title="California Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['shared']['colohouse']){ 
			echo do_shortcode('[webp img="usa-data-center.png" title="USA Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['shared']['ukservers']){ 
			echo do_shortcode('[webp img="uk-data-center.png" title="UK Data Center" width="137"]');
		} ?>
		<?php if($GLOBALS['rp_info']['datacenters']['shared']['sis_group']){ 
			echo do_shortcode('[webp img="au-data-center.png" title="AU Data Center" width="137"]');
		} ?>
        <div class="clear"> </div>
      </div>
      <div class="clear"></div>
      <div class="home-banner-2-price">
        Only <span class="home-banner-2-price-currency"><?php echo _rp_get_currency_symbol($banner_plan[$plan]['value']['store_currency']);?></span><span class="home-banner-2-price-value"><?php echo sprintf('%0.2f',$banner_plan[$plan]['value']['prices']['period_1'][$banner_plan[$plan]['value']['store_currency']]); ?></span> /mo
      </div>
      <p class="guarantee-text">Sign up for our 30 day free trial. No credit card required.</p>
      <form method="get" class="pr_rp_sing_up_form" action="<?php echo $rp_signup_url?>">
    	<?php if (isset($button) && $button): echo $button; else: ?>
		<button type="input" class="rpwp-button get-started"><span class="gloss"></span>Get Started</button>
        <?php endif;?>
        <?php if ($get_params_string):foreach ($get_params as $name=>$value):?>
        <input name="<?php echo $name?>" type="hidden" value="<?php echo $value?>" />
        <?php endforeach; endif;?>
        <input name="plan" type="hidden" value="<?php echo $plan;?>" />
	  </form>
    
    <?php } ?>
</div>