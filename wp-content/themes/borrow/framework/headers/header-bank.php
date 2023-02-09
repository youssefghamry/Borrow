<?php global $borrow_option; ?>
<div class="collapse searchbar" id="searchbar">
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="input-group">
                        <input type="text" name="s" class="search-query form-control" placeholder="<?php echo esc_html_e('Search for...','borrow'); ?>" value="<?php echo get_search_query() ?>">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><?php echo esc_html_e('Go!','borrow'); ?></button>
                        </span> 
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
        </div>
    </div>
</div>
<!-- /.top-bar -->
<div class="header-standard header <?php borrow_header_class();  ?>">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 col-6">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                          <?php if($borrow_option['logo']['url'] != ''){ ?>
                              <img src="<?php echo esc_url($borrow_option['logo']['url']); ?>" alt="<?php echo get_bloginfo( 'name' ); ?>">
                          <?php } ?>   
                        </a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-9 col-sm-12 col-12">
                    <div class="quick-info">
                        <?php echo htmlspecialchars_decode(do_shortcode($borrow_option['header_bank_layout'])); ?>
                        <?php if($borrow_option['head_bank_bt']!=''){ ?>
                            <span><a href="<?php echo esc_url($borrow_option['head_bank_bl']); ?>" class="btn btn-default btn-sm"><?php echo esc_attr($borrow_option['head_bank_bt']); ?></a></span>
                        <?php } ?>
                        <!-- search start-->
                        <?php if($borrow_option['searchbtn']==true){ ?>
                            <span class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </span>
                        <?php } ?>
                        <!-- /.search start-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light-blue">
        <div class="container">
            <div class="row">
                <!-- logo -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div id="navigation">
                    <!-- navigation start-->
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
                </div>
                    <!-- /.navigation start-->
                </div>
            </div>
        </div>
    </div>
</div>