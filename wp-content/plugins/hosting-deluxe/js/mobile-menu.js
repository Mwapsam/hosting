jQuery(document).ready(function($) {
	//Menu
        $('.menu-icon').on('click', function() {
                $('.menu-icon').toggleClass('glow');
                $('#header_top, #menu').slideToggle('medium');
                $('#rpwp-login-form-text').insertAfter( $('#rpwp-login-wrapper'));

				if ($('#contacts_top').length == 0) {
					$('#header_phone').insertBefore( $('#rpwp-login-wrapper'));
					$('#live_chat').insertAfter( $('#header_phone'));
					$('#header_phone, #live_chat').wrapAll( "<div id='contacts_top'></div>" );
				}

                $('#menu ul.dropdown li').click(function() {
                        $('#menu ul dropdown li ul.sub-menu').slideToggle('slow');
                });

                if($('#menu ul#menu-topmenu li').hasClass('current-menu-item')){
                        $('#menu ul#menu-topmenu li.current-menu-item ul.sub-menu, #menu ul#menu-topmenu li.current_page_parent ul.sub-menu').show();
                }
        });
})
