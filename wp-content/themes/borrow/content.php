<?php global $borrow_option; ?>
<div class="col-md-12 col-xs-12">
    <div class="post-holder">
        <div class="post-block mb40">
            <div class="bg-white">
                <h1><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h1>
                <p class="meta"><?php borrow_entry_meta(); ?></p>
                <p><?php echo borrow_excerpt_length(); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-link"><?php if($borrow_option['readmore_btn'] != ''){ echo esc_attr($borrow_option['readmore_btn']); }else{ esc_html_e('Read More','borrow'); } ?></a> 
            </div>
        </div>
    </div>
</div>