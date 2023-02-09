<?php
/*
 * Template Name: Template Home Tabbed
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
<body <?php body_class(); ?>>

<div class="header header-regular <?php borrow_header_class();  ?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-2 col-md-3 col-sm-12 col-12">
                <!-- logo -->
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <?php if($borrow_option['logo']['url'] != ''){ ?>
                            <img src="<?php echo esc_url($borrow_option['logo']['url']); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
                        <?php } ?>   
                    </a>
                </div>
            </div>
            <!-- logo -->
            <div class="col-xl-7 col-lg-8 col-md-12 col-sm-12 col-12">
                <!-- navigation start-->
                <div id="navigation">                    
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
                </div>
                <!-- /.navigation start-->
            </div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 d-none d-xl-block d-lg-block">
                <div class="nav-call-info">
                    <p class="mb0 text-bold"><?php echo htmlspecialchars_decode(do_shortcode($borrow_option['phone_header_tabbed'])); ?></p>
                </div>
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
<?php get_footer(); ?>