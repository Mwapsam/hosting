<?php
if($GLOBALS['dsearch_form_action'] == 'same') $furl = '';
elseif(!empty($GLOBALS['dsearch_form_action'])) $furl = $GLOBALS['dsearch_form_action'];
else $furl = get_permalink(get_option('rp_domain_names_1'));
if(empty($_POST['domain_tld']) and array_key_exists($tld,(array)$domains)) $_POST['domain_tld']=$tld;
$tlds_info = _rp_get_domains_info();
?>
<script language="javascript">
//var tldpromos = new Array("<?php echo implode('","',array_keys($GLOBALS['rp_info']['domain_prices']))?>");
</script>
<form action="<?php echo $furl;?>" method="post" id="domainForm1">
        <input title="text" name="domain_sld" id="domain_sld" value="<?php echo (!empty($_POST['domain_sld']))?trim($_POST['domain_sld']):'Ex. my-website-name'?>" onfocus="if(this.value == 'Ex. my-website-name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Ex. my-website-name'; }" />
        <select name="domain_tld" id="domain_tld">
		<?php foreach((array)$domains as $key=>$value){ 
			if (empty($tlds_info[$key]['register']) && empty($tlds_info[$key]['transfer']))
				continue;
		?>
            <option value="<?php echo $key?>" <?php if($_POST['domain_tld'] == $key) echo 'selected'; ?>>.<?php echo $key?></option>
        <?php } ?>
        </select>
        <input type="image" class="domain-search-button" src="<?php bloginfo('template_directory'); ?>/images/bg-domain-search-button.png" style="vertical-align:bottom" alt="GO" />
        <?php if($plan){ ?><input type="hidden" name="plan" value="<?php echo (int)$plan?>" /><?php } ?>
        <?php if(!empty($free)){ ?><input type="hidden" name="free" value="yes" /><?php } ?>
    </form>