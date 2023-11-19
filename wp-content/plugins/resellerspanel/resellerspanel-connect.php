<?php
if (!isset($rp_info)) $rp_info=false;
$rp_wrong_login=false;
$rp_plugin_error=false;
$rp_wrong_login_msg='';

// test api and its user name and password
function rp_test_api($new_rp_api=false){
	global $rp_settings, $rp_wrong_login, $rp_wrong_login_msg, $rp_plugin_error, $rp_api, $rp_countries, $rp_crypt;
	try{
		require_once RSP_PATH.'/lib/rp_paymentapi.php';
		// TODO $rp_api_url should be hardcoded in rp_paymentapi construct function if is constant or it should be user generated
		if (!$rp_api || $new_rp_api)
			try {
				$rp_url = 'http://api.duoservers.com/';

				if (isset($rp_settings['user_plain']))
					$user = $rp_settings['user_plain'];
				else if (isset($rp_settings['user']))
					$user = $rp_crypt->decrypt($rp_settings['user']);
				else
					$user = '';

				if (isset($rp_settings['pass_plain']))
					$pass = $rp_settings['pass_plain'];
				else if (isset($rp_settings['pass']))
					$pass = $rp_crypt->decrypt($rp_settings['pass']);
				else
					$pass = '';

				$rp_api = new rp_paymentapi($rp_url, $user, $pass);
			} catch (Exception $e) {
				//$rp_plugin_error = '<div class="updated fade"><p>Plugin has experienced error <br /> <strong>'.$e->getMessage().'</strong></p></div>';
				$rp_wrong_login = true;
				$rp_wrong_login_msg = $e->getMessage();
			}

		if (!isset($rp_plugin_error) && isset($rp_settings['user_plain'],$rp_settings['pass_plain']))
			$rp_countries = $rp_api->command('countries' , 'get' , null, false);

	} catch (rp_paymentapi_exception $e){
		if ($e->code) {
			$rp_wrong_login = true;
			$rp_wrong_login_msg = $e->getMessage();
		}
	}
	_rp_info_fetch();
}

if (isset($_POST['del_cache']) && $_POST['del_cache']=='yes') {
	$cache_dir = dirname( __FILE__ ) . '/tmp/rp_paymentapi/';
	if (is_dir($cache_dir)){ 
		$files = scandir($cache_dir); 
		foreach ($files as $file) { 
			if ($file != "." && $file != "..")
				if (filetype($cache_dir."/".$file) != "dir")
					@unlink($cache_dir."/".$file);
		}
	} 

	if (!isset($rp_settings['user_plain']) || !isset($rp_settings['pass_plain'])) {
		$rp_settings['user_plain'] = $rp_crypt->decrypt($rp_settings['user']);
		$rp_settings['pass_plain'] = $rp_crypt->decrypt($rp_settings['pass']);
		update_option('rp_settings', $rp_settings );
	}

	rp_test_api();
	$rp_plugin_error = '<div class="updated fade"><p>Your store information has been updated.</strong></p></div>';
} else if ($_POST) {
	if (!current_user_can('manage_options'))
		wp_die(__('Cheatin&#8217; uh?'));

	//$rp_settings['user'] = isset($_POST['rp_user']) && $_POST['rp_user'] ? $rp_crypt->encrypt(stripslashes_deep($_POST['rp_user'])) : '';
	//$rp_settings['pass'] = isset($_POST['rp_pass']) && $_POST['rp_pass'] ? $rp_crypt->encrypt(stripslashes_deep($_POST['rp_pass'])) : '';

	//if (isset($_POST['rp_user']) && isset($_POST['p_clear'])) {
	$rp_settings['user_plain'] = isset($_POST['rp_user']) ? $_POST['rp_user'] : '';
	$rp_settings['pass_plain'] = isset($_POST['rp_pass']) ? $_POST['rp_pass'] : '';
	//} else if (function_exists('mcrypt_encrypt')) {
	//}

	$rp_settings['support_opt'] = stripslashes_deep(isset($_POST['support_opt']) && $_POST['support_opt']?$_POST['support_opt']:'us_phones');
	//$rp_settings['plugin_version'] = 0;
	$rp_settings['store_texts'] = 0;

	update_option('rp_settings', $rp_settings );
	rp_test_api(true);
	remove_action('admin_notices', 'rp_admin_warning_no_login');
} else {
	rp_test_api();
}

?>
<div class="wrap">
<h2>Resellers-Panel connection settings</h2>
<?php if($rp_wrong_login):?>
<div class="error">
<?php if($rp_wrong_login_msg) echo '<p>'.$rp_wrong_login_msg.'</p>'; else { ?>
<h3>Invalid username and/or password.</h3>
<p>If your username and password are valid make sure you have activated Resellers Panel API for &quot;<strong><?php echo isset($rp_settings['user_plain']) ? $rp_settings['user_plain'] : '' ?></strong>&quot; Store!</p>
<?php } ?>
</div>
<?php endif;?>
<?php if($rp_plugin_error):?>
<div class="error">
<?php echo $rp_plugin_error;?>
</div>
<?php endif;?>
<form method="post" action="">
    <?php settings_fields( 'rp-settings-group' ); ?>
    <?php do_settings_sections( 'rp-settings-group' ); ?>
<?php
if (isset($rp_settings['user_plain']))
	$user = $rp_settings['user_plain'];
else if (isset($rp_settings['user']))
	$user = $rp_crypt->decrypt($rp_settings['user']);
else
	$user = '';

if (isset($rp_settings['pass_plain']))
	$pass = $rp_settings['pass_plain'];
else if (isset($rp_settings['pass']))
	$pass = $rp_crypt->decrypt($rp_settings['pass']);
else
	$pass = '';
?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row"><strong>Store Name</strong><br>(Resellers Panel Control Panel)</th>
        <td><input style="width: 200px;" type="text" name="rp_user" value="<?php echo $user ?>"></td>
        </tr>
        <tr valign="top">
        <th scope="row"><strong>Password</strong><br>(Resellers Panel Control Panel)</th>
        <td><input style="width: 200px;" type="password" name="rp_pass" value="<?php echo $pass ?>"></td>
        </tr>
        <?php if (isset($rp_info['company'])): ?>
        <tr valign="top">
        <th scope="row">Support phone</th>
        <td><select style="width: 200px;" name="support_opt" >
        <option value="us_phones"<?php if ($rp_settings['support_opt'] == 'us_phones') echo ' selected="selected"'?>>US: <?php echo join(', ', $rp_info['company']['us_phones'])?></option>
        <option value="uk_phones"<?php if ($rp_settings['support_opt'] == 'uk_phones') echo ' selected="selected"'?>>UK: <?php echo join(', ', $rp_info['company']['uk_phones'])?></option>
        <option value="au_phones"<?php if ($rp_settings['support_opt'] == 'au_phones') echo ' selected="selected"'?>>AU: <?php echo join(', ', $rp_info['company']['au_phones'])?></option>
        </select></td>
        </tr>
        <?php endif;?>
        
    </table>
    <p class="submit">
    <input type="submit" class="button-primary" value="Save Changes" />
    </p>
</form>
<?php if (isset($GLOBALS['rp_info']['store_id'])):?>
    <br/>
<form method="post" action="">
    <input type="submit" class="button-primary" value="Delete Cache and Refresh Account Info" />
    <input type="hidden" name="del_cache" value="yes" />
</form>
    <br/>
<h3>Account info:</h3>
	<table class="form-table">
        <tr valign="top">
        <th scope="row">Store name</th>
        <td><?php echo $GLOBALS['rp_info']['store_name']?></td>
        </tr>
        <tr valign="top">
        <th scope="row">Store ID</th>
        <td><?php echo $GLOBALS['rp_info']['store_id']?></td>
        </tr>
        
    </table>
    <br />
<h3>Hosting Plans:</h3>
    <?php if($GLOBALS['rp_info']['shared_plans']){ ?>
	<strong>Shared Hosting Plans</strong>
	<table width="400" border="0" cellpadding="4" cellspacing="1" bgcolor="#F2F2C7">
		<tr>
			<th align="left" width="300"><strong>Plan Name</strong></th>
			<th><strong>Plan ID</strong></th>
		</tr>
	<?php foreach ($GLOBALS['rp_info']['shared_plans'] as $plan_id=>$value) {?>
        <tr valign="top">
			<td bgcolor="#FFFFFF"><?php echo $value['name'];?></th>
			<td bgcolor="#FFFFFF" align="center"><?php echo $plan_id;?></td>
        </tr>
	<?php }?>
	</table>
    <br/>
    <?php } ?>
    <?php if($GLOBALS['rp_info']['vps_plans']){ ?>
	<strong>Virtuozzo VPS Plans</strong>
	<table width="400" border="0" cellpadding="4" cellspacing="1" bgcolor="#F2F2C7">
		<tr>
			<th align="left" width="300"><strong>Plan Name</strong></th>
			<th><strong>Plan ID</strong></th>
		</tr>
	<?php foreach ($GLOBALS['rp_info']['vps_plans'] as $plan_id=>$value) {?>
        <tr valign="top">
			<td bgcolor="#FFFFFF"><?php echo $value['name'];?></th>
			<td bgcolor="#FFFFFF" align="center"><?php echo $plan_id;?></td>
        </tr>
	<?php }?>
	</table>
    <br/>
    <?php } ?>
<?php if (!empty($GLOBALS['rp_info']['vps_kvm_plans'])) { ?>
	<strong>KVM VPS Plans</strong>
	<table width="400" border="0" cellpadding="4" cellspacing="1" bgcolor="#F2F2C7">
		<tr>
			<th align="left" width="300"><strong>Plan Name</strong></th>
			<th><strong>Plan ID</strong></th>
		</tr>
	<?php foreach ($GLOBALS['rp_info']['vps_kvm_plans'] as $plan_id=>$value) {?>
        <tr valign="top">
			<td bgcolor="#FFFFFF"><?php echo $value['name'];?></th>
			<td bgcolor="#FFFFFF" align="center"><?php echo $plan_id;?></td>
        </tr>
	<?php }?>
	</table>
    <br/>
<?php } ?>
    <?php if($GLOBALS['rp_info']['vps_openvz_plans']){ ?>
	<strong>OpenVZ VPS Plans</strong>
	<table width="400" border="0" cellpadding="4" cellspacing="1" bgcolor="#F2F2C7">
		<tr>
			<th align="left" width="300"><strong>Plan Name</strong></th>
			<th><strong>Plan ID</strong></th>
		</tr>
	<?php foreach ($GLOBALS['rp_info']['vps_openvz_plans'] as $plan_id=>$value) {?>
        <tr valign="top">
			<td bgcolor="#FFFFFF"><?php echo $value['name'];?></th>
			<td bgcolor="#FFFFFF" align="center"><?php echo $plan_id;?></td>
        </tr>
	<?php }?>
	</table>
    <br/>
    <?php } ?>
    <?php if($GLOBALS['rp_info']['semi_dedicated_plans']){ ?>
	<strong>Semi-Dedicated Plans</strong>
	<table width="400" border="0" cellpadding="4" cellspacing="1" bgcolor="#F2F2C7">
		<tr>
			<th align="left" width="300"><strong>Plan Name</strong></th>
			<th><strong>Plan ID</strong></th>
		</tr>
	<?php foreach ($GLOBALS['rp_info']['semi_dedicated_plans'] as $plan_id=>$value) {?>
        <tr valign="top">
			<td bgcolor="#FFFFFF"><?php echo $value['name'];?></th>
			<td bgcolor="#FFFFFF" align="center"><?php echo $plan_id;?></td>
        </tr>
	<?php }?>
	</table>
    <br/>
    <?php } ?>
    <?php if($GLOBALS['rp_info']['dedicated_plans']){ ?>
	<strong>Dedicated Plans</strong>
	<table width="400" border="0" cellpadding="4" cellspacing="1" bgcolor="#F2F2C7">
		<tr>
			<th align="left" width="300"><strong>Plan Name</strong></th>
			<th><strong>Plan ID</strong></th>
		</tr>
	<?php foreach ($GLOBALS['rp_info']['dedicated_plans'] as $plan_id=>$value) {?>
        <tr valign="top">
			<td bgcolor="#FFFFFF"><?php echo $value['name'];?></th>
			<td bgcolor="#FFFFFF" align="center"><?php echo $plan_id;?></td>
        </tr>
	<?php }?>
	</table>
    <br/>
    <?php } ?>

    
<?php endif;?>
</div>