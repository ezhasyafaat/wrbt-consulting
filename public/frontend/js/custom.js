(function($) {
	
   "use strict";	
	
	var mainwindow = $(window);
	
    /*------------------------------------------------------------------	
	Hide Loading Box (Preloader)
	------------------------------------------------------------------*/
	  $("#dvLoading").fadeOut("fast");
	 /*------------------------------------------------------------------
	  map zooming 	 
	  ------------------------------------------------------------------*/
        $('.google-map').on('click', function() {
            $('.google-map').find('iframe').css("pointer-events", "auto");
        });
 		/*------------------------------------------------------------------
        Animation Numbers
        ------------------------------------------------------------------*/
        $('.animateNumber').each(function() {
            var num = $(this).attr('data-num');

            var top = $(document).scrollTop() + (mainwindow.height());
            var pos_top = $(this).offset().top;
            if (top > pos_top && !$(this).hasClass('active')) {
                $(this).addClass('active').animateNumber({
                    number: num
                }, 2000);
            }
        });
        $('.animateProcent').each(function() {
            var num = $(this).attr('data-num');
            var percent_number_step = jQuery.animateNumber.numberStepFactories.append('%');
            var top = $(document).scrollTop() + (mainwindow.height());
            var pos_top = $(this).offset().top;
            if (top > pos_top && !$(this).hasClass('active')) {
                $(this).addClass('active').animateNumber({
                    number: num,
                    numberStep: percent_number_step
                }, 2000);
                $(this).css('width', num + '%');
            }
        });
	 /*------------------------------------------------------------------
     Scroll Top
     ------------------------------------------------------------------*/
    $.scrollUp({
        scrollText: '<i class="fa fa-chevron-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });		
	/*------------------------------------------------------------------
   	Submenu Dropdown Toggle
   	------------------------------------------------------------------*/
	if($('.theme-header li.dropdown ul').length){
		$('.theme-header li.dropdown').append('<div class="dropdown-btn"><span class="fa fa-angle-down"></span></div>');
		
		//Dropdown Button
		$('.theme-header li.dropdown .dropdown-btn').on('click', function() {
			$(this).prev('ul').slideToggle(500);
		});
		
		
		/*------------------------------------------------------------------
		Disable dropdown parent link
		------------------------------------------------------------------*/
		$('.navigation li.dropdown > a').on('click', function(e) {
			e.preventDefault();
		});
	}


	/*------------------------------------------------------------------
	show hide search box
	------------------------------------------------------------------*/
		$('.ex-search-bar').on("click", function(e) {
			$('.ex-search-box').slideToggle();
			e.stopPropagation(); 
		});

		$(document).on("click", function(e) {	
			if(!(e.target.closest('.ex-search-box'))){	
				$(".ex-search-box").slideUp();   		
			}
	   });
	   
	/*------------------------------------------------------------------
    FAQ
    ------------------------------------------------------------------*/
    $('.panel-heading a').on('click', function() {
        $('.panel-heading').removeClass('active');
        $(this).parents('.panel-heading').addClass('active');
    });
	
 /*----------------------------------------------------
                  Portfolio Isotope
   ----------------------------------------------------*/
    var body_s = $('body'),
        window_s = $(window);

    //======= ISOTOP FILTERING JS  ========//
    window_s.on('load', function() {
        var grid_container = $('.portfolio-container'),
            grid_item = $('.work');


        grid_container.imagesLoaded(function() {
            grid_container.isotope({
                itemSelector: '.work',
                layoutMode: 'masonry'
            });
        });

        $('.portfolio-filter').find('li').on('click', function(e) {
            $('.portfolio-filter li.active').removeClass('active');
            $(this).addClass('active');
            var selector = $(this).attr('data-filter');
            grid_container.isotope({
                filter: selector
            });
            return false;
            e.preventDefault();
        });
    });


    //======= MAGNIFIC POPUP ========//
    $('.work a').magnificPopup({
        type: 'inline'
    });	
})(window.jQuery);