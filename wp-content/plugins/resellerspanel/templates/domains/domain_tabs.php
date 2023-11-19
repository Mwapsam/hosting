<ul class="domain-tabs">
	<li><a href="#hosting">Domain Name + Hosting</a></li>
	<li><a href="#domains">Domain Name Only</a></li>
	<li><a href="#tld_details">Domain TLD Details</a></li>
</ul>
<div class="domain-panes">
	<div id="hosting"><?php echo rp_tld_hosting_price(array('id_protect'=>$id_protect)) ?></div>
	<div id="domains"><?php echo rp_tld_price(array('id_protect'=>$id_protect)) ?></div>
	<div id="tld_details"><?php echo rp_tld_info(array('id_protect'=>$id_protect)) ?></div>
</div>
<script>
(function($){
	    $("#domain-tables").tabs();
})(jQuery);
</script>