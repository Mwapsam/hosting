// RP JavaScript Init File
jQuery(document).ready(function($) {
	$(function(){
		// Expand / Collapse
		$('a[rel=expand_domain_years]').click(function() {
			$('#domain_years_short_'+$(this).attr('tld').replace(".", "\\.")).hide();
			$('#domain_years_long_'+$(this).attr('tld').replace(".", "\\.")).show('blind', {}, 500);
			$(this).hide();
			$('[rel=collapse_domain_years][tld='+$(this).attr('tld').replace(".", "\\.")+']').show();
			return false;
		});
		$('a[rel=collapse_domain_years]').click(function() {
			$('#domain_years_short_'+$(this).attr('tld').replace(".", "\\.")).show();
			$('#domain_years_long_'+$(this).attr('tld').replace(".", "\\.")).hide();
			$(this).hide();
			$('[rel=expand_domain_years][tld='+$(this).attr('tld').replace(".", "\\.")+']').show();
			return false;
		});
		
		
	})
});