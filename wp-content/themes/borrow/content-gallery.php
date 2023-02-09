<?php global $borrow_option; ?>
<div class="col-md-12 col-xs-12">
  <div class="post-holder">
    <div class="post-block mb40">
      <div id="post-gallery">
        <?php if( function_exists( 'rwmb_meta' ) ) { ?>
          <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
            <?php if($images){ ?>
                  <?php foreach ( $images as $image ) { ?>
                    <div class="post-img mb30">
                      <a href="<?php the_permalink(); ?>" class="imghover"><img  src="<?php echo esc_url($image['full_url']); ?>" alt=""></a>
                    </div>
                  <?php } ?>
            <?php } ?>
        <?php } ?>
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