<?php
/**
 * Template Name: Template Blog Two Columns
 */
global $borrow_option;
$ac_link = get_post_meta(get_the_ID(),'_cmb_action_link', true);
$ac_text = get_post_meta(get_the_ID(),'_cmb_action_text', true);
$link1 = get_post_meta(get_the_ID(),'_cmb_link_out_1', true);
$text1 = get_post_meta(get_the_ID(),'_cmb_text_1', true);
$text2 = get_post_meta(get_the_ID(),'_cmb_text_2', true);
$link2 = get_post_meta(get_the_ID(),'_cmb_link_out_2', true);
global $borrow_option;
get_header(); ?>

<!-- subheader begin -->
<div class="page-header" 
  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
        <?php $images = rwmb_meta( '_cmb_subheader_image', "type=image" ); ?>
            <?php if($images){ ?>              
                <?php  foreach ( $images as $image ) {  ?>
                      <?php $img = $image['full_url']; ?>
                      style="background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url(<?php echo esc_url($img); ?>) no-repeat center;"
                <?php } ?>                
            <?php } ?>
        <?php } ?>
  >
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
              <h1 class="page-title"><?php the_title(); ?></h1>
            </div>
            <?php if($ac_link !=''){ ?>
            <div class="col-md-4 col-sm-5 col-xs-12">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="btn-action"> <a href="<?php echo esc_url($ac_link); ?>" class="btn btn-default"><?php echo esc_attr($ac_text); ?></a> </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
        <div class="sub-nav" id="sub-nav">
          <ul class="nav nav-justified">
            <?php if($link1 != ''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($link1); ?>"><?php echo esc_attr($text1); ?></a></li><?php } ?>
            <?php if($link2 != ''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($link2); ?>"><?php echo esc_attr($text2); ?></a></li><?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- subheader close -->

<!-- content begin -->
<div class="">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="wrapper-content bg-white pinside40">
          <div class="row">
           <?php 
            $i=1;
              $args = array(    
                'paged' => $paged,
                'post_type' => 'post',
                );
              $wp_query = new WP_Query($args);
              while ($wp_query -> have_posts()): $wp_query -> the_post(); $i++; ?>
              <?php $format = get_post_format(); ?>
              <div class="col-md-6 col-sm-12 col-xs-12 <?php if($i%2==0){echo 'clear';} ?>">
                <div class=" ">
                  <div class="post-block mb30 ">
                    <?php if($format=='audio'){ $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>
                    <iframe style="width:100%" src="<?php echo esc_url( $link_audio ); ?>"></iframe>    
                    <?php } elseif($format=='video'){ $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>
                    <?php echo wp_oembed_get( $link_video ); ?>   
                    <?php } elseif($format=='gallery'){ ?>
                    <div id="post-gallery">
                      <?php if( function_exists( 'rwmb_meta' ) ) { ?>  
                          <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
                          <?php if($images){ ?>                                       
                              <?php foreach ( $images as $image ) {  ?>
                              <?php $img = $image['full_url']; ?>
                                <div class="post-img">
                                  <a href="<?php the_permalink(); ?>" class="imghover"><img src="<?php echo esc_url($img); ?>" alt=""></a>
                                </div> 
                              <?php } ?>
                          <?php } ?>
                      <?php } ?>
                    </div>   
                    <?php } elseif ($format=='image'){ ?>
                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>  
                      <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
                      <?php if($images){ ?>
                        <?php foreach ( $images as $image ) { ?>
                          <?php $img = $image['full_url']; ?>
                          <div class="post-img">
                            <a href="<?php the_permalink(); ?>" class="imghover"><img src="<?php echo esc_url($img); ?>" alt=""  class="img-responsive"></a>
                          </div>
                        <?php } ?>
                      <?php } } ?>
                    <?php }else{ ?>
                      <div class="post-img">
                        <a href="<?php the_permalink(); ?>" class="imghover"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?></a>
                      </div>
                    <?php } ?>
                    <div class="bg-white pinside40 outline">
                      <div class="post-header">
                        <h1><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h1>
                        <p class="meta"><span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="meta-author color-grey"><?php esc_html_e('by ','borrow'); ?> <?php the_author_posts_link(); ?></span></p>
                      </div>
                        <p><?php echo borrow_excerpt(20); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_html_e('Read more','borrow'); ?></a> 
                    </div>
                  </div>
                </div>
              </div>

              <?php endwhile;?> 
              <div class="col-md-12 text-center col-xs-12">
                <div class="st-pagination">
                  <?php echo borrow_pagination(); ?>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content close -->

<?php get_footer(); ?>