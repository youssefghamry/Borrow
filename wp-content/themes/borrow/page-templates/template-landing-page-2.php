<?php
/*
 * Template Name: Template Landing Page 2
 * Description: A Page Template with a Page Builder design.
 */
?>
<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package borrow
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php global $borrow_option; ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <!-- Favicons
    ================================================== -->
    <?php borrow_custom_favicon(); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class('animsition'); ?>>
<div class="header header-wide header-landing-2 <?php borrow_header_class();  ?>">
    <div class="container<?php if($borrow_option['header_fullwidth']==true){echo '-fluid';} ?>">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="branding">
                        <?php if($borrow_option['logo']['url'] != ''){ ?>
                            <img src="<?php echo esc_url($borrow_option['logo_landing_2']['url']); ?>" class="logo" alt="<?php echo get_bloginfo( 'name' ); ?>">
                        <?php } ?> 
                    </a>
                </div>
            </div>
            <!-- logo -->
            <div class="col-xl-10 col-lg-10 col-md-9 col-sm-12 col-12 text-right pdt10">
                <?php echo htmlspecialchars_decode(do_shortcode($borrow_option['header_landing'])); ?>
            </div>
        </div>
    </div>
</div>

<?php if (have_posts()){ ?>
	<?php while (have_posts()) : the_post()?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php }else {
		esc_html_e('Page Canvas For Page Builder', 'borrow'); 
	}?>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package borrow
 */
global $borrow_option; ?>
<div class="section-space40 bg-light ft-landing-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb30">
                <div class="logo">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="branding">
                            <?php if($borrow_option['logo']['url'] != ''){ ?>
                                <img src="<?php echo esc_url($borrow_option['logo_landing']['url']); ?>" alt="">
                            <?php } ?> 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-right mt20  mb30">
                <div class="">
                    <?php echo htmlspecialchars_decode(do_shortcode($borrow_option['footer_right_landing'])); ?>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <?php echo wp_kses( $borrow_option['footer_landing_rtext'], wp_kses_allowed_html('post') ); ?>
            </div>
        </div>
    </div>
</div>
<?php if($borrow_option['footerld_bottom']!=''){ ?>
<div class="section-space40 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <?php echo wp_kses( $borrow_option['footerld_bottom'], wp_kses_allowed_html('post') ); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- /.footer-section -->
<!-- back to top icon -->
<a id="to-the-top"><i class="fa fa-angle-up"></i></a> 
<?php wp_footer(); ?>
</body>
</html>
