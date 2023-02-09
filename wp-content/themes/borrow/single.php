<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package borrow
 */
global $borrow_option;
get_header(); ?>

<div class="page-header" <?php if($borrow_option['bg_blogpage'] != ''){ ?> style="background:linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), rgba(0, 0, 0, 0.2) url(<?php echo esc_url($borrow_option['bg_blogpage']['url']); ?>) no-repeat center;"<?php } ?>>
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
            <?php if($borrow_option['action_link']!=''){ ?>
              <div class="col-md-4 col-sm-5 col-xs-12">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="btn-action"> <a href="<?php echo esc_url($borrow_option['action_link']); ?>" class="btn btn-default"><?php echo esc_attr($borrow_option['action_text']); ?></a> </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <?php if($borrow_option['sub_nav']!=''){ ?>
        <div class="sub-nav" id="sub-nav">
          <ul class="nav nav-justified">
            <?php echo htmlspecialchars_decode($borrow_option['sub_nav']); ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
	<!-- subheader close -->
	
    <!-- content begin -->
   <div class="single-blog">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="wrapper-content bg-white pinside40">
              <div class="row">
                <?php if($borrow_option['sidebar']=='left'){ ?>
                  <div class="col-md-4 col-sm-12 col-xs-12">                              
                    <?php get_sidebar();?>                
                  </div>
                <?php } ?>

                <div class="<?php if($borrow_option['sidebar']=='fullwidth'){ echo'col-md-12';}else{echo 'col-md-8';} ?> col-sm-12 col-xs-12">
                  <div class="row">
                    <div class="col-md-12">
                    <div class="post-holder">
                    <div class="post-block mb40">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <?php $format = get_post_format(); ?>
                    	<?php if($format=='audio'){ $link_audio = get_post_meta(get_the_ID(),'_cmb_link_audio', true); ?>
                      	<div class="post-img mb30">	
                      		<iframe style="width:100%" src="<?php echo esc_url( $link_audio ); ?>"></iframe>	  
                         </div>         
                      	<?php } elseif($format=='video'){ $link_video = get_post_meta(get_the_ID(),'_cmb_link_video', true); ?>
                        	<div class="post-img mb30">
                        	 <?php echo wp_oembed_get( $link_video ); ?>	
                          </div>      
                      	<?php } elseif($format=='gallery'){ ?>
                            <div id="post-gallery">
                              <?php if( function_exists( 'rwmb_meta' ) ) { ?>  
                                  <?php $images = rwmb_meta( '_cmb_images', "type=image" ); ?>
                                  <?php if($images){ ?>		                                    
                                      <?php foreach ( $images as $image ) {  ?>
                                      <?php $img = $image['full_url']; ?>
                                        <div class="post-img mb30"><img src="<?php echo esc_url($img); ?>" alt=""></div> 
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
			                            <div class="post-img mb30"><img src="<?php echo esc_url($img); ?>" alt=""  class="img-responsive"></div>
		                            <?php } ?>
	                            <?php } ?>
                          	<?php } ?>
                        <?php } elseif ($format=='quote'){ ?>

                        <?php $quote = get_post_meta(get_the_ID(),'_cmb_quote', true); ?>
						            <?php $quote_author = get_post_meta(get_the_ID(),'_cmb_quote_author', true); ?>
                        <div class="quote-block pinside30 bg-primary mb40">
      				            <h1><?php the_title(); ?></h1>
      				            <blockquote><?php echo esc_html($quote); ?></blockquote>
				                </div>
                        <?php }else{ ?>
                          <div class="post-img mb30">
                            <?php if(get_the_post_thumbnail()){ ?>              
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" alt="">
                            <?php } ?>
                          </div>
                        <?php } ?>
                        <?php if($format != 'quote'){ ?>
                          <div class="bg-white">
                          	<h1><?php the_title(); ?></h1>
                            <p class="meta"><?php borrow_entry_meta(); ?></p>
                          	<?php the_content(); ?>
                            <?php
                              if(get_the_tag_list()) {
                                  echo get_the_tag_list('<ul class="tag-list"><li>','</li><li>','</li></ul>');
                              }
                            ?>
                          </div>
                        <?php } ?>
                  </div>
                </div>
              </div>
            </div>	
            <div class="post-related mb40">
            <div class="row">
              <div class="col-md-12">
                <h2 class="post-related-title mb20"><?php echo esc_html_e('Related post','borrow'); ?></h2>
              </div>
            </div>
            <div class="row">
              <?php
    						$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 2, 'post__not_in' => array($post->ID) ) );
    						if( $related ) foreach( $related as $post ) 
    						{
    						setup_postdata($post); ?>

    						<div class="col-md-6 mb30 col-sm-6 col-xs-6">
					        <div class="related-img mb20"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></a></div>
					        <div class="post-related-content">
                    <h4><a href="<?php the_permalink() ?>" class="title"><?php the_title(); ?></a></h4>
                    <?php if(has_category()) { ?>
                      <span> <?php esc_html_e('in','borrow'); ?> 
                         "<?php the_category(' , ', ' '); ?>"
                      </span>
                    <?php } ?>
					        </div>	        
			          </div>   
    						<?php }
    						wp_reset_postdata(); ?>
            </div>
            </div>
	          
    				<div class="post-navigation mb40">
	            <div class="row">
	              <div class="nav-links">
	                <div class="col-md-6 col-sm-6 col-xs-6">
	                	<div class="nav-previous"><?php previous_post_link( '%link', _x( '<span class="prev-link"> previous post</span> <h4 class="title"> %title </h4>', 'Previous post link', 'borrow' ) ); ?></div>	                	
	                </div>	                
	                <div class="col-md-6 col-sm-6 col-xs-6">
	                	<div class="nav-next text-right"><?php next_post_link( '%link', _x( '<span class="next-link"> next post </span><h4 class="title"> %title</h4>', 'Next post link', 'borrow' ) ); ?></div>
	                </div>
	                <!-- /.next block --> 
	              </div>
	            </div>
	            <!-- /.prev next post --> 
	         </div>		
					<div class="post-author mb40">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12"> 
                  <div class="author-img">
                    <?php echo get_avatar($comment,$size='180',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=180' ); ?> 
                  </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="author-bio   ">
                    <div class="author-header"><h3><?php the_author_posts_link(); ?></h3></div>
                    <div class="author-content">
                      <p><?php the_author_meta('description'); ?></p>
                      <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" class="btn-link"><?php esc_html__('View All Post', 'borrow') ?></a> 
                    </div>
                  </div>
                </div>
            </div>
			      <!-- /.author post --> 
	        </div>
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					?>
				  <?php endwhile; // End of the loop. ?>
          </div> 

          <?php if($borrow_option['sidebar']=='right'){ ?>
            <div class="col-md-4 col-sm-12 col-xs-12">                              
              <?php get_sidebar();?>                
            </div>
          <?php } ?>
          
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    <!-- content close -->
	
<?php get_footer(); ?>
