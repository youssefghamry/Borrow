<?php get_header(); 
$ac_link = get_post_meta(get_the_ID(),'_cmb_action_link', true);
$ac_text = get_post_meta(get_the_ID(),'_cmb_action_text', true);
$link1 = get_post_meta(get_the_ID(),'_cmb_link_out_1', true);
$text1 = get_post_meta(get_the_ID(),'_cmb_text_1', true);
$text2 = get_post_meta(get_the_ID(),'_cmb_text_2', true);
$link2 = get_post_meta(get_the_ID(),'_cmb_link_out_2', true);
global $borrow_option;
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
<?php if (have_posts()){ ?>
		<?php while (have_posts()) : the_post()?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php }else {
		esc_html_e('Page Canvas For Page Builder', 'borrow'); 
}?>
<?php get_footer(); ?>