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

<?php if(isset($borrow_option['theme_layout']) and $borrow_option['theme_layout']=="boxed_version" ){ ?>
<!-- Open .boxed-wrapper -->
<div class="boxed-wrapper">
<?php } ?>

<?php 
    if(isset($borrow_option['version_type']) and $borrow_option['version_type']=="header2" ){
        get_template_part('framework/headers/header-2'); 
    }elseif(isset($borrow_option['version_type']) and $borrow_option['version_type']=="header3" ){
        get_template_part('framework/headers/header-3'); 
    }elseif(isset($borrow_option['version_type']) and $borrow_option['version_type']=="header_bank" ){
        get_template_part('framework/headers/header-bank'); 
    }else{ 
?>

<!-- header close -->
<div class="collapse searchbar" id="searchbar">
  <div class="search-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="input-group">
                <input type="text" class="search-query form-control" name="s" placeholder="<?php echo esc_html_e('Search for...','borrow'); ?>" value="<?php echo get_search_query() ?>">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="submit"><?php echo esc_html_e('Go!','borrow'); ?></button>
                </span> 
            </div>
            <!-- /input-group -->
          </form>
        </div>
            <!-- /.col-lg-6 -->
      </div>
    </div>
  </div>
  <a class="search-close" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="true"><i class="fa fa-close"></i></a>
</div>

<?php if($borrow_option['top_head']==true){ ?>
  <div class="top-bar">
    <!-- top-bar -->
    <div class="container">
      <div class="row">
      <?php if($borrow_option['header_text']!=''){ ?>
        <div class="col-md-4 hidden-xs hidden-sm">
            <p class="mail-text"><?php echo htmlspecialchars_decode(do_shortcode($borrow_option['header_text'])); ?></p>
        </div>
        <?php } ?>
      <?php if($borrow_option['header_right']!=''){ ?>
        <div class="col-md-8 col-sm-12 text-right col-xs-12">
            <div class="top-nav"> 
              <?php echo htmlspecialchars_decode(do_shortcode($borrow_option['header_right'])); ?>
            </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php } ?>

<div class="header <?php borrow_header_class();  ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-12 col-xs-6">
        <!-- logo -->
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <?php if($borrow_option['logo']['url'] != ''){ ?>
                <img src="<?php echo esc_url($borrow_option['logo']['url']); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
            <?php }else{ ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php echo get_bloginfo( 'name' ); ?>">
            <?php } ?>   
          </a>
        </div>
      </div>
      <div class="col-md-9 col-sm-12 col-xs-12">
        <div id="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
        </div>
      </div>
      <div class="col-md-1 hidden-sm">
          <!-- search start-->
          <div class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>