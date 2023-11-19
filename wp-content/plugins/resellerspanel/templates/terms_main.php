  <p>By using the <?php echo $GLOBALS['rp_info']['store_title']?> services, you acknowledge that you have read our set of legal documents and agree to be bound by the terms and conditions contained herein as well as all acceptable use policies incorporated by reference.</p>
  <div class="terms-left-col">
    <h2>Web Hosting Terms</h2>
    <div style="padding-left:5px;">
      <ul style="line-height:30px;">
        <li><a href="<?php echo get_permalink(get_option('rp_duoservers_terms'));?>">Web Hosting Terms Of Service</a></li>
        <li><a href="<?php echo get_permalink(get_option('rp_aup'));?>">Acceptable Use Policy</a></li>
        <li><a href="<?php echo get_permalink(get_option('rp_service_level_guarantees'));?>">Service Level Guarantees</a></li>
      </ul>
    </div>
  </div>
<?php if (
	(!empty($GLOBALS['rp_info']['vps_plans']) && is_array($GLOBALS['rp_info']['vps_plans'])) || 
	(!empty($GLOBALS['rp_info']['vps_openvz_plans']) && is_array($GLOBALS['rp_info']['vps_openvz_plans'])) || 
	(!empty($GLOBALS['rp_info']['vps_kvm_plans']) && is_array($GLOBALS['rp_info']['vps_kvm_plans']))
) { ?>
  <div class="terms-left-col">
    <h2>Virtual Private Servers Terms</h2>
    <div style="padding-left:5px;">
      <ul style="line-height:30px;">
        <li><a href="<?php echo get_permalink(get_option('rp_vps_terms'));?>">Virtual Private Servers Terms of Service</a></li>
        <li><a href="<?php echo get_permalink(get_option('rp_aup_vps'));?>">Virtual Private Servers Acceptable Use Policy</a></li>
        <li><a href="<?php echo get_permalink(get_option('rp_service_level_guarantees_vps'));?>">Virtual Private Servers Service Level Guarantees</a></li>
      </ul>
    </div>
  </div>
  <?php }?>
  <?php if(is_array($GLOBALS['rp_info']['semi_dedicated_plans']) and !empty($GLOBALS['rp_info']['semi_dedicated_plans'])){ ?>
  <div class="terms-left-col">
  <h2>Semi-dedicated Servers Terms</h2>
<div style="padding-left:5px;">
<ul style="line-height:30px;">
	<li><a href="<?php echo get_permalink(get_option('rp_semi_terms_of_service'));?>">Semi-dedicated Servers Terms of Service</a></li>
  	<li><a href="<?php echo get_permalink(get_option('rp_aup_semi'));?>">Semi-dedicated Servers Acceptable Use Policy</a></li>
  	<li><a href="<?php echo get_permalink(get_option('rp_service_level_guarantees_semi'));?>">Semi-dedicated Servers Service Level Guarantees</a></li>
</ul></div>
</div>
  <?php }?>
  <?php if(is_array($GLOBALS['rp_info']['dedicated_plans']) and !empty($GLOBALS['rp_info']['dedicated_plans'])){ ?>
<div class="terms-left-col"><h2>Dedicated Servers Terms</h2>
<div style="padding-left:5px;">
<ul style="line-height:30px;">
	<li><a href="<?php echo get_permalink(get_option('rp_dedicated_terms_of_service'));?>">Dedicated Servers Terms of Service</a></li>
  	<li><a href="<?php echo get_permalink(get_option('rp_acceptable_use_policy_dedicated'));?>">Dedicated Servers Acceptable Use Policy</a></li>
	<li><a href="<?php echo get_permalink(get_option('rp_service_level_guarantees_dedicated'));?>">Dedicated Servers Service Level Guarantees</a></li>
</ul></div></div>
  <?php }?>
<div class="terms-left-col">
  <h2>General Terms</h2>
<div style="padding-left:5px;">
<ul style="line-height:30px;">
  <li><a href="<?php echo get_permalink(get_option('rp_duoservers_order_verification'));?>">Order Verification Policy</a></li>
  <li><a href="<?php echo get_permalink(get_option('rp_duoservers_privacy_policy'));?>">Privacy Policy</a></li>
  <li><a href="<?php echo get_permalink(get_option('rp_domain_name_registration_agreement'));?>">Domain Name Registration Agreement</a></li>
  <li><a href="<?php echo get_permalink(get_option('rp_domain_name_dispute_resolution_policy'));?>">Domain Name Resolution Policy</a></li>
  <li><a href="<?php echo get_permalink(get_option('rp_id_protection_service_agreement'));?>">ID Protection Service Agreement</a></li>
  <li><a href="<?php echo get_permalink(get_option('rp_cancellation_refund_policy'));?>">Cancellation Refund Policy</a></li>
</ul>
  </div>
</div>
  <div class="clear"></div>
  <br />
  <br />
