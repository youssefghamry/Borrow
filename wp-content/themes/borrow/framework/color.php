<?php 
if(!function_exists('borrow_custom_frontend_style')){
    function borrow_custom_frontend_style(){
        global $borrow_option;
?>        
    <style type="text/css">    	
		/* 01 MAIN STYLES
		****************************************************************************************************/
		::selection {
		  color: #fff;
		  background: <?php echo esc_attr( $borrow_option['main-color'] ); ?>;
		}
		::-moz-selection {
		  color: #fff;
		  background: <?php echo esc_attr( $borrow_option['main-color'] ); ?>;
		}
		/* default color: #00cb8b */

		<?php if($borrow_option['preload-switch']!=false){ ?>
			/* Preload Colors */
			.royal_preloader, html {background-color: <?php echo esc_attr($borrow_option['preload-background-color']); ?>;}			
			#royal_preloader.royal_preloader_progress .royal_preloader_meter {background-color:<?php echo esc_attr( $borrow_option['main-color'] ); ?>;}
			#royal_preloader.royal_preloader_progress .royal_preloader_percentage {color:<?php echo esc_attr( $borrow_option['preload-text-color'] ); ?>;}
		<?php } ?>

		a,	
		#navigation > ul > li:hover > a, #navigation ul ul li:hover > a, #navigation ul ul li a:hover,
		.btn-link:hover, .meta-date, .icon-default, .text-big, .widget-footer ul li a:hover, .highlight,
		.sub-nav>.nav li a:hover, .rate-number, .designation, .widget_categories li a:hover, .widget_archive li a:hover,
		.name, .prev-link:hover, .next-link:hover, .testimonial-title, .msg, 
		div.vc_tta-color-white.vc_tta-style-classic .vc_tta-tab.vc_active>a,
		div.vc_tta-color-white.vc_tta-style-classic .vc_tta-tab>a:hover, .page-breadcrumb .breadcrumb a span:hover,
		.widget-social ul li a:hover, #navigation li.current-menu-parent > a, #navigation li.current-menu-item > a,
		.st-tabs .nav-tabs.nav-justified>.active>a, .st-tabs .nav-tabs.nav-justified>.active>a:focus, 
		.st-tabs .nav-tabs.nav-justified>.active>a:hover, .procwss-v2 .circle, .btn-default-link, .pink-circle.circle,
		#navigation.small-screen #menu-button, #sub-nav.small-screen #menu-button, .text-pink
		{color:<?php echo esc_attr( $borrow_option['main-color'] ); ?>;}

		a.expand:hover {color: #fff;}
		.btn-default, .cd-top, #service .owl-next:hover, #service .owl-prev:hover, #to-the-top,
		.slide-ranger .ui-widget-header, .widget_tag_cloud a:hover, .st-pagination .pagination>li:first-child>span,
		.st-pagination .pagination>li>a:focus, .st-pagination .pagination>li>a:hover, .st-pagination .pagination>li>span:focus,
		.st-pagination .pagination>li>span:hover, .slider > .dragger, #navigation.small-screen #menu-button:before,
 		#sub-nav.small-screen #menu-button:before, .customer-quote-circle

		{background-color:<?php echo esc_attr( $borrow_option['main-color'] ); ?>;}

		#service .owl-next:hover, #service .owl-prev:hover, 
		div.vc_tta.vc_tta-accordion .vc_tta-panel.vc_active .vc_tta-controls-icon-position-left .vc_tta-controls-icon:before,
		.slide-ranger .ui-slider .ui-slider-handle, .slide-ranger .ui-widget.ui-widget-content, .widget_tag_cloud a:hover,
		.st-pagination .pagination>li:first-child>span, .st-pagination .pagination>li>a:focus, .st-pagination .pagination>li>a:hover,
		.st-pagination .pagination>li>span:focus, .st-pagination .pagination>li>span:hover, .slider > .dragger,
		#navigation.small-screen #menu-button:after, #sub-nav.small-screen #menu-button:after, .procwss-v2 .circle,
		.pink-circle.circle
		{border-color:<?php echo esc_attr($borrow_option['main-color']); ?>;}

		.mfp-arrow-right:after, .mfp-arrow-right .mfp-a 
		{border-left-color:<?php echo esc_attr( $borrow_option['main-color'] ); ?>;}
		
		.border-top-default 
		{border-top-color:<?php echo esc_attr( $borrow_option['main-color'] ); ?>;}

		.btn-link:hover 
		{border-bottom-color:<?php echo esc_attr( $borrow_option['main-color'] ); ?>;}

		.slider > .dragger{
		background-image: -webkit-linear-gradient(top, <?php echo esc_attr( $borrow_option['main-color'] ); ?>, <?php echo esc_attr( $borrow_option['main-color'] ); ?>);
		}
		.btn-default:hover {
			background-color:<?php echo esc_attr( $borrow_option['main-color-hover'] ); ?>;
		}
		.btn-default:hover {
			border-color:<?php echo esc_attr( $borrow_option['main-color-hover'] ); ?>;
		}
		/* main color 2: #15549a */
		a:focus, a:hover, 
		.btn-link, .circle, .icon-primary,.testimonial-name-1, .big-title,
		.post-block .meta-comments a:hover, .post-related-content a:hover,
		.feature-left .feature-icon, .testimonial-name-inverse,
		div.vc_tta-color-white.vc_tta-style-classic .vc_tta-panel .vc_tta-panel-title>a:hover,
		.page-breadcrumb .breadcrumb a span, .page-breadcrumb .breadcrumb, .meta-author a:hover

		{color:<?php echo esc_attr( $borrow_option['main-color-2'] ); ?>;}

		.bg-custom, .top-bar, .btn-primary

		{background-color:<?php echo esc_attr( $borrow_option['main-color-2'] ); ?>;}

		.circle 
			{border-color:<?php echo esc_attr( $borrow_option['main-color-2'] ); ?>;}

		.btn-primary, .btn-link
		{border-bottom-color:<?php echo esc_attr( $borrow_option['main-color-2'] ); ?>;}

		.mail-text
		{border-right-color:<?php echo esc_attr( $borrow_option['main-color-2'] ); ?>;}

		.btn-primary:hover {
			background-color:<?php echo esc_attr( $borrow_option['main-color-hover2'] ); ?>;
		}
		.btn-primary:hover {
			border-color:<?php echo esc_attr( $borrow_option['main-color-hover2'] ); ?>;
		}
		/* background color top header */

		div.top-bar

		{background-color:<?php echo esc_attr( $borrow_option['bg_top_head'] ); ?>;}


		/* color text top header */

		.top-text a, .top-bar

		{color:<?php echo esc_attr( $borrow_option['color_top_head'] ); ?>;}

		/* bg color header static */

		.header, .header-2

		{background-color:<?php echo esc_attr( $borrow_option['bg_head_static']['rgba'] ); ?>;}

		/* text color header static */

		#navigation > ul > li > a 

		{color:<?php echo esc_attr( $borrow_option['text_head_static']['rgba'] ); ?>;}


		/* bg color header sticky */

		.is-sticky .header, .is-sticky .header-2

		{background-color:<?php echo esc_attr( $borrow_option['bg_head_sticky']['rgba'] ); ?>;}

		/* text color header sticky */

		.is-sticky #navigation > ul > li > a 
		{color:<?php echo esc_attr( $borrow_option['text_head_sticky']['rgba'] ); ?>;}

		/** Customize css code **/
		<?php echo htmlspecialchars_decode($borrow_option['custom-css']); ?>
    </style>
<?php        
    }
}
add_action('wp_head', 'borrow_custom_frontend_style');