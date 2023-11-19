<div id="sidebar_accordion">
	<h4><a href="#">Domain Name + Hosting</a></h4>
	<div>
		[rp_tld_hosting_price variant="2"]
        <center><a class='inline_compare' href="#compare_overlay_tld_hosting">See All Available TLDs</a></center>
	</div>
	<h4><a href="#">Domain Name Only</a></h4>
	<div>
		[rp_tld_price variant="2"]
        <center><a class='inline_compare' href="#compare_overlay_tld_only">See All Available TLDs</a></center>
	</div>
	<h4><a href="#">Domain TLD Details</a></h4>
	<div>
		[rp_tld_info variant="2"]
        <center><a class='inline_compare' href="#compare_overlay_tld_details">See All Available TLDs</a></center>
	</div>
</div>
<script language="javascript">
jQuery(document).ready(function($) {
	$(function(){
		$( "#sidebar_accordion" ).accordion({
			autoHeight: false,
			'active': <?php echo $active;?>
		});
	});
});
</script>
<div style='display:none'>
    <div id='compare_overlay_tld_hosting' style='padding:10px; background:#fff;'>[rp_tld_hosting_price]</div>
    <div id='compare_overlay_tld_only' style='padding:10px; background:#fff;'>[rp_tld_price]</div>
    <div id='compare_overlay_tld_details' style='padding:10px; background:#fff;'>[rp_tld_info]</div>
</div>