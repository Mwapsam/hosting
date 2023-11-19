<?php
$_show_shared = !empty($GLOBALS['rp_info']['shared_plans']) && !empty($GLOBALS['rp_info']['datacenters']['shared']) && array_key_exists($dc_key, $GLOBALS['rp_info']['datacenters']['shared']) ? true : false;
$_show_ovz = !empty($GLOBALS['rp_info']['vps_openvz_plans']) && !empty($GLOBALS['rp_info']['datacenters']['vps_openvz']) && array_key_exists($dc_key, $GLOBALS['rp_info']['datacenters']['vps_openvz']) ? true : false;
$_show_virtuozzo = !empty($GLOBALS['rp_info']['vps_plans']) && !empty($GLOBALS['rp_info']['datacenters']['vps']) && array_key_exists($dc_key, $GLOBALS['rp_info']['datacenters']['vps']) ? true : false;
$_show_kvm = !empty($GLOBALS['rp_info']['vps_kvm_plans']) && !empty($GLOBALS['rp_info']['datacenters']['vps_kvm']) && array_key_exists($dc_key, $GLOBALS['rp_info']['datacenters']['vps_kvm']) ? true : false;
$_show_semidedicated = !empty($GLOBALS['rp_info']['semi_dedicated_plans']) && !empty($GLOBALS['rp_info']['datacenters']['semidedicated']) && array_key_exists($dc_key, $GLOBALS['rp_info']['datacenters']['semidedicated']) ? true : false;
$_show_dedicated = !empty($GLOBALS['rp_info']['dedicated_plans']) && !empty($GLOBALS['rp_info']['datacenters']['dedicated']) && array_key_exists($dc_key, $GLOBALS['rp_info']['datacenters']['dedicated']) ? true : false;
?>
<ul class="dc-tabs">
<?php if ($_show_shared) { ?><li><a href="#shared_content">Shared Hosting</a></li><?php } ?>
<?php if ($_show_ovz) { ?><li><a href="#vps_openvz_content">OpenVZ VPS</a></li><?php } ?>
<?php if ($_show_kvm) { ?><li><a href="#vps_kvm_content">KVM VPS</a></li><?php } ?>
<?php if ($_show_virtuozzo) { ?><li><a href="#vps_virtuozzo_content">Virtuozzo VPS</a></li><?php } ?>
<?php if ($_show_semidedicated) { ?><li><a href="#semi_dedicated_content">Semi-Dedicated Plans</a></li><?php } ?>
<?php if ($_show_dedicated) { ?><li><a href="#dedicated_content">Dedicated Servers</a></li><?php } ?>
</ul>
<br>
<div class="dc-tabs-panes">
  <?php if ($_show_shared) { ?>
    <div id="shared_content" class="tab-content">
		[dc_plans dc="<?php echo $dc;?>" type="shared"]
		[rp_plans_short type="shared_compare" plans="" best="" dc="<?php echo $dc_key;?>"]
		[/dc_plans]
	</div>
  <?php } ?>
  <?php if ($_show_ovz) { ?>
    <div id="vps_openvz_content" class="tab-content">
		[dc_plans dc="<?php echo $dc;?>" type="vps_openvz"]
		[rp_plans_short type="vps_openvz" url_vps_openvz="" plans="" best="" dc="<?php echo $dc_key;?>" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>']
		We have more OpenVZ virtual servers available - find the one that is right for you.
		[/rp_plans_short]
		[/dc_plans]
	</div>
  <?php } ?>
  <?php if ($_show_kvm) { ?>
    <div id="vps_kvm_content" class="tab-content">
		[dc_plans dc="<?php echo $dc;?>" type="vps_kvm"]
		[rp_plans_short type="vps_kvm" url_vps_kvm="" plans="" best="" dc="<?php echo $dc_key;?>" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>']
		We have several KVM virtual servers available - find the one that is right for you.
		[/rp_plans_short]
		[/dc_plans]
	</div>
  <?php } ?>
  <?php if ($_show_virtuozzo) { ?>
    <div id="vps_virtuozzo_content" class="tab-content">
		[dc_plans dc="<?php echo $dc;?>" type="vps_virtuozzo"]
		[rp_plans_short type="vps_virtuozzo" url_vps_virtuozzo="" plans="" best="" dc="<?php echo $dc_key;?>" button='<button type="submit" class="rpwp-button tower-box-button colorize"><span class="gloss"></span>order now</button>']
		We have more Virtuozzo virtual servers available - find the one that is right for you.
		[/rp_plans_short]
		[/dc_plans]
	</div>
  <?php } ?>
  <?php if ($_show_semidedicated) { ?>
    <div id="semi_dedicated_content" class="tab-content">
		[dc_plans dc="<?php echo $dc;?>" type="semi_dedicated"]
		[rp_plans_short type="semi_dedicated_compare" url_semi_dedicated="" plans="" best="" dc="<?php echo $dc_key;?>"]
		[/dc_plans]
	</div>
  <?php } ?>
  <?php if ($_show_dedicated) { ?>
    <div id="dedicated_content" class="tab-content">
		[dc_plans dc="<?php echo $dc;?>" type="dedicated"]
		[rp_plans_short type="dedicated_compare" url_dedicated="" plans="" best="" dc="<?php echo $dc_key;?>"]
		[/dc_plans]
	</div>
  <?php } ?>
</div>
<script>
(function($) {
	$("#dc-plans").tabs();
})(jQuery);
</script>