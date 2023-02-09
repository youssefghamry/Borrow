<?php
/*
 * Template Name: Template Landing Page
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
<div class="header <?php borrow_header_class();  ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 col-6">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="branding">
                	<?php if($borrow_option['logo']['url'] != ''){ ?>
                    	<img src="<?php echo esc_url($borrow_option['logo']['url']); ?>" class="logo" alt="<?php echo get_bloginfo( 'name' ); ?>">
                	<?php } ?> 
                </a>
                <!-- #branding -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 col-6 text-right"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-xs mt20"><?php esc_html_e('Back to Page','borrow'); ?></a></div>
        </div>
    </div>
    <!-- .container -->
</div>

<?php if (have_posts()){ ?>
	<?php while (have_posts()) : the_post()?>
		<?php the_content(); ?>
	<?php endwhile; ?>
	<?php }else {
		esc_html_e('Page Canvas For Page Builder', 'borrow'); 
	}?>
<?php get_footer(); ?>