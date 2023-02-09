<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package borrow
 */

if ( ! function_exists( 'borrow_entry_meta' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function borrow_entry_meta() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><!--<time class="updated" datetime="%3$s">%4$s</time>-->';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'borrow' ),
		//'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
        $time_string . ''
	);

    echo '<span class="meta-date">' . $posted_on . '</span>'; // WPCS: XSS OK.

	$byline = sprintf(
		esc_html_x( 'By: %s', 'post author', 'borrow' ),
		'<a class="meta-link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
	);

    echo '<span class="meta-author"> ' . $byline . '</span>'; // WPCS: XSS OK.

    if (  ( comments_open() || get_comments_number() ) ) {
         echo '<span class="meta-comments">';
         comments_number( esc_html__('0 ', 'borrow'), esc_html__('01 ', 'borrow'), esc_html__('% ', 'borrow') );
         
         comments_popup_link( esc_html__( 'comments', 'borrow' ), esc_html__( 'comments', 'borrow' ), esc_html__( 'comments', 'borrow' ) );
         echo '</span>';
     }
}
endif;

if ( ! function_exists( 'borrow_posted_in' ) ) :
    /**
     * Prints HTML with meta information for the current author.
     */
    function borrow_posted_in() {
        $categories_list = get_the_category_list( esc_html__( ', ', 'borrow' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            $posted_in = sprintf( esc_html__( '%1$s', 'borrow' ), $categories_list ); // WPCS: XSS OK.
        }

        echo '' . $posted_in . ''; // WPCS: XSS OK.

    }
endif;
if ( ! function_exists( 'borrow_excerpt_length' ) ) :
/**** Change length of the excerpt ****/
function borrow_excerpt_length() {
      global $borrow_option;
      if(isset($borrow_option['blog_excerpt'])){
        $limit = $borrow_option['blog_excerpt'];
      }else{
        $limit = 15;
      }  
      $excerpt = explode(' ', get_the_excerpt(), $limit);

      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
      return $excerpt;
}
endif;

if ( ! function_exists( 'borrow_excerpt' ) ) :
/** Excerpt Section Blog Post **/
function borrow_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
endif;

if ( ! function_exists( 'borrow_tag_cloud_widget' ) ) :
/**custom function tag widgets**/
function borrow_tag_cloud_widget($args) {
    $args['number'] = 0; //adding a 0 will display all tags
    $args['largest'] = 18; //largest tag
    $args['smallest'] = 14; //smallest tag
    $args['unit'] = 'px'; //tag font unit
    $args['format'] = 'list'; //ul with a class of wp-tag-cloud
    $args['exclude'] = ''; //exclude tags by ID
    return $args;
}
add_filter( 'widget_tag_cloud_args', 'borrow_tag_cloud_widget' );
endif;

if ( ! function_exists( 'borrow_pagination' ) ) :
//pagination
function borrow_pagination($prev = '', $next = '', $pages='') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
    }
    $pagination = array(
        'base'          => str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
        'format'        => '',
        'current'       => max( 1, get_query_var('paged') ),
        'total'         => $pages,
        'prev_text'     => esc_html__('Previous', 'borrow'),
        'next_text'     => esc_html__('Next', 'borrow'),       
        'type'          => 'list',
        'end_size'      => 3,
        'mid_size'      => 3
);
    $return =  paginate_links( $pagination );
    echo str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $return );
}
endif;

if ( ! function_exists( 'borrow_custom_wp_admin_style' ) ) :
function borrow_custom_wp_admin_style() {

        wp_register_style( 'borrow_custom_wp_admin_css', get_template_directory_uri() . '/framework/admin/admin-style.css', false, '1.0.0' );
        wp_enqueue_style( 'borrow_custom_wp_admin_css' );

        wp_enqueue_script( 'borrow-backend-js', get_template_directory_uri()."/framework/admin/admin-script.js", array( 'jquery' ), '1.0.0', true );
        wp_enqueue_script( 'borrow-backend-js' );
}
add_action( 'admin_enqueue_scripts', 'borrow_custom_wp_admin_style' );
endif;

if ( ! function_exists( 'borrow_search_form' ) ) :
/* Custom form search */
function borrow_search_form( $form ) {
    $form = '<form role="search" method="get" action="' . esc_url(home_url( '/' )) . '" >  
        <div class="custom-search-input">
        <div class="input-group">
        <input type="search" id="search" class="search-query form-control" value="' . get_search_query() . '" name="s" placeholder="'.__('Search&hellip;', 'borrow').'" />
        <span class="input-group-btn">
        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
        </span>
        </div>
        </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'borrow_search_form' );
endif;

/* Custom comment List: */
function borrow_theme_comment($comment, $args, $depth) {    
   $GLOBALS['comment'] = $comment; ?>
   <li class="comment">
        <div class="comment-body mb30">  
            <div class="comment-author">
                <?php echo get_avatar($comment,$size='100',$default='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=100' ); ?>
            </div>
            <div class="comment-info">
                <div class="comment-header">
                  <h3 class="comment-title"><?php printf(__('%s','borrow'), get_comment_author()) ?></h3>
                  <div class="comment-meta"> <span class="comment-meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span> </div>
                </div>
                <div class="comment-content">
                    <?php if ($comment->comment_approved == '0'){ ?>
                        <p><em><?php esc_html_e('Your comment is awaiting moderation.','borrow') ?></em></p>
                    <?php }else{ ?>
                        <?php comment_text() ?>
                    <?php } ?>
                    <div class="reply"><?php comment_reply_link(array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
                </div>
            </div>
        </div>
    </li>      
<?php
}

if ( ! function_exists( 'borrow_custom_favicon' ) ) :
/**
 * Prints HTML with Custom Favicon.
 */
function borrow_custom_favicon() {
    global $borrow_option;
    
    if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {        
        if($borrow_option['favicon']['url'] !=''){ 
            echo '<link rel="shortcut icon" href="'.($borrow_option['favicon']['url']).'">';    
        }
    } 
}
endif;

// Add specific CSS class by filter
add_filter( 'body_class', 'borrow_body_class_names' );
function borrow_body_class_names( $classes ) {
    global $borrow_option;
    $theme = wp_get_theme();
    
    $classes[] = 'borrow-theme-ver-'.$theme->version;
    $classes[] = 'wordpress-version-'.get_bloginfo( 'version' );

    if($borrow_option['preload-switch']!=false){
      $classes[] = 'royal_preloader';
    }else{
      $classes[] = 'animsition';
    }

    if(isset($borrow_option['theme_layout']) and $borrow_option['theme_layout']=="boxed_version" ){
      $classes[] = 'boxed-version';
    }
    
    // return the $classes array
    return $classes;
}

// Add specific CSS class to header
function borrow_header_class() {
  global $borrow_option;
  $header_classes = array();

  if($borrow_option['header-sticky-switch']!=false){
    $header_classes[] = 'sticky-header'; 
  }

  if(isset($borrow_option['version_type']) and $borrow_option['version_type']=="header2" ){
    $header_classes[] = 'header';
  }

  // return the $classes array
  echo implode( ' ', $header_classes );
}

if(!function_exists('borrow_custom_frontend_scripts')){
  function borrow_custom_frontend_scripts(){
    global $borrow_option; 
?>

  <script type="text/javascript">
    (function($) {"use strict";
        $(document).on('ready', function() {
          $("#slider-range-min").slider({
              range: "min",
              value: <?php echo esc_attr($borrow_option['amount']); ?>,
              min: <?php echo esc_attr($borrow_option['min_amount']); ?>,
              max: <?php echo esc_attr($borrow_option['max_amount']); ?>,
              slide: function(event, ui) {
                  $("#amount").val("$" + ui.value);
              }
          });
          $("#amount").val("$" + $("#slider-range-min").slider("value"));
          $("#slider-range-max").slider({
              range: "max",
              min: <?php echo esc_attr($borrow_option['min_year']); ?>,
              max: <?php echo esc_attr($borrow_option['max_year']); ?>,
              value: <?php echo esc_attr($borrow_option['year']); ?>,
              slide: function(event, ui) {
                  $("#j").val(ui.value);
              }
          });
          $("#j").val($("#slider-range-max").slider("value")); 
        });     
        <?php if($borrow_option['preload-switch']!=false){ ?>
          Royal_Preloader.config({
            <?php if(isset($borrow_option['preloader_mode']) and $borrow_option['preloader_mode']=="preloader_logo" ){ ?>
                mode           : 'logo',
                logo           : '<?php echo esc_js($borrow_option['logo_preload']['url']); ?>',
                logo_size      : [<?php echo esc_js($borrow_option['prelogo_width']); ?>, <?php echo esc_js($borrow_option['prelogo_height']); ?>],
                showProgress   : true,
                showPercentage : true,
            <?php }else{ ?>
                mode           : 'progress',
                showProgress   : true,
                showPercentage : false,
            <?php } ?>
            text_colour: '<?php echo esc_js($borrow_option['preload-text-color']); ?>',
            background:  '<?php echo esc_js($borrow_option['preload-background-color']); ?>'
          });
        <?php } ?>

        <?php if( ($borrow_option['version_type']=='header2') and $borrow_option['header_fixed']=='fixed' ) { ?>
          //jQuery to collapse the navbar on scroll
          $(window).scroll(function() {
            if ($(".header-transparent").offset().top > 50) {
              $(".navbar-fixed-top").addClass("top-nav-collapse");
            } else {
              $(".navbar-fixed-top").removeClass("top-nav-collapse");
            }
          });
        <?php } ?>
    })(jQuery);
  </script>

<?php      
  }
}
add_action('wp_footer', 'borrow_custom_frontend_scripts');