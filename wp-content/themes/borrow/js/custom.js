// JavaScript Document
(function($) {
    //Sticky Menu
    $(document).on('ready', function() {
    "use strict";

        $('.animsition').animsition();

        if ($(window).width() >= "768") {
            $(".sticky-header").sticky({ topSpacing: 0 });
        }

        });
        if ($(window).width() >= "768") {
            $("#sub-nav").sticky({ topSpacing: 100 });
        }       

        //Add class
        $('#navigation ul li').find('a').not("a[href^='#']").each(function(i, ojb) {
            $(this).addClass('animsition-link');
        });

        //update 6 - 2018
        $('.sub-nav ul.nav-justified li').find('a').each(function(i, ojb) {
            $(this).addClass('page-scroll');
        });

        //Scroll Menu
        $('a.page-scroll').on('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top-150
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });

        //Isotope
        $(function() {

            $('.isotope').isotope({
                itemSelector: '.gallery-masonry',
                masonry: {}
            });

            $('.isotope-s1').isotope({
                itemSelector: '.service-masonry',
                masonry: {}
            });

            $('.isotope-s2').isotope({
                itemSelector: '.service-masonry',
                masonry: {}
            });

        });

        //Overlay 
        $(document).ready(function() {
            if (Modernizr.touch) {
                // show the close overlay button
                $(".close-overlay").removeClass("hidden");
                // handle the adding of hover class when clicked
                $(".img").click(function(e) {
                    if (!$(this).hasClass("hover")) {
                        $(this).addClass("hover");
                    }
                });
                // handle the closing of the overlay
                $(".close-overlay").click(function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    if ($(this).closest(".img").hasClass("hover")) {
                        $(this).closest(".img").removeClass("hover");
                    }
                });
            } else {
                // handle the mouseenter functionality
                $(".img").mouseenter(function() {
                        $(this).addClass("hover");
                    })
                    // handle the mouseleave functionality
                    .mouseleave(function() {
                        $(this).removeClass("hover");
                    });
            }
        });

        //Portfolio
        $(document).on('ready', function() {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
                columnWidth: '.col-sm-3'
            }
        });

        $('.portfolioFilter a').on('click', function() {
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

        //Owl
        $(".service").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            navigation: true, // Show next and prev buttons
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet:[768,2],
            itemsMobile:[479,1],
            pagination: false

        });

        $(".testimonial-slide").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            navigation: true, // Show next and prev buttons
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet:[768,2],
            itemsMobile:[479,1],
            pagination: false

        });

        $(".blog-slide").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            navigation: true, // Show next and prev buttons
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet:[768,2],
            itemsMobile:[479,1],
            pagination: false

        });

        $("#post-gallery").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            pagination: false,
            autoPlay: true
        });

        // Back To Top
        // --------------------------------------------------
        var offset = 450;
        var duration = 500;
        $(window).on('scroll', function(){
             if ($(this).scrollTop() > offset) {
                    $('#to-the-top').fadeIn(duration);
                } else {
                    $('#to-the-top').fadeOut(duration);
                }
        });
       
        $('#to-the-top').on('click', function(event){
            event.preventDefault();
            $('html, body').animate({scrollTop: 0}, duration);
            return false;
        });

        // Initialize popup as usual
        $('.image-link').magnificPopup({ 
            type: 'image',
            mainClass: 'mfp-with-zoom', // this class is for CSS animation below

            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it
                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function 

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function(openerElement) {
                  // openerElement is the element on which popup was initialized, in this case its <a> tag
                  // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                  return openerElement.is('img') ? openerElement : openerElement.find('img');
                }        
            },
            image: {
                // options for image content type
                titleSrc: 'title'
            },
            gallery: {
                // options for gallery
                enabled: true
            },
        });// JavaScript Document

        // popup youtube, video, gmaps
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: true
        });
    });
})(jQuery);