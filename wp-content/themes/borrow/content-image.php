<?php global $borrow_option; ?>
<div class="col-md-12 col-xs-12">
  <div class="post-holder">
    <div class="post-block mb40">
      <div class="post-img mb30">
        <a href="<?php the_permalink(); ?>" class="imghover">
          <?php if( function_exists( 'rwmb_meta' ) ) { ?>
              <?php $images = rwmb_meta( '_cmb_image', "type=image" ); ?>
              <?php if($images){ ?>              
                  <?php  foreach ( $images as $image ) {  ?>
                      <?php $img = $image['full_url']; ?>
                      <img src="<?php echo esc_url($img); ?>" class="img-responsive" alt="">
                  <?php } ?>                
              <?php }else{
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                  } 
              } ?>
          <?php } ?>
        </a>
      </div>
      <div class="bg-white">
        <h1><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h1>
        <p class="meta"><?php borrow_entry_meta(); ?></p>
        <p><?php echo borrow_excerpt_length(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn-link"><?php if($borrow_option['readmore_btn'] != ''){ echo esc_attr($borrow_option['readmore_btn']); }else{ esc_html_e('Read More','borrow'); } ?></a> 
      </div>
    </div>
  </div>
</div>