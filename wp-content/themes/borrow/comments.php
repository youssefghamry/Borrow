<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package borrow
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-area mb40">
	<?php if ( have_comments() ) : ?>
	    <h2 class="comments-title"><?php echo esc_html_e('Comments','borrow'); ?></h2>
		<ul class="comment-post comment-list listnone">
	    
				<?php 
					wp_list_comments('callback=borrow_theme_comment'); 
				?>
			<?php
				// Are there comments to navigate through?
				if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
			?>
				<nav class="navigation comment-navigation" role="navigation">		   
					<div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'borrow' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'borrow' ) ); ?></div>
	                <div class="clearfix"></div>
				</nav><!-- .comment-navigation -->
			<?php endif; // Check for comment navigation ?>

			<?php if ( ! comments_open() && get_comments_number() ) : ?>
				<p class="no-comments"><?php esc_html_e( 'Comments are closed.' , 'borrow' ); ?></p>
			<?php endif; ?>	
	    
	    </ul>	
	<?php endif; ?>	
</div>
<div class="leave-comments pinside30 bg-primary mb30">
	<?php
    	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
		$aria_req = ( $req ? " aria-required='true'" : '' );
        $comment_args = array(
            'id_form' => 'reply-form',                                
            'title_reply'=> 'Leave A Comment',
            'fields' => apply_filters( 'comment_form_default_fields', array(
                'author' => '<div class="row"><div class="col-md-8"><div class="form-group"><label class="sr-only control-label" for="name"></label><input id="name" name="name" type="text" class="form-control" value="" placeholder="'. esc_html__( 'Name', 'borrow' ) .'" /></div></div>',
                'email' => '<div class="col-md-8"><div class="form-group"><label class="sr-only control-label" for="email"></label><input value="" id="email" name="email" type="text" class="form-control input-md" placeholder="'. esc_html__( 'E-mail', 'borrow' ) .'" /></div></div>', 
                'subject' => '<div class="col-md-8"><div class="form-group"><label class="sr-only control-label" ></label><input id="subject" name="subject" type="text" class="form-control input-md" placeholder="'.esc_html__('Subject', 'borrow').'" /></div></div></div>',
            ) ),                                
             'comment_field' => '<div class="row"><div class="col-md-12"><div class="form-group"><label class="sr-only control-label" ></label><textarea rows="7" class="form-control" cols="45" name="comment" '.$aria_req.' id="comment" placeholder="'. esc_html__( 'Comments', 'borrow' ) .'" ></textarea></div></div></div>',        
             'label_submit' => esc_html__( 'Leave comment', 'borrow' ),
             'comment_notes_before' => '',
             'comment_notes_after' => '',   
             'class_submit'      => 'btn btn-default',            
        )
	?>
	<?php comment_form($comment_args); ?>
</div><!-- #comments -->
