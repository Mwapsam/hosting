<?php if($price_from_dedicated or $price_from_semi_dedicated or $price_from_vps_kvm or $price_from_vps_openvz){?>
    <h2><?php echo $title;?></h2>
    <ul>
	  <?php if($price_from_dedicated){?><li><a href="<?php echo $page_url_dedicated;?>">Dedicated Servers</a> - from <strong><?php echo $price_from_dedicated;?></strong> /mo</li><?php }?>
	  <?php if($price_from_semi_dedicated){?><li><a href="<?php echo $page_url_semi_dedicated;?>">Semi-Dedicated</a> - from <strong><?php echo $price_from_semi_dedicated;?></strong> /mo</li><?php }?>
	  <?php if($price_from_vps_kvm){?><li><a href="<?php echo $page_url_vps_kvm;?>">KVM VPS</a> - from <strong><?php echo $price_from_vps_kvm;?></strong> /mo</li><?php }?>
	  <?php if($price_from_vps_openvz){?><li><a href="<?php echo $page_url_vps_openvz;?>">OpenVZ VPS</a> - from <strong><?php echo $price_from_vps_openvz;?></strong> /mo</li><?php }?>
    </ul>
<?php }else{?>
    <h2>Hosting features</h2>
    <ul>
        <li>An Advanced Hosting Control Panel</li>
        <li>A web Apps Installer</li>
        <li>Free Website Templates</li>
        <li>A 24/7/365 Customer Support Service</li>
    </ul>
<?php }?>