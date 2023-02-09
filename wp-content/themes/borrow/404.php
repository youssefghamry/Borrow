<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package borrow
 */
global $borrow_option;
get_header(); ?>
<div class="page-header" <?php if($borrow_option['bg_blogpage'] != ''){ ?> style="background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url(<?php echo esc_url($borrow_option['bg_blogpage']['url']); ?>) no-repeat center;"<?php } ?>>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-breadcrumb">
          <?php if($borrow_option['bread-switch']==true){ ?>
             <ol class="breadcrumb">
                <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
                }?>
            </ol>
          <?php } ?>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="bg-white pinside30">
          <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
              <h1 class="page-title">
                 <h1 class="page-title"><?php esc_html_e('Error','borrow'); ?></h1>
              </h1>
            </div>
            <?php if($borrow_option['action_link']!=''){ ?>
            <div class="col-md-4 col-sm-5 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="btn-action"> <a href="<?php echo esc_url($borrow_option['action_link']); ?>" class="btn btn-default"><?php echo esc_attr($borrow_option['action_text']); ?></a> </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <?php if($borrow_option['sub_nav']!=''){ ?>
        <div class="sub-nav" id="sub-nav">
          <ul class="nav nav-justified">
            <?php echo htmlspecialchars_decode($borrow_option['sub_nav']); ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- subheader close -->
<div class=" ">
  <!-- content start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wrapper-content bg-white pinside60">
          <div class="row">
            <div class="offset-md-3 col-md-6 col-sm-12">
              <div class="error-img mb60">
                <img src="<?php echo esc_url($borrow_option['404_image']['url']); ?>" class="" alt="">
              </div>
              <div class="error-ctn text-center">
                <h2 class="msg"><?php esc_html_e('Sorry','borrow'); ?></h2>
                <h1 class="error-title mb40"><?php esc_html_e('Page Not Found','borrow'); ?></h1>
                <p class="mb40"><?php esc_html_e('The webpage you were trying to reach could not be found on the server, or that you typed in the URL incorrectly.','borrow'); ?></p>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-default text-center"><?php esc_html_e('Go to homepage','borrow'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
