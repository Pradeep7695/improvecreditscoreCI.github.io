(function($) {
    'use strict'; // Start of use strict
    /*------------------------------------------------------------------
        Header Navigation
    ------------------------------------------------------------------*/
    var windowSize = $(window).width();

    if (windowSize >= 767) {
        $('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });
    }
    /*------------------------------------------------------------------
    	Scrool Top
    ------------------------------------------------------------------*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });
    /*------------------------------------------------------------------
        Loader
    ------------------------------------------------------------------*/
  
        $("#dvLoading").fadeOut("fast");
    
	    /*------------------------------------------------------------------
   	  Downarrow 
	 ------------------------------------------------------------------*/
      var bottom_arrow = $('.bottom_row, .banner-content');
    $(window).on('scroll', function() {
        var st = $(this).scrollTop();
    });
	$("#bottom_row").on('click', function(event) {
        var get_header_height = $(".banner-wrapper").outerHeight();
        var fixed_bar_height = $("header").outerHeight();
        $("html, body").animate({
            scrollTop: get_header_height - fixed_bar_height
        }, "slow");
        return false;
    });
	
})(jQuery);
    /*------------------------------------------------------------------
    	theme color change
    ------------------------------------------------------------------*/
    var theme_settings = $(".theme-settings").find(".theme-color");
    theme_settings.on('click', function() {
        var val = $(this).attr('data-color');
        $('#style_theme').attr('href', 'css/' + val + '.css');
        $(".logo-change").attr('src', 'images/logo-' + val + '.png');
		$(".logo-change-mobile").attr('src', 'images/mobile-logo-' + val + '.png');
		$(".footer-logo-change").attr('src', 'images/footer-logo-' + val + '.png');
        theme_settings.removeClass('theme-active');
        theme_settings.addClass('theme-active');
        return false;
    });
    $(".theme-click").on('click', function() {
        $("#switcher").toggleClass("active");
        return false;
    });