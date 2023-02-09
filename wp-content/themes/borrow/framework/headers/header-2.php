<?php global $borrow_option; ?>
<?php if($borrow_option['top_head']==true){ ?>
    <div class="top-bar">
      <!-- top-bar -->
      <div class="container">
          <div class="row">
                <?php echo htmlspecialchars_decode(do_shortcode($borrow_option['header_layout2'])); ?>
          </div>
      </div>
    </div>
<?php } ?>
<!-- Header-2 -->
<div class="<?php if( isset($borrow_option['header_fixed']) and $borrow_option['header_fixed']=='fixed' ) { echo 'header-transparent navbar-fixed-top'; }else{ borrow_header_class();} ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-6">
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
            <div class="<?php if($borrow_option['phone_layout2']!=''){echo 'col-xl-7';}else{echo '';} ?> col-md-9 col-sm-12 col-xs-12 navigation">
                <div id="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?> 
                </div>
                <!-- /.navigation start-->
            </div>
            <?php if($borrow_option['phone_layout2']!=''){ ?>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 d-none d-xl-block d-lg-block">
                <?php echo htmlspecialchars_decode(do_shortcode($borrow_option['phone_layout2'])); ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
