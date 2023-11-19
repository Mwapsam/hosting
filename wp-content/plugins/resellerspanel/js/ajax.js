var obj = new Object();

function getDomainResults(domain,tlds){
	jQuery.ajaxSetup({async:true});
	jQuery.get(
		// see tip #1 for how we declare global javascript variables
		MyAjax.ajaxurl,
		{
			// here we declare the parameters to send along with the request
			// this means the following action hooks will be fired:
			// wp_ajax_nopriv_myajax-submit and wp_ajax_myajax-submit
			action : 'domain_check',
	 
			// other parameters can be added along with "action"
			domain_sld: domain, 
			domain_tlds: tlds
		},
		function(data){
			if(typeof(data.error_msg) !== 'undefined') displayDomainRow(data, domain, tld);
			else
				jQuery.each(data.flags,function(key,value){
					obj.flag = value;
					displayDomainRow(obj, domain, key);
				});
		},
		"json"
	);
}


(function($){
var ajaxRequest;
jQuery.fn.liveSearch = function (conf) {
	var config = jQuery.extend({
		url:			MyAjax.ajaxurl, 
		id:				'jquery-live-search', 
		duration:		400, 
		typeDelay:		200,
		loadingClass:	'loading', 
		onSlideUp:		function () {}, 
		uptadePosition:	false
	}, conf);

	var liveSearch	= jQuery('#' + config.id);

	// Create live-search if it doesn't exist
	if (!liveSearch.length) {
		liveSearch = jQuery('<div id="' + config.id + '"></div>')
						.appendTo(document.body)
						.hide()
						.slideUp(0);

		// Close live-search when clicking outside it
		jQuery(document.body).click(function(event) {
			var clicked = jQuery(event.target);

			if (!(clicked.is('#' + config.id) || clicked.parents('#' + config.id).length || clicked.is('input'))) {
				liveSearch.slideUp(config.duration, function () {
					config.onSlideUp();
				});
			}
		});
	}

	return this.each(function () {
		var input							= jQuery(this).attr('autocomplete', 'off');
		var liveSearchPaddingBorderHoriz	= parseInt(liveSearch.css('paddingLeft'), 10) + parseInt(liveSearch.css('paddingRight'), 10) + parseInt(liveSearch.css('borderLeftWidth'), 10) + parseInt(liveSearch.css('borderRightWidth'), 10);

		// Re calculates live search's position
		var repositionLiveSearch = function () {
			var tmpOffset	= input.offset();
			var inputDim	= {
				left:		tmpOffset.left, 
				top:		tmpOffset.top, 
				width:		input.outerWidth(), 
				height:		input.outerHeight()
			};

			inputDim.topPos		= inputDim.top + inputDim.height;
			inputDim.totalWidth	= inputDim.width - liveSearchPaddingBorderHoriz;
			if(inputDim.totalWidth < 230) inputDim.totalWidth = 230;
			
			liveSearch.css({
				position:	'absolute', 
				left:		inputDim.left + 'px', 
				top:		inputDim.topPos + 'px',
				width:		inputDim.totalWidth + 'px'
			});
		};

		// Shows live-search for this input
		var showLiveSearch = function () {
			// Always reposition the live-search every time it is shown
			// in case user has resized browser-window or zoomed in or whatever
			repositionLiveSearch();

			// We need to bind a resize-event every time live search is shown
			// so it resizes based on the correct input element
			$(window).unbind('resize', repositionLiveSearch);
			$(window).bind('resize', repositionLiveSearch);

			liveSearch.slideDown(config.duration);
		};

		// Hides live-search for this input
		var hideLiveSearch = function () {
			liveSearch.slideUp(config.duration, function () {
				config.onSlideUp();
			});
		};

		input
			// On focus, if the live-search is empty, perform an new search
			// If not, just slide it down. Only do this if there's something in the input
			.focus(function () {
				if (this.value !== '') {
					// Perform a new search if there are no search results
					if (liveSearch.html() == '') {
						this.lastValue = '';
						input.keyup();
					}
					// If there are search results show live search
					else {
						// HACK: In case search field changes width onfocus
						//setTimeout(showLiveSearch, 1);
						var q = $.trim(this.value.toLowerCase()).replace(/[^a-z0-9-]/g, '').replace(/^-/, '');
						var mfunc = function(){
							showLiveSearch();
							if(q.length>10) liveSearch.css('width',(parseInt(liveSearch.css('width').replace(/px/g, ''))+q.length*5)+'px');
						}
						setTimeout(mfunc, 1);
					}
				}
			})
			// Auto update live-search onkeyup
			.keyup(function () {
				// Don't update live-search if it's got the same value as last time
				if (this.value != this.lastValue) {
					input.addClass(config.loadingClass);

					var q = $.trim($(this).val().toLowerCase()).replace(/[^a-z0-9-]/g, '').replace(/^-/, ''); 
					var tld = $('#domainForm1 #domain_tld option:selected').val();
					if (q.length>2) {
						var str_com = '<div class="live-search-res">'+q+'.com <img src="'+template_directory+'/images/ajax-loader.gif" /></div>';
						var str_net = '<div class="live-search-res">'+q+'.net <img src="'+template_directory+'/images/ajax-loader.gif" /></div>';
						var str_org = '<div class="live-search-res">'+q+'.org <img src="'+template_directory+'/images/ajax-loader.gif" /></div>';
						var str_couk = '<div class="live-search-res">'+q+'.co.uk <img src="'+template_directory+'/images/ajax-loader.gif" /></div>';
						var str_diff = '';
						if(tld !='com' && tld !='net' && tld !='org' && tld !='co.uk')
							str_diff =  '<div class="live-search-res">'+q+'.'+tld+' <img src="'+template_directory+'/images/ajax-loader.gif" /></div>';
						if(typeof(ajaxRequest)!=='undefined') ajaxRequest.abort();
						liveSearch.html(str_diff+str_com+str_net+str_org+str_couk);
						showLiveSearch();
					}
					else {
						hideLiveSearch();
					}
					
					if(q.length>10) liveSearch.css('width',(parseInt(liveSearch.css('width').replace(/px/g, ''))+q.length*5)+'px');

					// Stop previous ajax-request
					if (this.timer) {
						clearTimeout(this.timer);
					}
					// Start a new ajax-request in X ms
					this.timer = setTimeout(function () {
						ajaxRequest = jQuery.get(config.url, 
							{
								// here we declare the parameters to send along with the request
								// this means the following action hooks will be fired:
								// wp_ajax_nopriv_myajax-submit and wp_ajax_myajax-submit
								action : 'quick_domain_check',
						 
								// other parameters can be added along with "action"
								domain_sld: q, 
								domain_tld: tld
							},
							function (data) {
								input.removeClass(config.loadingClass);
	
								// Show live-search if results and search-term aren't empty
								if (data.length && q.length) {
									liveSearch.html(data);
									//showLiveSearch();
									//if(q.length>10) liveSearch.css('width',(parseInt(liveSearch.css('width').replace(/px/g, ''))+q.length*5)+'px');
								}
								//else {
								//	hideLiveSearch();
								//}
							});
					}, config.typeDelay);

					this.lastValue = this.value;
				}
			});
	});
};

$('#domainForm1 input[name="domain_sld"]').liveSearch();
})(jQuery);