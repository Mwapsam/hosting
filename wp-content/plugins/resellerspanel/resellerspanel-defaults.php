<?php
if ($_POST) {
	if (!current_user_can('manage_options'))
	    wp_die(__('Cheatin&#8217; uh?'));
	$default_urls = array();
	foreach ($_POST['default_urls'] as $key=>$value) {
		if (array_key_exists($value,$rp_install_pages) || $key=='articles' || $key=='datacenters')
			$GLOBALS['rp_settings']['default_urls'][$key] = $value;
	}
	update_option('rp_settings', $GLOBALS['rp_settings'] );

	// start child->parent change
	foreach ($GLOBALS['rp_install_pages'] as $option => $cnt) {
		if ($page_id = get_option($option)) {
			if (!empty($cnt['post_parent']) and preg_match('/^default_page_/',$cnt['post_parent'])) {
				if ($cnt['post_parent'] == 'default_page_domains') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['domain_search']);
				} else if ($cnt['post_parent'] == 'default_page_shared') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['shared_hosting']);
				} else if ($cnt['post_parent'] == 'default_page_vps') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['vps_hosting']);
				} else if ($cnt['post_parent'] == 'default_page_dedicated') {
					$post_parent_id = get_option($GLOBALS['rp_settings']['default_urls']['dedicated_hosting']);
				}
				wp_update_post( array(
					'ID' => $page_id,
					'post_parent' => ($post_parent_id)?$post_parent_id:'',
				));
			}
		}
	}
	// end child->parent change
	
	$rp_plugin_error = '<div class="updated fade"><p>Your default urls information has been updated.</strong></p></div>';
}
?>
<style type="text/css">
select{
	width:170px;
	margin:5px;
}
</style>
<div class="wrap">
<?php if ($rp_plugin_error):?>
<div class="error">
<?php echo $rp_plugin_error;?>
</div>
<?php endif;?>
<h2>Resellers Panel Defaults</h2>
<h3>URLS</h3>
<form method="post" action="">
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7">
  <tr>
    <td width="180" align="center"><strong>Type</strong></td>
    <td width="180"><strong>Page ID</strong></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Domain Search Form</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[domain_search]">
    	<?php foreach ($GLOBALS['durls']['domain_search'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['domain_search']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Shared Hosting</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[shared_hosting]">
    	<?php foreach ($GLOBALS['durls']['shared_hosting'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['shared_hosting']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">VPS Hosting</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[vps_hosting]">
    	<?php foreach ($GLOBALS['durls']['vps_hosting'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['vps_hosting']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">OpenVZ VPS Hosting</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[vps_openvz_hosting]">
    	<?php foreach ($GLOBALS['durls']['vps_openvz_hosting'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['vps_openvz_hosting']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">KVM VPS Hosting</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[vps_kvm_hosting]">
    	<?php foreach ($GLOBALS['durls']['vps_kvm_hosting'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['vps_kvm_hosting']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
<?php /*
  <tr>
    <td bgcolor="#FFFFFF">Virtuozzo VPS Hosting</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[vps_virtuozzo_hosting]">
    	<?php foreach ($GLOBALS['durls']['vps_virtuozzo_hosting'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['vps_virtuozzo_hosting']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
 */ ?>
  <tr>
    <td bgcolor="#FFFFFF">Semi-Dedicated Hosting</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[semi_dedicated_hosting]">
    	<?php foreach ($GLOBALS['durls']['semi_dedicated_hosting'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['semi_dedicated_hosting']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Dedicated Hosting</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[dedicated_hosting]">
    	<?php foreach ($GLOBALS['durls']['dedicated_hosting'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['dedicated_hosting']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Why Us</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[whyus]">
    	<?php foreach ($GLOBALS['durls']['whyus'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['whyus']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Data Centers</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[datacenters]">
    	<?php foreach ($GLOBALS['durls']['datacenters'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['datacenters']==$page_id) echo 'selected="selected"'?>>Type <?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Articles</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[articles]">
    	<?php foreach ($GLOBALS['durls']['articles'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['articles']==$page_id) echo 'selected="selected"'?>>Type <?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF">Web App Installer</td>
    <td bgcolor="#FFFFFF">
    <select name="default_urls[application_installer]">
    	<?php foreach ($GLOBALS['durls']['application_installer'] as $page_id) { ?>
    	<option value="<?php echo $page_id; ?>" <?php if ($GLOBALS['rp_settings']['default_urls']['application_installer']==$page_id) echo 'selected="selected"'?>><?php echo $page_id; ?></option>
        <?php } ?>
    </select>
    </td>
  </tr>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
</form>
<br />

