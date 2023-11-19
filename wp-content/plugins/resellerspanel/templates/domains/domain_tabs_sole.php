<ul class="domain-tabs">
	<li><a href="<?php if($type=='domain_name_hosting'){ ?>#hosting" class="current<?php }else{?><?php echo get_permalink(get_option('rp_domain_names_hosting'));?><?php }?>">Domain Name + Hosting</a></li>
	<li><a href="<?php if($type=='domain_name_only'){ ?>#domains" class="current<?php }else{?><?php echo get_permalink(get_option('rp_domain_names_only'));?><?php }?>">Domain Name Only</a></li>
	<li><a href="<?php if($type=='domain_names_tld_info'){ ?>#tld_details" class="current<?php }else{?><?php echo get_permalink(get_option('rp_domain_names_tld_info'));?><?php }?>">Domain TLD Details</a></li>
</ul>
<div class="domain-panes">
	<div<?php if($type=='domain_name_hosting'){ ?> id="hosting"<?php }elseif($type=='domain_name_only'){?> id="domians"<?php }elseif($type=='domain_names_tld_info'){?> id="tld_details"<?php }?>><?php if($type=='domain_name_hosting'){ ?>[rp_tld_hosting_price]<?php }elseif($type=='domain_name_only'){?>[rp_tld_price]<?php }elseif($type=='domain_names_tld_info'){?>[rp_tld_info]<?php }?></div>
</div>