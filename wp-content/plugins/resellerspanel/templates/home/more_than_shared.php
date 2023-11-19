<div id="service-box" class="left second">
  <div id="box-title">
	<h2><?php echo $title;?></h2>
  </div>
  <div id="box-content">
	<ul>
    <?php if($price_from_dedicated or $price_from_semi_dedicated or $price_from_vps_kvm or $price_from_vps_openvz){?>
	  <?php if($price_from_dedicated){?><li><a href="<?php echo $page_url_dedicated;?>">Dedicated Servers @ <strong><?php echo $price_from_dedicated;?></strong> /mo</a></li><?php }?>
	  <?php if($price_from_semi_dedicated){?><li><a href="<?php echo $page_url_semi_dedicated;?>">Semi-Dedicated @ <strong><?php echo $price_from_semi_dedicated;?></strong> /mo</a></li><?php }?>
	  <?php if($price_from_vps_kvm){?><li><a href="<?php echo $page_url_vps_kvm;?>">KVM VPS @ <strong><?php echo $price_from_vps_kvm;?></strong> /mo</a></li><?php }?>
	  <?php if($price_from_vps_openvz){?><li><a href="<?php echo $page_url_vps_openvz;?>">OpenVZ VPS @ <strong><?php echo $price_from_vps_openvz;?></strong> /mo</a></li><?php }?>
    <?php }elseif(is_array($onlyshared_text) and !empty($onlyshared_text)){
		foreach($onlyshared_text as $value){?>
      		<li><?php echo trim($value);?></li>
    <?php }
	}else{?>
    	<li>A User-Friendly Control Panel</li>
    	<li>A Web Applications Installer</li>
    	<li>Free-of-Charge Website Themes</li>
    	<li>A 24/7/365 Customer Support Service</li>
    <?php }?>
	</ul>
	<div class="clear"></div>
  </div>
</div>