<?php get_header();
global $borrow_option;
$rate_nb = get_post_meta(get_the_ID(),'_cmb_rate_number', true);
$rate_text = get_post_meta(get_the_ID(),'_cmb_rate_text', true);
$link1 = get_post_meta(get_the_ID(),'_cmb_link_out_1', true);
$text1 = get_post_meta(get_the_ID(),'_cmb_text_1', true);
$text2 = get_post_meta(get_the_ID(),'_cmb_text_2', true);
$link2 = get_post_meta(get_the_ID(),'_cmb_link_out_2', true); 
$nav_text_1 = get_post_meta(get_the_ID(),'_cmb_nav_text_1', true);
$nav_link_1 = get_post_meta(get_the_ID(),'_cmb_nav_link_1', true);
$nav_text_2 = get_post_meta(get_the_ID(),'_cmb_nav_text_2', true); 
$nav_link_2 = get_post_meta(get_the_ID(),'_cmb_nav_link_2', true);
$nav_text_3 = get_post_meta(get_the_ID(),'_cmb_nav_text_3', true);
$nav_link_3 = get_post_meta(get_the_ID(),'_cmb_nav_link_3', true);
$nav_text_4 = get_post_meta(get_the_ID(),'_cmb_nav_text_4', true);
$nav_link_4 = get_post_meta(get_the_ID(),'_cmb_nav_link_4', true);
$nav_text_5 = get_post_meta(get_the_ID(),'_cmb_nav_text_5', true);
$nav_link_5 = get_post_meta(get_the_ID(),'_cmb_nav_link_5', true);
$nav_text_6 = get_post_meta(get_the_ID(),'_cmb_nav_text_6', true);
$nav_link_6 = get_post_meta(get_the_ID(),'_cmb_nav_link_6', true);
?>

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
             <div class="col-md-5 col-sm-4 col-xs-12">
              <h1 class="page-title"><?php the_title(); ?></h1>
            </div>
            <div class="col-md-7 col-sm-8 col-xs-12">
              <div class="row">
                <div class="col-md-4 hidden-sm hidden-xs">
                  <div class="rate-block">
                    <h1 class="rate-number"><?php echo htmlspecialchars_decode($rate_nb); ?></h1>
                    <small><?php echo htmlspecialchars_decode($rate_text); ?></small> 
                  </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="btn-action"> 
                    <a href="<?php echo esc_url($link1); ?>" class="btn btn-primary"><?php echo esc_attr($text1); ?></a> 
                    <a href="<?php echo esc_url($link2); ?>" class="btn btn-default"><?php echo esc_attr($text2); ?></a> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="sub-nav" id="sub-nav">
            <ul class="nav nav-justified">
                <?php if($nav_text_1!=''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($nav_link_1); ?>" class="page-scroll"><?php echo esc_attr($nav_text_1); ?></a></li><?php } ?>
                <?php if($nav_text_2!=''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($nav_link_2); ?>" class="page-scroll"><?php echo esc_attr($nav_text_2); ?></a></li><?php } ?>
                <?php if($nav_text_3!=''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($nav_link_3); ?>" class="page-scroll"><?php echo esc_attr($nav_text_3); ?></a></li><?php } ?>
                <?php if($nav_text_4!=''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($nav_link_4); ?>" class="page-scroll"><?php echo esc_attr($nav_text_4); ?></a></li><?php } ?>
                <?php if($nav_text_5!=''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($nav_link_5); ?>" class="page-scroll"><?php echo esc_attr($nav_text_5); ?></a></li><?php } ?>
                <?php if($nav_text_6!=''){ ?><li class="nav-item"><a class="nav-link" href="<?php echo esc_url($nav_link_6); ?>" class="page-scroll"><?php echo esc_attr($nav_text_6); ?></a></li><?php } ?>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- subheader close -->

<?php if (have_posts()){ ?>
        <?php while (have_posts()) : the_post()?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php }else {
        esc_html_e('Page Canvas For Page Builder', 'borrow'); 
}?>

<?php get_footer(); ?>