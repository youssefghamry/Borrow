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
    <!-- /.top-bar -->
<?php } ?>

<div class="header-2 <?php borrow_header_class();  ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-6">
                <!-- logo -->
                <?php if($borrow_option['logo']['url'] != ''){ ?>
                    <div class="logo"> 
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img src="<?php echo esc_url($borrow_option['logo']['url']); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
                        </a>
                    </div>
                <?php } ?>   
            </div>
            <!-- logo -->
            <div class="col-md-9 text-right hidden-xs">
                <div class="header-action">
                    <?php if($borrow_option['head_bt1']!=''){ ?><a href="<?php echo esc_url($borrow_option['head_link1']); ?>" class="btn btn-primary"><?php echo esc_attr($borrow_option['head_bt1']); ?></a><?php } ?>
                    <?php if($borrow_option['head_link1']!=''){ ?><a href="<?php echo esc_url($borrow_option['head_link2']); ?>" class="btn btn-default"><?php echo esc_attr($borrow_option['head_bt2']); ?></a><?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="navigation">
                        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
                    </div>
                    <!-- /.navigation start-->
                </div>
            </div>
        </div>
    </div>
</div>