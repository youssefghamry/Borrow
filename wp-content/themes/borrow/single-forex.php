<?php get_header(); 
$btn_text_s = get_post_meta(get_the_ID(),'_cmb_btn_text_s', true);
$btn_link_s = get_post_meta(get_the_ID(),'_cmb_btn_link_s', true);
$ac_link = get_post_meta(get_the_ID(),'_cmb_action_link', true);
$ac_text = get_post_meta(get_the_ID(),'_cmb_action_text', true);
$link1 = get_post_meta(get_the_ID(),'_cmb_link_out_1', true);
$text1 = get_post_meta(get_the_ID(),'_cmb_text_1', true);
$text2 = get_post_meta(get_the_ID(),'_cmb_text_2', true);
$link2 = get_post_meta(get_the_ID(),'_cmb_link_out_2', true);
$established = get_post_meta(get_the_ID(),'_cmb_established', true);
$location = get_post_meta(get_the_ID(),'_cmb_location', true);
$regulation = get_post_meta(get_the_ID(),'_cmb_regulation', true);
$offices = get_post_meta(get_the_ID(),'_cmb_offices', true);
$broker_type = get_post_meta(get_the_ID(),'_cmb_broker_type', true);
$leverage = get_post_meta(get_the_ID(),'_cmb_leverage', true);
$deposit = get_post_meta(get_the_ID(),'_cmb_deposit', true);
$spreads_stt = get_post_meta(get_the_ID(),'_cmb_spreads_stt', true);
$instruments = get_post_meta(get_the_ID(),'_cmb_instruments', true);
$platforms = get_post_meta(get_the_ID(),'_cmb_platforms', true);
$funding_methods = get_post_meta(get_the_ID(),'_cmb_funding_methods', true);
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
                  <div class="btn-action"> <a href="<?php echo esc_url($ac_link); ?>" class="btn btn-outline-primary btn-sm"><?php echo esc_attr($ac_text); ?></a> </div>
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
<div class="container">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="wrapper-content bg-white p-3 p-lg-5">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="mb40">
                          <div class="p-4 d-lg-flex justify-content-between border ">
                              <div class="mb-3 mb-lg-0">
                                  <?php if ( has_post_thumbnail() ) { ?>
                                    <?php the_post_thumbnail(); ?>
                                  <?php } ?>
                              </div>
                              <div class="d-flex align-items-center">
                                  <a href="<?php echo esc_url($btn_link_s); ?>" class="btn btn-default btn-sm"><?php echo esc_attr($btn_text_s); ?></a>
                              </div>
                          </div>
                          <ul class="list-group">
                              <li class="list-group-item rounded-0 border-top-0">
                                  <h4 class="mb-0"><?php the_title(); ?></h4>
                              </li>
                              <li class="list-group-item rounded-0 border-top-0 d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Established:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($established); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Location:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($location); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Regulation:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($regulation); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Offices:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($offices); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Broker type:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($broker_type); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Leverage:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($leverage); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Deposit:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($deposit); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Spreads:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span>
                                        <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                            <?php $images = rwmb_meta( '_cmb_spreads', "type=image" ); ?>
                                            <?php if($images){ ?>              
                                                <?php  foreach ( $images as $image ) {  ?>
                                                    <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="mr-2 align-baseline" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                                <?php } ?>                
                                            <?php } ?>
                                        <?php } ?>
                                        <?php echo esc_attr($spreads_stt); ?>
                                      </span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Instruments:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($instruments); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Platforms:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <span><?php echo esc_attr($platforms); ?></span>
                                  </div>
                              </li>
                              <li class="list-group-item d-md-flex">
                                  <div class="w-25">
                                      <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Funding methods:','borrow'); ?></span>
                                  </div>
                                  <div class="">
                                      <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                        <?php $images = rwmb_meta( '_cmb_asd', "type=image" ); ?>
                                          <?php if($images){ ?>
                                                <?php foreach ( $images as $image ) { ?>
                                                  <img  src="<?php echo esc_url($image['full_url']); ?>" class="mr-2 align-baseline" alt="">
                                                <?php } ?>
                                          <?php } ?>
                                      <?php } ?>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <?php if (have_posts()){ ?>
            		<?php while (have_posts()) : the_post()?>
            			<?php the_content(); ?>
            		<?php endwhile; ?>
            	<?php }else {
            		esc_html_e('Page Canvas For Page Builder', 'borrow'); 
              } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>