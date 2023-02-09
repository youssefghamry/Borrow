<?php global $borrow_option; ?>
<?php $quote = get_post_meta(get_the_ID(),'_cmb_quote', true); ?>
<?php $quote_author = get_post_meta(get_the_ID(),'_cmb_quote_author', true); ?>
<div class="col-md-12 col-xs-12">
    <div class="">
        <!-- post-holder -->
        <div class="quote-block pinside30 bg-primary-light mb40">
            <!-- quote-block -->
            <h1><?php the_title(); ?></h1>
            <p class="meta"><span class="meta-date"><?php the_time('M, j, Y') ?></span></p>
            <blockquote>
                <p><?php echo esc_html($quote); ?></p>
            </blockquote>
        </div>
        <!-- /.quote-block -->
    </div>
    <!-- /.post-holder -->
</div>