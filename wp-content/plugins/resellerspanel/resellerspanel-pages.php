<?php
if(!is_array($GLOBALS['rp_settings']['noupdate'])) $GLOBALS['rp_settings']['noupdate'] = array();
if($_POST['save']=='yes'){
	if ( !current_user_can('manage_options') )
	    wp_die(__('Cheatin&#8217; uh?'));
	$noupdate = array();
	if(is_array($_POST['noupdate'])){
		foreach($_POST['noupdate'] as $key=>$value){
			if(array_key_exists($key,$rp_install_pages)) $noupdate[] = $key;
		}
	}
	$GLOBALS['rp_settings']['noupdate'] = $noupdate;
	update_option('rp_settings', $GLOBALS['rp_settings'] );
	$rp_plugin_error = '<div class="updated fade"><p>Your information has been saved.</strong></p></div>';
}
?>
<div class="wrap">
<?php if($rp_plugin_error):?>
<div class="error">
<?php echo $rp_plugin_error;?>
</div>
<?php endif;?>
<h2>Resellers Panel Plugin Pages</h2>
<h3>Homes</h3>
<form action="" method="post">
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_install_pages'] as $key => $page){
	   if(get_option($key) === false) continue;
	   if($page['type'] != 'home') continue;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $key;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<br />
<?php /* ?>
<h3>Plan Pages</h3>
<form action="" method="post">
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_settings']['single_plan_pages'] as $key){
	   if(get_option($key) === false) continue;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $key;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<br />
<?php */ ?>
<h3>Product Pages</h3>
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_install_pages'] as $key => $page){
	   if(get_option($key) === false) continue;
	   if($page['type'] != 'product') continue;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $key;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<br />
<h3>Article Pages</h3>
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_install_pages'] as $key => $page){
	   if(get_option($key) === false) continue;
	   if($page['type'] != 'article') continue;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $key;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<br />
<h3>DC Pages</h3>
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_install_pages'] as $key => $page){
	   if(get_option($key) === false) continue;
	   if($page['type'] != 'datacenter') continue;

     //Special cases
    if ($key == 'rp_data_centers_berkshire_1')
      $link_title = 'rp_data_centers_berkshire_1';
    else if ($key == 'rp_data_centers_berkshire_2')
      $link_title = 'rp_data_centers_berkshire_2';
    else if ($key == 'rp_data_centers_steadfast_1')
      $link_title = 'rp_data_centers_steadfast_1';
    else if ($key == 'rp_data_centers_steadfast_2')
      $link_title = 'rp_data_centers_steadfast_2';
    else
      $link_title = $key;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $link_title;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<br />
<h3>Error Pages</h3>
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_install_pages'] as $key => $page){
	   if(get_option($key) === false) continue;
	   if($page['type'] != 'error') continue;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $key;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<br />
<h3>ToS Pages</h3>
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_install_pages'] as $key => $page){
	   if(get_option($key) === false) continue;
	   if($page['type'] != 'tos') continue;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $key;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<br />
<h3>Other Pages</h3>
<table cellpadding="3" cellspacing="1" border="0" bgcolor="#F2F2C7" width="780">
  <tr>
    <td width="200" align="center"><strong>Key</strong></td>
    <td><strong>Title</strong></td>
    <td width="80" align="center"><strong>Preview</strong></td>
    <td width="80" align="center"><strong>Edit</strong></td>
    <td width="80" align="center"><strong>Don't Update</strong></td>
  </tr>
  <?php foreach($GLOBALS['rp_install_pages'] as $key => $page){
	   if(get_option($key) === false) continue;
	   if(!empty($page['type'])) continue;
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><?php echo $key;?></td>
    <td bgcolor="#FFFFFF"><?php echo get_the_title(get_option($key));?></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_permalink(get_option($key));?>" target="_blank">Preview</a></td>
    <td bgcolor="#FFFFFF" align="center"><a href="<?php echo get_edit_post_link(get_option($key));?>">Edit</a></td>
    <td bgcolor="#FFFFFF" align="center"><input type="checkbox" name="noupdate[<?php echo $key;?>]" value="1" <?php if(in_array($key,$GLOBALS['rp_settings']['noupdate'])) echo 'checked="checked"'; ?> /></td>
  </tr>
  <?php }?>
</table>
<br />
<input type="submit" class="button-primary" value="Save Changes" />
<input type="hidden" name="save" value="yes" />
</form>
<br />

