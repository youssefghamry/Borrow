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
<div class="footer section-space80">
    <!-- footer -->
  <div class="container">
    <div class="row">
      <?php if($borrow_option['logo_ft'] != ''){ ?>
      <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="footer-logo">
              <img src="<?php echo esc_url($borrow_option['logo_ft']['url']); ?>" alt="">
          </div>
      </div>
      <?php } ?>   
      <?php if (class_exists('newsletter')) { ?>
      <?php if($borrow_option['newsleter_ft']==true){ ?>
      <div class="col-md-8 col-sm-8 col-xs-12">
        <div class="row">
          <div class="col-md-5">
              <h3 class="newsletter-title"><?php echo esc_attr($borrow_option['title_news']); ?></h3>
          </div>
          <div class="col-md-7">
              <div class="newsletter-form">
                  <!-- Newsletter Form -->
                  <form action="<?php echo esc_url( home_url( '/' ) ); ?>?na=s" method="post" >
                      <div class="input-group">
                          <input type="email" class="form-control" id="newsletter" name="ne" placeholder="<?php echo esc_attr($borrow_option['placeholder']); ?>" required>
                          <span class="input-group-btn">
                              <button class="btn btn-default" type="submit"><?php echo esc_attr($borrow_option['button_news']); ?></button>
                          </span> 
                      </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <?php } ?>
    </div>
    <hr class="dark-line">
  </div>
  <?php if(isset($borrow_option['footer-select-pages']) and $borrow_option['footer-select-pages'] != "" ){              
        $about_id = $borrow_option['footer-select-pages'];
        $about_page = get_post($about_id);
        echo do_shortcode( $about_page->post_content );
  }else{ ?>
  <div class="container">
    <div class="row">
      <?php get_sidebar('footer'); ?>
    </div>
  </div>
  <?php } ?>
</div>
<div class="tiny-footer">
  <!-- tiny footer -->
  <div class="container">
      <div class="row">
          <?php if($borrow_option['footer_ltext']!=''){ ?>
          <div class="col-md-6 col-sm-6 col-xs-6">
              <p><?php echo wp_kses( $borrow_option['footer_ltext'], wp_kses_allowed_html('post') ); ?></p>
          </div>
          <?php } ?>
          <?php if($borrow_option['footer_rtext']!=''){ ?>
          <div class="col-md-6 col-sm-6 text-right col-xs-6">
              <p><?php echo wp_kses( $borrow_option['footer_rtext'], wp_kses_allowed_html('post') ); ?></p>
          </div>
          <?php } ?>
      </div>
  </div>
</div>

<?php if(isset($borrow_option['theme_layout']) and $borrow_option['theme_layout']=="boxed_version" ){ ?>
</div><!-- Close .boxed-wrapper -->
<?php } ?>

<a id="to-the-top"><i class="fa fa-angle-up"></i></a> 
<?php wp_footer(); ?>
</body>
</html>
