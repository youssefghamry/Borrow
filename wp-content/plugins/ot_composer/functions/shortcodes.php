<?php 
// Custom Heading
add_shortcode('heading','heading_func');
function heading_func($atts, $content = null){
	extract(shortcode_atts(array(
		'text'		=>	'',
		'tag'		  => 	'',
		'size'		=>	'',
		'color'		=>	'',
		'align'		=>	'',	    
		'class'		=>	'',
    'css'     =>  '',
	), $atts));
	
	$size1 = (!empty($size) ? 'font-size: '.$size.'px;' : '');
	$color1 = (!empty($color) ? 'color: '.$color.';' : '');
	$align1 = (!empty($align) ? 'text-align: '.$align.';' : '');	

  $css_custom = vc_shortcode_custom_css_class( $css );

	ob_start(); ?>
	
	<?php echo htmlspecialchars_decode('<'. $tag . ' class="' . $css_custom . $class . '" style="' . $size1 . $align1 . $color1 .'" > '. $text .'</'.$tag.'>'); ?>
	
<?php
    return ob_get_clean();
}

// Buttons
add_shortcode('button', 'button_func');
function button_func($atts, $content = null){
  extract(shortcode_atts(array(

    'btntext'   => '',
    'btnlink'   => '',
    'type'      => '',
    'size'      => '',
    'class'     => '',

  ), $atts));

  ob_start(); ?>
  <?php 
    $type2 = '';
    $size2 = '';
    if($type == 'primary'){
      $type2 = ' btn-primary ';
    }elseif($type == 'outline-default'){ 
    $type2 = ' btn-outline-default ';
    }elseif($type == 'outline-primary'){ 
    $type2 = ' btn-outline-primary ';
    } else{ 
    $type2 = ' btn-default ';
    } 
    if($size == 'small'){
      $size2 = ' btn-sm';
    }elseif($size == 'xs'){
      $size2 = ' btn-xs';
    }elseif($size == 'large'){
      $size2 = ' btn-lg';
    }else{
      $size2 = '';
    }
  ?>
  <a href="<?php echo esc_url($btnlink); ?>" class="btn<?php echo esc_attr($size2.$type2.$class); ?>"><?php echo esc_attr($btntext); ?></a>
  <?php return ob_get_clean();
}

// Home Slider (use)
add_shortcode('sliderh','sliderh_func');
function sliderh_func($atts, $content = null){
  extract(shortcode_atts(array(
    'body'  => '',
    'speed' => '',
    'auto'  => '',
    'pagination' => '',
    'paginationSpeed' => '',
    'transition'  => '',
    'bg_overlay' => 'overlay',
  ), $atts));
  $body = (array) vc_param_group_parse_atts( $body );

  $speed1  = (!empty($speed) ? esc_attr($speed) : 3000);
  $auto1  = (!empty($auto) ? esc_attr($auto) : 5000);
  $paginationSpeed1  = (!empty($paginationSpeed) ? esc_attr($paginationSpeed) : 400);

  $bg_overlay1 = '';
  if($bg_overlay == 'transparent'){ 
    $bg_overlay1 = 'student-slider-img';
  }elseif ($bg_overlay == 'gradient') {
    $bg_overlay1 = 'slider-gradient-img';
  }else{ 
    $bg_overlay1 = 'slider-img';
  }

  ob_start(); ?>
    <div class="slider <?php if($pagination==true){echo 'slider-second';}else{echo '';} ?>" id="slider">
      <?php 
      foreach ( $body as $data ) {

        $data['column']  = (!empty($data['column1']) ? esc_attr($data['column1']) : 6);

        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $data['highlight'] = isset( $data['highlight'] ) ? $data['highlight'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['btntext'] = isset( $data['btntext'] ) ? $data['btntext'] : '';
        $data['link'] = isset( $data['link'] ) ? $data['link'] : '';
      ?>
      <div class="<?php echo esc_attr($bg_overlay1); ?>">
        <img src="<?php echo esc_url($img); ?>" class="" alt="">
        <div class="container">
          <div class="row">
            <div class="col-lg-<?php echo esc_attr($data['column']); ?> col-md-12 col-sm-12 col-xs-12">
              <div class="slider-captions">
                <!-- slider-captions -->
                <?php if($data['title']!=''){ ?><h1 class="slider-title"><?php echo htmlspecialchars_decode($data['title']); ?> </h1><?php } ?>
                <?php if($data['desc']!=''){ ?><p class="slider-text hidden-xs"><?php echo htmlspecialchars_decode($data['desc']); ?></p><?php } ?>
                <?php if($data['btntext']!=''){ ?><a href="<?php echo esc_url($data['link']); ?>" class="btn btn-default hidden-xs"><?php echo esc_attr($data['btntext']); ?></a> <?php } ?>
              </div>
              <!-- /.slider-captions -->
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
    </div>
    <script type="text/javascript">
      (function($) {
        $(document).on('ready', function() {
            "use strict";
              $("#slider").owlCarousel({
              navigation: true, // Show next and prev buttons
              slideSpeed: <?php echo esc_attr($speed1); ?>,
              paginationSpeed: <?php echo esc_attr($paginationSpeed1); ?>,
              singleItem: true,
              pagination: true,
              <?php if($transition == 'fade'){ ?>
              transitionStyle : 'fade',
              <?php } ?>
              autoPlay: <?php echo esc_attr($auto1); ?>,
              navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
              addClassActive: true,
             });
        });
        })(jQuery);
    </script>
  <?php
    return ob_get_clean();
}

// Home Slider 2
add_shortcode('home_slider2','home_slider2_func');
function home_slider2_func($atts, $content = null){
  extract(shortcode_atts(array(
    'body'  => '',
    'speed' => '',
    'auto'  => '',
    'paginationSpeed' => '',
    'transition'  => '',
    'bg_overlay' => 'overlay',
  ), $atts));
  $body = (array) vc_param_group_parse_atts( $body );
  $speed1  = (!empty($speed) ? esc_attr($speed) : 3000);
  $auto1  = (!empty($auto) ? esc_attr($auto) : 5000);
  $paginationSpeed1  = (!empty($paginationSpeed) ? esc_attr($paginationSpeed) : 400);

  $bg_overlay1 = '';
  if($bg_overlay == 'transparent'){ 
    $bg_overlay1 = 'student-slider-img';
  }elseif ($bg_overlay == 'gradient') {
    $bg_overlay1 = 'slider-gradient-img';
  }else{ 
    $bg_overlay1 = 'slider-img';
  }

  ob_start(); ?>
    <div class="slider" id="slider">
      <?php 
      foreach ( $body as $data ) {
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $data['highlight'] = isset( $data['highlight'] ) ? $data['highlight'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['btntext'] = isset( $data['btntext'] ) ? $data['btntext'] : '';
        $data['link'] = isset( $data['link'] ) ? $data['link'] : '';
        $data['rate_badge'] = isset( $data['rate_badge'] ) ? $data['rate_badge'] : '';
      ?>
      <div class="<?php echo esc_attr($bg_overlay1); ?>">
        <img src="<?php echo esc_url($img); ?>" class="" alt="">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              <div class="slider-captions">
                <!-- slider-captions -->
                <?php if($data['title']!=''){ ?><h1 class="slider-title"><?php echo htmlspecialchars_decode($data['title']); ?></h1><?php } ?>
                <?php if($data['desc']!=''){ ?><p class="slider-text hidden-xs"><?php echo htmlspecialchars_decode($data['desc']); ?></p><?php } ?>
                <?php if($data['btntext']!=''){ ?><a href="<?php echo esc_url($data['link']); ?>" class="btn btn-default hidden-xs"><?php echo esc_attr($data['btntext']); ?></a> <?php } ?>
                <?php if($data['rate_badge']!=''){ ?><span class="rate-badge"><?php echo htmlspecialchars_decode($data['rate_badge']); ?></span><?php } ?>
              </div>
              <!-- /.slider-captions -->
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
    </div>
    <script type="text/javascript">
      (function($) {
        $(document).on('ready', function() {
            "use strict";
              $("#slider").owlCarousel({
              navigation: true, // Show next and prev buttons
              slideSpeed: <?php echo esc_attr($speed1); ?>,
              paginationSpeed: <?php echo esc_attr($paginationSpeed1); ?>,
              singleItem: true,
              pagination: true,
              <?php if($transition == 'fade'){ ?>
                transitionStyle : 'fade',
              <?php } ?>
              autoPlay: <?php echo esc_attr($auto1); ?>,
              navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
              addClassActive: true,
             });
        });
        })(jQuery);
    </script>
  <?php
    return ob_get_clean();
}

//Table
add_shortcode('table', 'table_func');
function table_func( $atts, $content ) {
  $atts = shortcode_atts(array(
   'titles'         => '',
   'class_name'     => '',
  ), $atts );

  $output = array();
  if( $atts['titles'] ) {
   $titles = explode( "|", $atts['titles'] );
   $column = '';

   if( $titles ) {
    foreach ( $titles as $title ) {
     $column .= sprintf( '<th class="%s">%s</th>', '', $title );
    }
   }
   $output[] = sprintf( '<thead><tr>%s</tr></thead>',  $column );
  }

  if( $content ) {
   $content = explode( "\n", $content );

   if( $content ) {
    $output[] = '<tbody>';
    foreach ( $content as $row ) {
     $row = explode( "|", $row );
     $column = '';
     $i = 0;

     if( $row ) {
      foreach ( $row as $label ) {
       $data = '';
       if( $label ) {    
         $column .= sprintf( '<td %s>%s</td>', $data, $label );
       }
       $i++;
      }
     }
     $output[] = sprintf( '<tr>%s</tr>',  $column );
    }
    $output[] = '</tbody>';
   }
  }
  return sprintf( 
    '
      <div class="row">
        <div class="col-md-12">
          <table class="table table-bordered %s">%s</table>
        </div>
      </div>
    ',
  esc_attr( $atts['class_name'] ),
  implode( '', $output )
  );
}

//Rate Counter
add_shortcode('rate', 'rate_func');
function rate_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image'      =>  '',    
        'title'      =>  '',     
        'rate'       =>  '',
    ), $atts));
    ob_start(); 
?>
  <div class="rate-counter-block">
      <div class="icon rate-icon">
        <?php if ( $image != '' ) { echo wp_get_attachment_image( $image, 'full', '', array( "class" => "icon-svg-1x" ) ); } ?>          
      </div>
      <div class="rate-box">
          <?php if ( $rate != '' ) { ?><h1 class="loan-rate"><?php echo esc_attr($rate); ?></h1><?php } ?>
          <?php if ( $title != '' ) { ?><small class="rate-title"><?php echo htmlspecialchars_decode($title); ?></small><?php } ?>
      </div>
  </div>
<?php
    return ob_get_clean();
}

//Loan Block
add_shortcode('loanblock', 'loanblock_func');
function loanblock_func($atts, $content = null){
    extract(shortcode_atts(array(
        'image'      =>  '',    
        'title'      =>  '',     
        'rate'       =>  '',
    ), $atts));
    ob_start(); 
?>
  <div class="loan-block">
      <div class="loan-icon">
        <?php if ( $image != '' ) { echo wp_get_attachment_image( $image, 'full', '' ); } ?> 
      </div>
      <div class="loan-content">
          <h3 class="text-white"><?php echo esc_attr($title); ?></h3>
          <?php echo wpb_js_remove_wpautop($content, true); ?>
      </div>
  </div>
<?php
    return ob_get_clean();
}

// Counter (update june 2018)
add_shortcode('counter','counter_func');
function counter_func($atts, $content = null){
  extract(shortcode_atts(array(
    'number'  => '',
    'title' => '',
    'small' => '',
  ), $atts));

  ob_start(); ?>
    <div class="counter-block">
        <div class="counter" data-count="<?php echo esc_attr($number); ?>">0</div><?php if($small!=''){ ?><span class="counter-small-text"><?php echo esc_attr($small); ?></span><?php } ?>
        <p class="text-white"><strong><?php echo htmlspecialchars_decode($title); ?></strong></p>
    </div>
    <script type="text/javascript">
      (function($) {
        $(document).on('ready', function() {
            "use strict";
              $('.counter').each(function() {
              var $this = $(this),
                  countTo = $this.attr('data-count');

              $({ countNum: $this.text() }).animate({
                      countNum: countTo
                  },

                  {

                      duration: 8000,
                      easing: 'linear',
                      step: function() {
                          $this.text(Math.floor(this.countNum));
                      },
                      complete: function() {
                          $this.text(this.countNum);
                          //alert('finished');
                      }

                  });



          });
        });
        })(jQuery);
    </script>
  <?php
    return ob_get_clean();
}

//Price Rate
add_shortcode('price_rate', 'price_rate_func');
function price_rate_func($atts, $content = null){
    extract(shortcode_atts(array(
        'new_price'    =>  '',    
        'old_price'    =>  '',     
        'new_title'    =>  '',   
        'old_title'    =>  '',
    ), $atts));
    ob_start(); 
?>
  <div class="price-rate">
      <?php if($new_price != ''){ ?><div class="new-price"><span class="price-big"><?php echo htmlspecialchars_decode($new_price); ?> </span><small><?php echo htmlspecialchars_decode($new_title); ?></small></div><?php } ?>
      <?php if($old_price != ''){ ?><div class="old-price"><span class="price-big"><?php echo htmlspecialchars_decode($old_price); ?> </span><small><?php echo htmlspecialchars_decode($old_title); ?></small></div><?php } ?>
  </div>
<?php
    return ob_get_clean();
}

//Icon Box
add_shortcode('iconbox', 'iconbox_func');
function iconbox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'    =>  '',    
        'icon'    =>  '',     
        'style'    =>  '1',     
    ), $atts));
    ob_start(); 
?>
<?php if($style==1){ ?>
  <div class="mb30">
      <?php if($icon){ ?><div class="mb20"><i class="<?php echo esc_attr($icon); ?> fa-2x text-white"></i></div><?php } ?>
      <?php if($title){ ?><h3 class="text-white"><?php echo esc_attr($title); ?></h3><?php } ?>
      <?php echo wpb_js_remove_wpautop($content, true); ?>
  </div>
<?php }elseif($style==2){ ?>
  <div class="mb30">
      <?php if($icon){ ?><div class="circle-outline-icon float-left border-primary"><i class="<?php echo esc_attr($icon); ?>"></i></div><?php } ?>
      <div class="pdl120">
          <?php if($title){ ?><h3><?php echo esc_attr($title); ?></h3><?php } ?>
          <?php echo wpb_js_remove_wpautop($content, true); ?>
      </div>
  </div>
<?php }else{ ?>
  <div class="mb30">
      <div class="circle-outline-icon"><i class="<?php echo esc_attr($icon); ?>"></i></div>
      <?php if($title){ ?><h3 class="mb10"><?php echo esc_attr($title); ?></h3><?php } ?>
      <?php echo wpb_js_remove_wpautop($content, true); ?>
  </div>
<?php } ?>
<?php
    return ob_get_clean();
}

//Review
add_shortcode('review', 'review_func');
function review_func($atts, $content = null){
    extract(shortcode_atts(array( 
        'icon'    =>  '',     
        'title'   =>  '',     
        'number'  =>  '',  
        'numrat'  =>  '1', 
        'style'   =>  'style1',
    ), $atts));
    ob_start(); 
?>
<?php if($style =='style1'){ ?>
  <div class="text-center mb30">
      <?php if($icon != ''){ ?><div class="icon"> <i class="icon-4x <?php echo esc_attr($icon); ?> icon-default"></i><?php } ?>
      <?php if($number != ''){ ?><h1 class="big-title"><?php echo esc_attr($number); ?></h1><?php } ?>
      <?php if($title != ''){ ?><div class="small-title"><?php echo esc_attr($title); ?></div><?php } ?>
      <?php if($icon != ''){ ?></div><?php } ?>
  </div>
<?php }elseif($style=='style2'){ ?>
  <div class="text-center mb30">
    <?php if($icon != ''){ ?><div class="icon"> <i class="icon-4x <?php echo esc_attr($icon); ?> icon-default"></i><?php } ?>
      <div class="icon icon-1x icon-primary">
      <?php if($numrat==1){ ?><i class="fa fa-star"></i>
      <?php }elseif($numrat==2){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }elseif($numrat==3){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }elseif($numrat==4){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }else{ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php } ?>
      </div>
      <div class="small-title"><?php echo esc_attr($title); ?></div>
    <?php if($icon != ''){ ?></div><?php } ?>
  </div>
<?php }elseif($style=='style3'){ ?>
  <div class="testimonial-simple text-center">
    <?php if($content != ''){ ?><p class="testimonial-text"><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
    <div>
      <div class="client-rating">
          <?php if($numrat==1){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
          <?php }elseif($numrat==2){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
          <?php }elseif($numrat==3){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
          <?php }elseif($numrat==4){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i>
          <?php }else{ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i><?php } ?>
      </div>
      <?php if($title != ''){ ?><span class="testimonial-name-inverse"><?php echo htmlspecialchars_decode($title); ?></span><?php } ?>
    </div>
  </div>
<?php }elseif($style=='style4'){ ?>
  <div class="text-center text-white">
      <div class="icon icon-1x rate-done mb10">
      <?php if($numrat==1){ ?><i class="fa fa-star"></i>
      <?php }elseif($numrat==2){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }elseif($numrat==3){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }elseif($numrat==4){ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
      <?php }else{ ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><?php } ?>
      </div>
      <div class="small-title"><?php echo esc_attr($title); ?></div>
  </div>
<?php }else{ ?>
<div class="rating-testimonials">
  <div class="testimonial-block mb30">
      <div class="mb10">
          <div class="icon rate-done mb20">
            <?php if($numrat==1){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
            <?php }elseif($numrat==2){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
            <?php }elseif($numrat==3){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i> <i class="fa fa-star rate-remain"></i>
            <?php }elseif($numrat==4){ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-remain"></i>
            <?php }else{ ?><i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i> <i class="fa fa-star rate-done"></i><?php } ?>
          </div>
          <?php if($content != ''){ ?><?php echo htmlspecialchars_decode($content); ?><?php } ?>
      </div>
      <div class="testimonial-autor-box">
          <div class="testimonial-autor">
              <h4 class="testimonial-name-1"><?php echo esc_attr($title); ?></h4>
          </div>
      </div>
  </div>
</div>
<?php } ?>
<?php
    return ob_get_clean();
}

// Loan
add_shortcode('services', 'services_func');
function services_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    =>  '',
        'show_sub'  =>  '',
        'show_bt'   =>  '',
        'outline'   =>  '',
        'padd'      =>  '',
        'style'     =>  'style1',
        'btntext'   =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $number1  = (!empty($number) ? esc_attr($number) : 4);
    ob_start(); 
?>
<?php if($style == 'style1'){ ?>
<div class="row">
   <div class="service" id="service">
      <?php 
           $args = array(   
              'post_type' => 'loan',   
              'posts_per_page' => $number1,
           );  
           $wp_query = new WP_Query($args);
           while ($wp_query -> have_posts()) : $wp_query -> the_post();
          $subtitle = get_post_meta(get_the_ID(),'_cmb_subtitle', true);
       ?>  
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="bg-white pinside40 service-block outline mb30">
            <div class="icon mb40"> 
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
              <?php $images = rwmb_meta( '_cmb_image_service', "type=image" ); ?>
              <?php if($images != ''){ ?>              
                  <?php  foreach ( $images as $image ) {  ?>
                      <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="icon-svg-2x" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                  <?php } ?>                
              <?php }else{
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                  } 
              } ?>
            <?php } ?>  
            </div>
            <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
            <p><?php echo htmlspecialchars_decode($subtitle); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
          </div>
        </div> 
      <?php endwhile; wp_reset_postdata(); ?>
  </div>
</div>  
<?php }elseif($style=='style2'){ ?> 
<div class="row isotope">
  <?php 
     $args = array(   
        'post_type' => 'loan',   
        'posts_per_page' => $number1,
     );  
     $wp_query = new WP_Query($args);
     while ($wp_query -> have_posts()) : $wp_query -> the_post();

    $subtitle = get_post_meta(get_the_ID(),'_cmb_subtitle', true);
   ?>  
    <div class="col-md-4 col-sm-6 col-xs-12 gallery-masonry">
      <div class="service-img-box mb30 text-center <?php if($outline==true){echo 'outline';}else{'';} ?>">
        <div class="service-img">
            <a href="<?php the_permalink(); ?>" class="imghover">
              <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
            </a>
        </div>
        <div class="service-content bg-white <?php if($padd=='10'){echo 'pinside10';}elseif($padd=='20'){echo 'pinside20';}else{echo 'pinside30';} ?>">
            <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
            <?php if($show_sub=='true'){ ?>
              <p><?php echo htmlspecialchars_decode($subtitle); ?></p>
            <?php } ?>
            <?php if($show_bt=='true'){ ?>
              <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
            <?php } ?>
        </div>
      </div>
    </div>
  <?php endwhile; wp_reset_postdata(); ?>
</div> 
<?php }else{ ?>
  <div class="row isotope">
    <?php 
       $args = array(   
          'post_type' => 'loan',   
          'posts_per_page' => $number1,
       );  
       $wp_query = new WP_Query($args);
       while ($wp_query -> have_posts()) : $wp_query -> the_post();
       $subtitle = get_post_meta(get_the_ID(),'_cmb_subtitle', true);
     ?> 
     <div class="col-md-4 col-sm-6 col-xs-12 gallery-masonry">
        <div class="bg-white pinside40 outline mb30 text-center service-block">
            <div class="icon mb40"> 
            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
              <?php $images = rwmb_meta( '_cmb_image_service', "type=image" ); ?>
              <?php if($images != ''){ ?>              
                  <?php  foreach ( $images as $image ) {  ?>
                      <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="icon-svg-2x" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                  <?php } ?>                
              <?php }else{
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                  } 
              } ?>
            <?php } ?>  
            </div>
            <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
            <p><?php echo htmlspecialchars_decode($subtitle); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
        </div>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>
<?php } ?>
<?php
    return ob_get_clean();
}

// OT Loan 2
add_shortcode('ot_loan2', 'ot_loan2_func');
function ot_loan2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    =>  '',
        'btntext'   =>  '',
        'grid_columns' => '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Apply now');
    $number1  = (!empty($number) ? esc_attr($number) : 4);
    $grid_columns1 = '';
    if ($grid_columns == 6) {
      $grid_columns1 = 'col-lg-2 col-md-2 col-sm-3';
    }elseif ($grid_columns == 3) {
      $grid_columns1 = 'col-lg-4 col-md-4 col-sm-4';
    }elseif ($grid_columns == 2) {
      $grid_columns1 = 'col-lg-6 col-md-6 col-sm-6';
    }else{
      $grid_columns1 = 'col-lg-3 col-md-3 col-sm-3';
    }
    ob_start(); 
?>

<div class="row">
      <?php 
           $args = array(   
              'post_type' => 'loan',   
              'posts_per_page' => $number1,
           );  
           $wp_query = new WP_Query($args);
           while ($wp_query -> have_posts()) : $wp_query -> the_post();
           $rate_number = get_post_meta(get_the_ID(),'_cmb_rate_number', true);
           $rate_text = get_post_meta(get_the_ID(),'_cmb_rate_text', true);
       ?>  
        <div class="<?php echo $grid_columns1; ?> col-xs-12">
          <div class="service-block-v3">
              <div class="icon mb30">
                  <a href="<?php the_permalink(); ?>">
                    <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image_service', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                            <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="icon-svg-2x" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                    <?php } ?>
                  </a>
              </div>
              <div class="service-content">
                  <h2 class="service-title"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
              </div>
              <div class="service-rate-block">
                <?php if($rate_number != ''){ ?><h3 class="product-rate"><?php echo esc_attr($rate_number); ?></h3><?php } ?>
                <?php if($rate_text != ''){ ?><p class="rate-text"><?php echo esc_attr($rate_text); ?></p><?php } ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-secondary btn-block"><?php echo esc_attr($btntext1); ?></a>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
</div>  

<?php
    return ob_get_clean();
}

// OT Loan Offers (6-2018)
add_shortcode('ot_loanoffers', 'ot_loanoffers_func');
function ot_loanoffers_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    =>  '',
        'btntext'   =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Apply now');
    $number1  = (!empty($number) ? esc_attr($number) : 4);
    ob_start(); 
?>

<div class="hero-tab-block">
  <div class="st-tabs">
    <div class="tab-content">
        <?php 
           $i=0;
           $args = array(   
              'post_type' => 'loan',   
              'posts_per_page' => $number1,
           );  
           $wp_query = new WP_Query($args);
           while ($wp_query -> have_posts()) : $wp_query -> the_post(); $i++;
           $offers = get_post_meta(get_the_ID(),'_cmb_loan_offers', true);
           $purpose = get_post_meta(get_the_ID(),'_cmb_loan_purpose', true);
           $list_purpose = get_post_meta(get_the_ID(),'_cmb_loan_list_purpose', true);
           $link = get_post_meta(get_the_ID(),'_cmb_loan_offers_link', true);
           $btext = get_post_meta(get_the_ID(),'_cmb_loan_offers_btext', true);
        ?>  
        <div role="tabpanel-<?php echo esc_attr($i); ?>" class="loan-offers tab-pane fade <?php if($i==1){echo 'active';} ?>" id="service1-<?php echo esc_attr($i); ?>">
          <div class="loan-form">
              <form>
                  <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                          <h2 class="text-bold"><?php echo esc_attr($offers); ?></h2>
                      </div>
                      <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                          <div class="purpose">
                              <label><?php echo esc_attr($purpose); ?></label>
                              <?php echo wpb_js_remove_wpautop($list_purpose, true); ?>
                          </div>
                      </div>
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mt30 nopl nopr">
                          <a href="<?php echo esc_url($link); ?>" class="btn btn-default btn-lg"><?php echo esc_attr($btext); ?></a>
                      </div>
                  </div>
              </form>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
      <?php 
           $i=0;
           $args = array(   
              'post_type' => 'loan',   
              'posts_per_page' => $number1,
           );  
           $wp_query = new WP_Query($args);
           while ($wp_query -> have_posts()) : $wp_query -> the_post(); $i++;
           $icon = get_post_meta(get_the_ID(),'_cmb_loan_offers_icon', true);
           $title = get_post_meta(get_the_ID(),'_cmb_offers_icon_title', true);
       ?>  
      <li class="nav-item <?php if($i==1){echo 'active';} ?>">
          <a class="nav-link " id="tab-1-<?php echo esc_attr($i); ?>" data-toggle="tab" href="#service1-<?php echo esc_attr($i); ?>" role="tab" aria-controls="responsibilities" aria-selected="<?php if($i==1){echo 'true';}else{ echo 'false';} ?>">
            <i class="<?php echo esc_attr($icon); ?> fa-lg"></i>
            <p class="offers-title"><?php if($title!=''){ echo esc_attr($title);}else{ the_title();} ?></p>
          </a>
      </li>
      <?php endwhile; wp_reset_postdata(); ?>
    </ul>
  </div>  
</div>

<script type="text/javascript">
   (function($) {
        $(document).ready(function() {
        $('select').niceSelect();
    });
  })(jQuery);
</script>
<?php
    return ob_get_clean();
}

//Process Box
add_shortcode('process', 'process_func');
function process_func($atts, $content = null){
    extract(shortcode_atts(array(
        'shadow'     =>  '',    
        'number'     =>  '',    
        'title'      =>  '',     
        'image'      =>  '',   
        'style'      =>  'style1',   
    ), $atts));

    ob_start(); 
?>
<?php if($style=='style1'){ ?>
  <div class="bg-white pinside40 number-block outline mb60 <?php if($shadow=='true'){echo 'bg-boxshadow';}else{'';} ?>">
      <?php if($number!=''){ ?><div class="circle"><span class="number"><?php echo htmlspecialchars_decode($number); ?></span></div><?php } ?>
      <?php if($title!=''){ ?><h3 class="number-title"><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
      <?php if($content!=''){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
  </div>
  <?php }elseif($style=='style2'){ ?>
  <div class="procwss-v2 bg-white number-block mb30 ">
      <div class="process-img">        
        <?php if ( $image != '' ) { echo wp_get_attachment_image( $image, 'full', '', array( "class" => "rounded-circle" ) ); } ?>
        <?php if ( $number != '' ) { ?><div class="circle"><span class="number"><?php echo htmlspecialchars_decode($number); ?></span></div><?php } ?>
      </div>
      <div class="pinside20">
          <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
          <?php if($content!=''){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
      </div>
  </div>
  <?php }else{ ?>
  <div class="bg-white pinside40 number-block mb30">
      <div class="pink-circle circle"><span class="number"><?php echo htmlspecialchars_decode($number); ?></span></div>
      <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
      <?php if($content!=''){ ?><p><?php echo htmlspecialchars_decode($content); ?></p><?php } ?>
  </div>
  <?php } ?>
<?php
    return ob_get_clean();
}

//OT Process Box 2
add_shortcode('process2', 'process2_func');
function process2_func($atts, $content = null){
    extract(shortcode_atts(array(          
        'number'     =>  '',    
        'title'      =>  '',  
        'linkbox'    =>  '', 
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  
  <div class="how-it-block">
    <?php if($number!=''){ ?><h3 class="how-it-no"><?php echo esc_attr($number); ?></h3><?php } ?>
    <div class="how-it-content">
      <?php if($title!=''){ ?><h2><?php echo esc_attr($title); ?></h2><?php } ?>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
        echo '<a class="btn btn-default btn-sm" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
      } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Process Box 3
add_shortcode('process3', 'process3_func');
function process3_func($atts, $content = null){
    extract(shortcode_atts(array(          
        'number'     =>  '',    
        'title'      =>  '',  
        'linkbox'    =>  '', 
        'style'      =>  'style1', 
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <?php if($style=='style1'){ ?>
  <div class="process-3 mb-5 mb-lg-0">
    <?php if($number!=''){ ?>
    <span class="icon-shape icon-lg bg-transparent border rounded-circle border-warning text-warning mb-3 h3">
      <?php echo esc_attr($number); ?>
    </span>
    <?php } ?>
    <?php if($title!=''){ ?><h1><?php echo esc_attr($title); ?></h1><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
      echo '<a class="btn-link" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
    } ?>
  </div>
  <?php }else{ ?>
    <div class="mb-4 text-center">
        <div class="icon-shape icon-md rounded-circle bg-white border-primary  text-primary mb-3 border-2"><?php echo esc_attr($number); ?></div>
        <?php if($title!=''){ ?><h3><?php echo esc_attr($title); ?></h3><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  <?php } ?>

<?php
    return ob_get_clean();
}

//OT Process Image Box (Update May 2020)
add_shortcode('processimg', 'processimg_func');
function processimg_func($atts, $content = null){
    extract(shortcode_atts(array(          
        'icon'     =>  '',    
        'image'      =>  '',  
        'arr'    =>  '',  
    ), $atts));
    $img = wp_get_attachment_image( $image, $size = 'full', '');
    ob_start(); 
?>
      <?php if($icon){ ?><i class="fa <?php echo esc_attr($icon); ?> text-success"></i><?php } ?>
      <div class="<?php if($arr==true){echo 'working-card justify-content-center';} ?> <?php if($icon==''){echo 'mt-3';} ?> ">
          <?php echo $img; ?>
      </div>

<?php
    return ob_get_clean();
}

//Question Box
add_shortcode('question', 'question_func');
function question_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'     =>  '',    
        'linkbox'  =>  '',    
        'title'    =>  '',    
    ), $atts));
      $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <i class="<?php echo esc_attr($icon); ?> icon-2x icon-default"></i>
  <?php if($title!=''){ ?><h1><?php echo htmlspecialchars_decode($title); ?></h1><?php } ?>
  <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
  <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
      echo '<a class="btn btn-primary" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
  } ?>
<?php
    return ob_get_clean();
}

//Miscellaneous Box
add_shortcode('miscell', 'miscell_func');
function miscell_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  '',    
        'title'      =>  '',     
        'linkbox'    =>  '',     
        'style'      =>  'style1',     
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
<?php if($style == 'style1'){ ?>
  <div class="bg-white pinside60 number-block outline">
    <div class="mb20"><i class="<?php echo esc_attr($icon); ?>  icon-4x icon-primary"></i></div>
    <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
        echo '<a class="btn btn-outline mt20" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
    } ?>
  </div>
<?php }else{ ?>
  <div class="number-block text-white mb30">
      <div class="mb30 res-mb0"><i class="<?php echo esc_attr($icon); ?> icon-4x icon-white"></i></div>
      <?php if($title!=''){ ?><h3 class="text-white mb30 res-mb10"><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
  </div>
<?php } ?>
<?php
    return ob_get_clean();
}

//About Popup Video Box
add_shortcode('about_popup_video', 'about_popup_video_func');
function about_popup_video_func($atts, $content = null){
  extract(shortcode_atts(array(
      'bgimage'      =>  '',
      'iconplay'     =>  '',                
      'videolink'    =>  '',     
      'location'     =>  '',     
  ), $atts));

  $location1 = '';
  if ($location == 'center') {
    $location1 = 'center';
  }elseif ($location == 'right') {
    $location1 = 'right';
  }else{
    $location1 = '';
  }

  ob_start(); 
?>

  <div class="section-about-video">
    <div class="about-img"><?php if ( $bgimage != '' ) { echo wp_get_attachment_image( $bgimage, 'full', '' ); } ?></div>
    <div class="video-play <?php echo esc_attr($location1); ?>">
        <a class="popup-youtube" href="<?php echo esc_url($videolink); ?>">
          <?php if ( $iconplay != '' ) { echo wp_get_attachment_image( $iconplay, 'full', '' ); } ?>            
        </a>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 1
add_shortcode('features', 'features_func');
function features_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  '',    
        'icon2'      =>  '',    
        'title'      =>  '',      
        'style'      =>  'style1',     
    ), $atts));
    ob_start(); 
?>
<?php if($style == 'style1'){ ?>
  <div class="feature-icon">
    <div class="icon mb20"><i class="<?php echo esc_attr($icon); ?> icon-default icon-2x"></i></div>
    <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
  </div>
<?php }elseif($style=='style2'){ ?>
  <div class="feature feature-left mb40">
      <div class="feature-icon"><i class="<?php echo esc_attr($icon2); ?>"></i></div>
      <div class="feature-content">
          <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
          <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
  </div>
<?php }elseif($style=='style3'){ ?>
  <div class="feature mb40 pinside40 text-center">
      <div class="feature-icon"><i class="<?php echo esc_attr($icon); ?> icon-default icon-2x"></i></div>
      <div class="feature-content">
          <?php if($title!=''){ ?><h3><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
          <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
  </div>
<?php }else{ ?>
  <div class="text-center pinside30">
      <i class="<?php echo esc_attr($icon); ?> icon-2x text-dark mb20 d-block"></i>
      <?php if($title!=''){ ?><h3 class="mb20"><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
  </div>
<?php } ?>
<?php
    return ob_get_clean();
}

//OT Feature Box 2
add_shortcode('features2', 'features2_func');
function features2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'fa fa-heart',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="feature feature-icon-style <?php echo esc_attr($custom_css); ?>">
    <div class="feature-icon"><i class="<?php echo esc_attr($icon); ?> fa-2x"></i></div>
    <div class="feature-content">
        <h3 class="feature-title"><?php echo esc_attr($title); ?></h3>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 3
add_shortcode('features3', 'features3_func');
function features3_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'fa fa-heart',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  <div class="feature <?php echo esc_attr($custom_css); ?>">
    <div class="feature-icon feature-circle"><i class="<?php echo esc_attr($icon); ?>"></i></div>
    <div class="feature-content">
        <h3><?php echo esc_attr($title); ?></h3>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 4
add_shortcode('features4', 'features4_func');
function features4_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'fa fa-heart',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="feature feature-bg <?php echo esc_attr($custom_css); ?>">
    <div class="feature-icon"><i class="<?php echo esc_attr($icon); ?>"></i></div>
    <div class="feature-content">
        <h3><?php echo esc_attr($title); ?></h3>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 5 (Flaticon)
add_shortcode('features5', 'features5_func');
function features5_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'flaticon-time-is-money',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="business-loan-products bg-boxshadow <?php echo esc_attr($custom_css); ?>">
    <div class="loan-products-icon"><i class="<?php echo esc_attr($icon); ?> icon-4x icon-primary"></i></div>
    <div class="loan-products-content">
      <h3><?php echo esc_attr($title); ?></h3>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Feature Box 6 (Flaticon)
add_shortcode('features6', 'features6_func');
function features6_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  'flaticon-time-is-money',     
        'title'      =>  '',   
        'css'        =>  '',   
    ), $atts));
    $custom_css = vc_shortcode_custom_css_class( $css );
    ob_start(); 
?>
  
  <div class="feature-box-6 <?php echo esc_attr($custom_css); ?>">
    <i class="<?php echo esc_attr($icon); ?> icon-4x icon-primary"></i>
    <div class="feature-box-6-content">
      <h4><?php echo esc_attr($title); ?></h4>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//OT Bank Account Feature
add_shortcode('featuresba', 'featuresba_func');
function featuresba_func($atts, $content = null){
    extract(shortcode_atts(array(  
        'title'      =>  '',   
        'linkbox'        =>  '',   
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  
  <div class="card bg-light">
    <div class="card-body">
      <?php if($title){ ?><h2><?php echo esc_attr($title); ?></h2><?php } ?>
      <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
          echo '<p><a class="btn btn-default btn-sm" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a></p>';
      } ?>
    </div>
  </div>

<?php
    return ob_get_clean();
}

//Share
add_shortcode('share', 'share_func');
function share_func($atts, $content = null){
    extract(shortcode_atts(array(
        'faceb'       =>  '',    
        'twitter'     =>  '',    
        'google'      =>  '',      
        'linkedin'    =>  '',        
    ), $atts));
    ob_start(); 
?>
<div class="widget-share">
  <ul class="listnone">
    <?php if($faceb == true){ ?><li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="btn-share btn-facebook" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li><?php } ?>
    <?php if($twitter == true){ ?><li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="btn-share btn-twitter" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li><?php } ?>
    <?php if($google == true){ ?><li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="btn-share btn-google" title="Share on Google"> <i class="fa fa-google"></i></a></li><?php } ?>
    <?php if($linkedin == true){ ?><li><a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" class="btn-share btn-linkedin" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li><?php } ?>
  </ul>
</div>
<?php
    return ob_get_clean();
}

// OT Credit Card Grid
add_shortcode('ot_creditcard', 'ot_creditcard_func');
function ot_creditcard_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'        =>  '',
        'col'           =>  '3',
        'idcate'        =>  '',
        'btntext'       =>  '',
        'style'         =>  'style1',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
<div class="row">
  <?php 
    $i=0;
      if($idcate!=''){
		  $args = array(   
			  'post_type' => 'credit_card',   
			  'posts_per_page' => $number1,
			  'tax_query' => array(
				  array(
					  'taxonomy' => 'creditcard_cat',
					  'field' => 'slug',
					  'terms' => explode(',',$idcate),
				  ),
			  ),  
		  );  
      }else{
		  $args = array(   
			  'post_type' => 'credit_card',   
			  'posts_per_page' => $number1, 
		  );   
      }
    $wp_query = new WP_Query($args);
    while($wp_query->have_posts()) : $wp_query->the_post(); $i++;
    $btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
    $btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
    $except = get_post_meta(get_the_ID(),'_cmb_except', true);
    $except2 = get_post_meta(get_the_ID(),'_cmb_except2', true);
  ?>
    <?php 
        $column = ' ';
        if( $col == 3 ){
            if($i%3==1){
            $column = 'col-lg-4 col-md-4 col-sm-6 col-xs-12 clear';
            }else{
            $column = 'col-lg-4 col-md-4 col-sm-6 col-xs-12';  
            }
        }elseif( $col == 2 ){
            if($i%2==1){
            $column = 'col-md-6 col-sm-6 col-xs-12 clear';
            }else{
            $column = 'col-md-6 col-sm-6 col-xs-12';
            }
        }else{
            if($i%4==1){
            $column = 'col-lg-3 col-md-4 col-sm-6 col-xs-12 clear';
            }else{
            $column = 'col-lg-3 col-md-4 col-sm-6 col-xs-12';
            }
        }
    ?>
    <?php if($style=='style1'){ ?>
    <div class="<?php echo esc_attr($column); ?>">
      <div class="card-listing">
          <!-- card listing -->
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="card-img">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
            </div>
          <?php }  ?>
          <div class="card-content">
              <h3 class="card-name"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
              <?php if($except != ''){ ?>
                <div class="card-features ">
                    <?php echo htmlspecialchars_decode($except); ?>
                </div>
              <?php } ?>
              <?php if($btn_link != ''){ ?><a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default btn-sm"><?php echo esc_attr($btn_text); ?></a><?php } ?>
              <a href="<?php the_permalink(); ?>" class="btn-link"> <?php echo esc_attr($btntext1); ?></a>
          </div>
      </div>
      <!-- /.card listing -->
    </div>
    <?php }else{ ?>
      <div class="<?php echo esc_attr($column); ?>">
          <div class="card-listing bg-white border-0 p-2">
              <!-- card Wlisting -->
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="card-img">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid w-100' ) ); ?>
                  </a>
                </div>
              <?php }  ?>
              <div class="card-content">
                  <h3 class="card-name"><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
                  <div class="card-features ">
                    <?php echo htmlspecialchars_decode($except2); ?>
                  </div>
                  <a href="<?php the_permalink(); ?>" class="btn-link"> <?php echo esc_attr($btntext1); ?></a>
              </div>
          </div>
          <!-- /.card listing -->
      </div>
    <?php } ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>

<?php
    return ob_get_clean();
}

// OT Credit Card Compare (6-2018)
add_shortcode('ot_creditcardcp', 'ot_creditcardcp_func');
function ot_creditcardcp_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'            =>  '',
        'small_text'        >  '',
        'disable_expand'    =>  '',
        'idcate'            =>  '',
        'btntext'           =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
<div class="compare-table">
<div class="bg-white table-responsive">
  <table class="table">
    <thead>
        <tr>
            <th style="width:20%;" class="card-tag"><?php esc_html_e('Card','borrow'); ?></th>
            <th style="width:30%;" class="card-name"><?php esc_html_e('Card Name','borrow'); ?></th>
            <th style="width:11%;" class="anuual-fees"><?php esc_html_e('Annual Fee','borrow'); ?></th>
            <th class="reward-rate"><?php esc_html_e('Rewards Rate','borrow'); ?> </th>
            <th class="action"></th>
        </tr>
    </thead>
    <tbody>
    <?php 
    $i=0;
      if($idcate!=''){
		  $args = array(   
			  'post_type' => 'credit_card',   
			  'posts_per_page' => $number1,
			  'tax_query' => array(
				  array(
					  'taxonomy' => 'creditcard_cat',
					  'field' => 'slug',
					  'terms' => explode(',',$idcate),
				  ),
			  ),  
		  );  
      }else{
		  $args = array(   
			  'post_type' => 'credit_card',   
			  'posts_per_page' => $number1, 
		  );   
      }
      $wp_query = new WP_Query($args);
      while($wp_query->have_posts()) : $wp_query->the_post();  $i++;   
      $btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
      $btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
      $annual = get_post_meta(get_the_ID(),'_cmb_annual_fee', true);
      $rate = get_post_meta(get_the_ID(),'_cmb_Rate_rewards', true);
      $except = get_post_meta(get_the_ID(),'_cmb_except', true);
      $disable_expand = get_post_meta(get_the_ID(),'_cmb_disable_expand', true);
    ?>
    <tr>
        <?php if ( has_post_thumbnail() ) { ?><td><?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?></td><?php } ?>
        <td>
            <span class="text-dark compare-card-title"><?php the_title(); ?></span>
            <br>
            <div class="icon rate-done mb10"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star "></i></div>
        </td>
        <td class="text-dark text-bold"><?php echo esc_attr($annual); ?></td>
        <td class="text-dark text-bold"><?php echo esc_attr($rate); ?></td>
        <td class="text-center">
            <a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default btn-sm mb5"><?php echo esc_attr($btn_text); ?></a>
            <?php if($small_text!=''){ ?><br><small><?php echo esc_attr($mall_text); ?></small><?php } ?>
            <?php if($disable_expand!=true){ ?><div class="mt10"><a class="btn-link" id="example-one" data-text-swap="<?php esc_html_e('Hide Details','borrow'); ?>" data-text-original="<?php esc_html_e('Expand Details','borrow'); ?>" data-toggle="collapse" href="#collapseExample-<?php echo esc_attr($i); ?>" aria-expanded="false" aria-controls="collapseExample-<?php echo esc_attr($i); ?>"> <?php esc_html_e('Expand Details','borrow'); ?> </a></div><?php } ?>
        </td>
    </tr>
    <?php if($disable_expand!=true){ ?>
    <tr>
        <td colspan="12" class="expandable-info">
            <div class="collapse expandable-collapse" id="collapseExample-<?php echo esc_attr($i); ?>">
                <div class="row">
                    <?php the_content(); ?>
                </div>
            </div>
        </td>
    </tr>
    <?php } ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  </tbody>
  </table>
</div>
</div>
<script type="text/javascript">
   (function($) {
        $(document).ready(function(){
            $("#example-one, #example-two, #example-three, #example-four, #example-five ").on("click", function() {
        var el = $(this);
        el.text() == el.data("text-swap") ?
            el.text(el.data("text-original")) :
            el.text(el.data("text-swap"));
    });
        });
  })(jQuery);
</script>
<?php
    return ob_get_clean();
}

// OT Forex (update may 2020)
add_shortcode('ot_forex', 'ot_forex_func');
function ot_forex_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'        =>  '',
        'col'           =>  '3',
        'idcate'        =>  '',
        'btntext'       =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
  <?php 
    $i=0;
      if($idcate!=''){
      $args = array(   
        'post_type' => 'forex',   
        'posts_per_page' => $number1,
        'tax_query' => array(
          array(
            'taxonomy' => 'forex_cat',
            'field' => 'slug',
            'terms' => explode(',',$idcate),
          ),
        ),  
      );  
      }else{
      $args = array(   
        'post_type' => 'forex',   
        'posts_per_page' => $number1, 
      );   
      }
    $wp_query = new WP_Query($args);
    while($wp_query->have_posts()) : $wp_query->the_post(); $i++;
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
  ?>
    <div class="row d-flex mb-3 border no-gutters">
        <div class="col-12 col-lg-3 col-md-3  d-flex align-items-center p-3 justify-content-center">
          <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail(); ?>
          <?php } ?>
        </div>
        <div class="p-4 col-12 col-lg-9 col-md-9 border-left ml-n1">
            <a href="<?php the_permalink(); ?>">
                <h4 class="mb-3"><?php the_title(); ?></h4>
            </a>
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="font-12">
                        <p class="mb-1"><span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Leverage:','borrow'); ?></span><?php echo esc_attr($leverage); ?></p>
                        <p class="mb-1"><span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Deposit:','borrow'); ?></span><?php echo esc_attr($deposit); ?></p>
                        <p class="mb-0">
                            <span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Spreads:','borrow'); ?></span>
                            <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                                <?php $images = rwmb_meta( '_cmb_spreads', "type=image" ); ?>
                                <?php if($images){ ?>              
                                    <?php  foreach ( $images as $image ) {  ?>
                                        <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="mr-2 align-baseline" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                    <?php } ?>                
                                <?php } ?>
                            <?php } ?>
                            <?php echo esc_attr($spreads_stt); ?>
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="font-12">
                        <p class="mb-1"><span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Location:','borrow'); ?></span><?php echo esc_attr($location); ?></p>
                        <p class="mb-1"><span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Instruments:','borrow'); ?></span><?php echo esc_attr($instruments); ?></p>
                        <p class="mb-1"><span class="font-weight-bold mr-1 text-dark"><?php esc_html_e('Platforms:','borrow'); ?></span><?php echo esc_attr($platforms); ?></p>
                        <p class="mb-0"><span class="font-weight-bold mr-2 text-dark"><?php esc_html_e('Funding methods:','borrow'); ?></span>
                          <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                            <?php $images = rwmb_meta( '_cmb_asd', "type=image" ); ?>
                              <?php if($images){ ?>
                                    <?php foreach ( $images as $image ) { ?>
                                      <img  src="<?php echo esc_url($image['full_url']); ?>" class="mr-2 align-baseline" alt="">
                                    <?php } ?>
                              <?php } ?>
                          <?php } ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php
    return ob_get_clean();
}

// OT Compare feature ( update may 2020 )
add_shortcode('comparefea', 'comparefea_func');
function comparefea_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'        =>  '',
        'link'         =>  '',
        'bg'           =>  '',
        'image'        =>  '',
        'bsize'        =>  'small',
        'style'        =>  'style1',
    ), $atts));
    ob_start(); 
?>
  <?php if($style=='style1'){
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => '') ); ?>
    <a href="<?php echo esc_url($link); ?>" class="card bg-white text-center shadow border-0 lift">
      <div class="card-body p-3">
        <div class="icon-shape rounded-circle icon-lg mb-3" <?php if($bg!=''){ ?> style="background-color:<?php echo esc_attr($bg); ?>;"<?php } ?>>
          <?php echo $img; ?>
        </div>
        <?php if($title){ ?><h4><?php echo esc_attr($title); ?></h4><?php } ?>
      </div>
    </a>
  <?php }else{ 
    if($bsize=='small'){
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'mb-3 icon-md') ); 
    }else{
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'mb-4 icon-lg') );
    } ?>
    <a href="<?php echo esc_url($link); ?>" class="card text-center bg-white border-0 lift">
        <div class="card-body <?php if($bsize=='small'){echo 'p-3';} ?>">
            <?php echo $img; ?>
            <?php if($title){ ?><h5 class="font-14 mb-0"><?php echo esc_attr($title); ?></h5><?php } ?>
        </div>
    </a>
  <?php } ?>

<?php
    return ob_get_clean();
}

// OT Avatar Box ( update may 2020 )
add_shortcode('avtbox', 'avtbox_func');
function avtbox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'        =>  '',
        'image'        =>  '',
    ), $atts));
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'mr-3 icon-md icon-shape rounded-circle') );
    ob_start(); 
?>
    <div class="media align-items-center mb-4">
      <?php echo $img; ?>
      <?php if($title){ ?>
      <div class="media-body">
        <h5 class="mb-0"><?php echo esc_attr($title); ?></h5>
      </div>
      <?php } ?>
    </div>

<?php
    return ob_get_clean();
}

// OT Card Rate Box ( update may 2020 )
add_shortcode('cardrate', 'cardrate_func');
function cardrate_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'        =>  '',
        'badge'        =>  '',
        'image'        =>  '',
    ), $atts));
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'mr-3 w-25') );
    ob_start(); 
?>
    <div class="card bg-white mb-3 shadow">
      <?php if($badge){ ?><span class="badge badge-info badge-rate font-11 float-right"><?php echo esc_attr($badge); ?></span><?php } ?>
      <div class="card-body p-4">
        <div class="media align-items-center">
          <?php echo $img; ?>
          <div class="media-body">
            <?php if($title){ ?><h6 class="mb-1"><?php echo esc_attr($title); ?></h6><?php } ?>
            <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
          </div>
        </div>
      </div>
    </div>

<?php
    return ob_get_clean();
}

// Review Box 2 ( update may 2020 )
add_shortcode('reviewbimg', 'reviewbimg_func');
function reviewbimg_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'        =>  '',
        'image'        =>  '',
        'rimg'         =>  '',
    ), $atts));
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'rounded-circle mr-3 icon-md') );
    $img2 = wp_get_attachment_image( $rimg, $size = 'full', '' );
    ob_start(); 
?>
    <div class="card bg-white">
      <div class="card-body">
        <div class="media align-items-center mb-4">
          <?php echo $img; ?>
          <?php if($img2){ ?><div class="media-body">
            <?php echo $img2; ?>
          </div><?php } ?>
        </div>
        <?php if($title){ ?><h4><?php echo esc_attr($title); ?></h4><?php } ?>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
    </div>

<?php
    return ob_get_clean();
}

// Newsletter ( Update May 2020 )
add_shortcode('newslet','newslet_func');
function newslet_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'        =>  '',
        'title'       =>  '',
        'btn'         =>  '',
        'plh'         =>  '',
        'iclass'      =>  '',
    ), $atts));
    $img = wp_get_attachment_image( $photo, $size = 'full', '', array('class' => 'img-fluid') );
    ob_start(); ?>
    <?php if (class_exists('newsletter')) { ?>
    
    <form class="<?php echo esc_attr($iclass); ?>" role="form" method="post" id="form-subscribe-ft" action="<?php echo esc_url( home_url( '/' ) ); ?>?na=s" onsubmit="return newsletter_check(this)"> 
        <?php if($icon){ ?><div class=" icon-shape icon-lg bg-icon-newsletter text-white rounded-circle mb-4"> <i class="fa <?php echo esc_attr($icon); ?>"></i></div><?php } ?>
        <?php if($title){ ?><h3 class="mb-5"><?php echo htmlspecialchars_decode($title); ?></h3><?php } ?>
        <div class="input-group mb-3">
            <input type="email" name="ne" class="form-control" placeholder="<?php echo esc_attr($plh); ?>" aria-label="<?php echo esc_attr($plh); ?>" aria-describedby="newsletter">
            <div class="input-group-append">
                <button type="submit" class=" btn btn-default" id="newsletter"><?php echo esc_attr($btn); ?></button>
            </div>
        </div>
    </form>
      <!-- Newsletter form --> 
        <script type="text/javascript">        
          if (typeof newsletter_check !== "function") {
            window.newsletter_check = function (f) {
                var re = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-]{1,})+\.)+([a-zA-Z0-9]{2,})+$/;
                if (!re.test(f.elements["ne"].value)) {
                    alert("The email is not correct");
                    return false;
                }
                for (var i=1; i<20; i++) {
                if (f.elements["np" + i] && f.elements["np" + i].value == "") {
                    alert("");
                    return false;
                }
                }
                if (f.elements["ny"] && !f.elements["ny"].checked) {
                    alert("You must accept the privacy statement");
                    return false;
                }
                return true;
            }
          }
        </script>
<?php } ?>  
    <?php
    return ob_get_clean();
}

// OT Credit Cart feature (update may 2020)
add_shortcode('ccfeature', 'ccfeature_func');
function ccfeature_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'        =>  '',
        'stitle'       =>  '',
        'linkbox'      =>  '',
    ), $atts));
    $url = vc_build_link($linkbox);
    ob_start(); 
?>
  <div class="card card-credit text-center bg-white mb-2">
      <div class="card-header bg-white">
          <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
      <div class="card-body p-3">
          <?php if($title){ ?><h2 class="font-weight-bold mb-0"><?php echo esc_attr($title); ?></h2><?php } ?>
          <?php if($stitle){ ?><p class="mb-0"><?php echo esc_attr($stitle); ?></p><?php } ?>
      </div>
      
      <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
          echo '<div class="card-footer bg-transparent"><a class="btn-link" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a></div>';
      } ?>
      
  </div>

<?php
    return ob_get_clean();
}

// OT Simple Box (update may 2020)
add_shortcode('mmbox', 'mmbox_func');
function mmbox_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'        =>  '',
        'image'        =>  '',
        'linkbox'      =>  '',
        'style'        =>  'style1',
    ), $atts));
    $url = vc_build_link($linkbox);
    ob_start(); 
?>
  <?php if($style=='style1'){ 
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'mb-4') ); ?>
    <div class="card bg-white">
      <div class="card-body">
        <?php echo $img; ?>
        <?php if($title){ ?><h3><?php echo esc_attr($title); ?></h3><?php } ?>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
    </div>
  <?php }elseif($style=='style2'){ 
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'mb-4') ); ?>
    <div class="card bg-white text-center">
        <div class="card-body">
            <?php echo $img; ?>
            <?php if($title){ ?><h3><?php echo esc_attr($title); ?></h3><?php } ?>
            <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
        </div>
        <div class="card-footer bg-white border-top-0 py-4">
            <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
                echo '<a class="btn-link" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
            } ?>
        </div>
    </div>
  <?php }else{ 
    $img = wp_get_attachment_image( $image, $size = 'full', '', array('class' => 'mr-4') ); ?>
    <div class="media mb-5">
      <?php echo $img; ?>
      <div class="media-body">
        <?php if($title){ ?><h3 class="mt-0"><?php echo esc_attr($title); ?></h3><?php } ?>
        <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
      </div>
    </div>
  <?php } ?>

<?php
    return ob_get_clean();
}

// OT Lender Grid
add_shortcode('ot_lendergrid', 'ot_lendergrid_func');
function ot_lendergrid_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'         =>  '',
        'number'        =>  '',
        'col'           =>  '3',
        'btntext'       =>  '',
        'style'         =>  'style1',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'More Informations');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
<div class="row">
  <?php 
    $i=0;
    $args = array(   
        'post_type' => 'ot_lenders',   
        'posts_per_page' => $number1,
    );  
    $wp_query = new WP_Query($args);
    while($wp_query->have_posts()) : $wp_query->the_post(); $i++;
    $advertised_title = get_post_meta(get_the_ID(),'_cmb_advertised_title', true);
    $advertised_number = get_post_meta(get_the_ID(),'_cmb_advertised_number', true);
    $comparison_title = get_post_meta(get_the_ID(),'_cmb_comparison_title', true);
    $comparison_number = get_post_meta(get_the_ID(),'_cmb_comparison_number', true);
    $btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
    $btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
    $except = get_post_meta(get_the_ID(),'_cmb_except', true);
  ?>
    <?php 
        $column = ' ';
        if( $col == 3 ){
            if($i%3==1){
            $column = 'col-lg-4 col-md-4 col-sm-6 col-xs-12 clear';
            }else{
            $column = 'col-lg-4 col-md-4 col-sm-6 col-xs-12';  
            }
        }elseif( $col == 2 ){
            if($i%2==1){
            $column = 'col-md-6 col-sm-6 col-xs-12 clear';
            }else{
            $column = 'col-md-6 col-sm-6 col-xs-12';
            }
        }else{
            if($i%4==1){
            $column = 'col-lg-3 col-md-4 col-sm-6 col-xs-12 clear';
            }else{
            $column = 'col-lg-3 col-md-4 col-sm-6 col-xs-12';
            }
        }

        if( $col == 3 ){
            if($i%3==1){
            $columns2 = 'col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6 clear';
            }else{
            $columns2 = 'col-xl-4 col-lg-4 col-md-4 col-sm-4 col-6';  
            }
        }elseif( $col == 2 ){
            if($i%2==1){
            $columns2 = 'col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 clear';
            }else{
            $columns2 = 'col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6';
            }
        }else{
            if($i%4==1){
            $columns2 = 'col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 clear';
            }else{
            $columns2 = 'col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6';
            }
        }
    ?>
<?php if($style=='style1'){ ?>
    <div class="<?php echo esc_attr($column); ?>">
      <div class="lender-listing">
          <!-- lender listing -->
          <div class="lender-head">
              <?php if ( has_post_thumbnail() ) { ?>
                <div class="lender-logo">
                  <?php the_post_thumbnail(); ?>
                </div>
              <?php } ?>
              <div class="lender-reviews">
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i> 
                <i class="fa fa-star"></i>
              </div>
          </div>
          <div class="lender-rate-box">
            <?php if($advertised_title != ''){ ?>
              <div class="lender-ads-rate">
                  <small><?php echo esc_attr($advertised_title); ?></small>
                  <h3 class="lender-rate-value"><?php echo esc_attr($advertised_number); ?></h3>
              </div>
            <?php } ?>  
            <?php if($comparison_title != ''){ ?>
              <div class="lender-compare-rate">
                  <small><?php echo esc_attr($comparison_title); ?></small>
                  <h3 class="lender-rate-value"><?php echo esc_attr($comparison_number); ?></h3>
              </div>
            <?php } ?>  
          </div>
          <?php if($except != ''){ ?>
            <div class="lender-feature-list">
                <?php echo htmlspecialchars_decode($except); ?>
            </div>
          <?php } ?>
          <div class="lender-actions">
              <?php if($btn_link != ''){ ?><a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default btn-block"><?php echo esc_attr($btn_text); ?></a><?php } ?>
              <a href="<?php the_permalink(); ?>" class="btn-link"> <?php echo esc_attr($btntext1); ?></a>
          </div>
      </div>
      <!-- /.lender listing -->
  </div>
<?php }else{ ?>
  <div class="<?php echo esc_attr($columns2); ?> <?php if($number > $col){echo 'mb30';} ?>">
      <div class="text-center">
          <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) { ?>
            <div class="lender-logo">
              <?php the_post_thumbnail(); ?>
            </div>
          <?php } ?>
          </a>
      </div>
  </div>
<?php } ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>
<?php
    return ob_get_clean();
}

// OT Lender Compare (6-2018)
add_shortcode('ot_lendercp', 'ot_lendercp_func');
function ot_lendercp_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'           =>  '',
        'disable_expand'   =>  '',
        'style'          =>  'style1',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
<div class="compare-table">
<div class="bg-white table-responsive">
  <table class="table">
  <?php if($style=='style1'){ ?>
    <thead>
        <tr>
            <th style="width:18%;" class="lender-tag"><?php esc_html_e('Lender','borrow'); ?></th>
            <th style="width:19%;" class="estimate-text"><?php esc_html_e('Estimated APR','borrow'); ?></th>
            <th style="width:15%;" class="credit-score"><?php esc_html_e('Min. Credit Score','borrow'); ?></th>
            <th style="width:17%;" class="terms"><?php esc_html_e('Available Terms','borrow'); ?> </th>
            <th class="monthly-payment"><?php esc_html_e('Monthly Payment','borrow'); ?></th>
            <th class="action"></th>
        </tr>
    </thead>
    <?php }else{ ?>
    <thead>
        <tr>
            <th style="width:18%;" class="lender-tag"><?php esc_html_e('Lender','borrow'); ?></th>
            <th style="width:19%;" class="fixed-text"><?php esc_html_e('Fixed APR','borrow'); ?></th>
            <th style="width:19%;" class="variable-apr"><?php esc_html_e('Variable APR','borrow'); ?></th>
            <th style="width:17%;" class="terms"><?php esc_html_e('Terms(years)','borrow'); ?> </th>                                   
            <th class="action"></th>
        </tr>
    </thead>
    <?php } ?>
    <tbody>
    <?php 
    $i=0;
      $args = array(   
          'post_type' => 'ot_lenders',   
          'posts_per_page' => $number1,
      );  
      $wp_query = new WP_Query($args);
      while($wp_query->have_posts()) : $wp_query->the_post();  $i++;   
      $btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
      $btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
      $except = get_post_meta(get_the_ID(),'_cmb_except', true);
      $estimated_apr = get_post_meta(get_the_ID(),'_cmb_estimated_apr', true);
      $min_credit_score = get_post_meta(get_the_ID(),'_cmb_min_credit_score', true);
      $available_terms = get_post_meta(get_the_ID(),'_cmb_available_terms', true);
      $monthly_payment = get_post_meta(get_the_ID(),'_cmb_monthly_payment', true);
      $fixed_apr = get_post_meta(get_the_ID(),'_cmb_estimated_apr', true);
      $variable_apr = get_post_meta(get_the_ID(),'_cmb_variable_apr', true);
      $terms = get_post_meta(get_the_ID(),'_cmb_terms_year', true);
    ?>
    <?php if($style=='style1'){ ?>
    <tr>
        <?php if ( has_post_thumbnail() ) { ?><td><?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?></td><?php } ?>
        <td>
            <h3 class="compare-personal-loan-title"><?php echo htmlspecialchars_decode($estimated_apr); ?></h3><small><?php esc_html_e('Estimated APR','borrow'); ?></small>
        </td>
        <td>
            <h3 class="compare-personal-loan-title"><?php echo htmlspecialchars_decode($min_credit_score); ?></h3><small><?php esc_html_e('Min. Credit Score','borrow'); ?></small>
        </td>
        <td>
            <h3 class="compare-personal-loan-title"><?php echo htmlspecialchars_decode($available_terms); ?></h3><small><?php esc_html_e('Available Terms','borrow'); ?></small>
        </td>
        <td><h3 class="compare-personal-loan-title"><?php echo htmlspecialchars_decode($monthly_payment); ?></h3> </td>
        <td class="text-center">
            <a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default btn-sm mb5"> <?php echo esc_attr($btn_text); ?></a>
            <?php if($disable_expand!=true){ ?><div class="mt10"><a class="btn-link" id="example-one" data-text-swap="<?php esc_html_e('Hide Details','borrow'); ?>" data-text-original="<?php esc_html_e('Expand Details','borrow'); ?>" data-toggle="collapse" href="#collapseExample-<?php echo esc_attr($i); ?>" aria-expanded="false" aria-controls="collapseExample-<?php echo esc_attr($i); ?>"> <?php esc_html_e('Expand Details','borrow'); ?> </a></div><?php } ?>
        </td>
    </tr>
    <?php }else{ ?>
    <tr>
        <?php if ( has_post_thumbnail() ) { ?><td><?php the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) ); ?></td><?php } ?>
        <td>
            <h3 class="compare-student-loan-title"><?php echo htmlspecialchars_decode($fixed_apr); ?></h3><small><?php esc_html_e('Fixed APR','borrow'); ?></small>
        </td>
        <td>
            <h3 class="compare-student-loan-title"><?php echo htmlspecialchars_decode($variable_apr); ?></h3> <small><?php esc_html_e('Variable APR','borrow'); ?></small>
        </td>
        <td>
            <h3 class="compare-student-loan-title"><?php echo htmlspecialchars_decode($terms); ?></h3> <small><?php esc_html_e('Terms(years)','borrow'); ?></small>
        </td>
       
        <td class="text-center">
            <a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default btn-sm mb5"> <?php echo esc_attr($btn_text); ?></a>
            <?php if($disable_expand!=true){ ?><div class="mt10"><a class="btn-link" id="example-one" data-text-swap="<?php esc_html_e('Hide Details','borrow'); ?>" data-text-original="<?php esc_html_e('Expand Details','borrow'); ?>" data-toggle="collapse" href="#collapseExample-<?php echo esc_attr($i); ?>" aria-expanded="false" aria-controls="collapseExample-<?php echo esc_attr($i); ?>"> <?php esc_html_e('Expand Details','borrow'); ?> </a></div><?php } ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($disable_expand!=true){ ?>
    <tr>
        <td colspan="12" class="expandable-info">
            <div class="collapse expandable-collapse" id="collapseExample-<?php echo esc_attr($i); ?>">
                <div class="row">
                    <?php the_content(); ?>
                </div>
            </div>
        </td>
    </tr>
    <?php } ?>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
  </tbody>
  </table>
</div>
</div>
<script type="text/javascript">
   (function($) {
        $(document).ready(function(){
            $("#example-one, #example-two, #example-three, #example-four, #example-five ").on("click", function() {
        var el = $(this);
        el.text() == el.data("text-swap") ?
            el.text(el.data("text-original")) :
            el.text(el.data("text-swap"));
    });
        });
  })(jQuery);
</script>
<?php
    return ob_get_clean();
}

// OT Bank Account List Grid (hw_Unlock(PDATE 6 - 2018, objectID))
add_shortcode('ot_bankaccount', 'ot_bankaccount_func');
function ot_bankaccount_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'           =>  '',
        'btntext'           =>  '',
    ), $atts));
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'View Details');
    $number1 = (!empty($number) ? esc_attr($number) : 3);
    ob_start(); 
?>
  <?php 
    $args = array(   
        'post_type' => 'bank_account',   
        'posts_per_page' => $number1,
    );  
    $wp_query = new WP_Query($args);
    while($wp_query->have_posts()) : $wp_query->the_post();     
    $btn_text = get_post_meta(get_the_ID(),'_cmb_btn_text', true);
    $btn_link = get_post_meta(get_the_ID(),'_cmb_btn_link', true);
    $earn_label = get_post_meta(get_the_ID(),'_cmb_earn_label', true);
    $max_earn = get_post_meta(get_the_ID(),'_cmb_max_earn', true);
    $detail = get_post_meta(get_the_ID(),'_cmb_detail', true);
    $except = get_post_meta(get_the_ID(),'_cmb_except', true);
  ?>
    <div class="card">
        <div class="card-header">
            <h3 class="text-primary mb0"><?php the_title(); ?></h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 col-s1">
                    <div class="mb30">
                        <p><?php echo htmlspecialchars_decode($detail); ?></p>
                        <?php if($max_earn){ ?>
                        <div class="mb20 mt20">
                            <span><?php echo esc_attr($earn_label); ?> </span>
                            <h1 class="display-4 text-bold text-primary"><?php echo htmlspecialchars_decode($max_earn); ?></h1>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <?php if($except){ ?>
                <div class="col-xl-5 col-lg-5 col-md-8 col-sm-12 col-12">
                    <?php echo htmlspecialchars_decode($except); ?>
                </div>
                <?php } ?>
                 <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 text-center col-s3">
                    <?php if($btn_link != ''){ ?><a href="<?php echo esc_url($btn_link); ?>" class="btn btn-default mb20"><?php echo esc_attr($btn_text); ?></a><?php } ?>
                    <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a>
                 </div>
            </div>
        </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php
    return ob_get_clean();
}

//Compare Box
add_shortcode('compares', 'compares_func');
function compares_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'            =>  '',
        'image'            =>  '',
        'rate_number'      =>  '',
        'rate'             =>  '',
        'fees_number'      =>  '',
        'fees'             =>  '',
        'compare_number'   =>  '',
        'compare'          =>  '',
        'repayment_number' =>  '',
        'repayment'        =>  '',
        'linkbox'          =>  '',
    ), $atts));

    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <div class="compare-block mb30">
    <div class="compare-title bg-primary pinside20">
        <?php if($title!=''){ ?><h3 class="mb0"><?php echo esc_attr($title); ?></h3><?php } ?>
    </div>
    <div class="compare-row outline pinside30">
        <div class="row">
            <?php if ( $image !='' ) { ?>
              <div class="col-md-2 col-sm-12 col-xs-12"><?php echo wp_get_attachment_image( $image, 'full', '' ); ?></div>
            <?php } ?>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="text-center">
                    <?php if($rate_number!=''){ ?><h3 class="rate"><?php echo esc_attr($rate_number); ?></h3><?php } ?>
                   <small><?php echo esc_attr($rate); ?></small>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="text-center">
                    <?php if($fees_number!=''){ ?><h3 class="fees"><?php echo esc_attr($fees_number); ?></h3><?php } ?>
                    <small><?php echo esc_attr($fees); ?></small> 
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
                <div class="text-center">
                    <?php if($compare_number!=''){ ?><h3 class="compare-rate"><?php echo esc_attr($compare_number); ?></h3><?php } ?>
                    <small><?php echo esc_attr($compare); ?>*</small> 
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
                <div class="text-center">
                    <?php if($repayment_number!=''){ ?><h3 class="repayment"><?php echo esc_attr($repayment_number); ?></h3><?php } ?>
                    <small><?php echo esc_attr($repayment); ?></small> 
                </div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="text-center comapre-action"> 
                  <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
                      echo '<a class="btn btn-default btn-sm" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
                  } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    return ob_get_clean();
}

//Contact info
add_shortcode('conin', 'conin_func');
function conin_func($atts, $content = null){
    extract(shortcode_atts(array(
        'icon'       =>  '',    
        'title'      =>  '',    
        'stitle'     =>  '',    
        'linkbox'    =>  '',     
    ), $atts));
    $url = vc_build_link( $linkbox );
    ob_start(); 
?>
  <div class="bg-white bg-boxshadow pinside40 outline text-center mb30">
    <div class="mb40"><i class="<?php echo esc_attr($icon); ?>  icon-2x icon-default"></i></div>
    <?php if($title!=''){ ?><h2 class="capital-title"><?php echo htmlspecialchars_decode($title); ?></h2><?php } ?>
    <?php if($stitle!=''){ ?><h1 class="text-big"><?php echo htmlspecialchars_decode($stitle); ?></h1><?php } ?>
    <?php if($content!=''){ echo wpb_js_remove_wpautop($content, true); } ?>
    <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
        echo '<a class="btn-link" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
    } ?>
  </div>
<?php
    return ob_get_clean();
}

//Loan Calculator
add_shortcode('calculator', 'calculator_func');
function calculator_func($atts, $content = null){
    extract(shortcode_atts(array(
        'amount_tx'  =>  '',    
        'amount'     =>  '', 
        'range_amount'  => '',   
        'month_tx'   =>  '',    
        'month'      =>  '',   
        'range_month'  => '',   
        'rate_tx'    =>  '',    
        'rate'       =>  '', 
        'range_rate'  => '',    
        'edm_m'      =>  '',    
        'interest'   =>  '',   
        'payable'    =>  '',    
        'percentage' =>  '', 
        'linkbox'    =>  '',    
        'currentcy'  => '', 
        'thousand_separator'   =>  '',  
        'decimal_separator'   =>  '', 
        'number_of_decimals'   =>  '',  
    ), $atts));
    $url = vc_build_link( $linkbox );
    $currentcy1 = (!empty($currentcy) ? $currentcy : '');
    $thousand_separator1 = (!empty($thousand_separator) ? $thousand_separator : ',');
    $decimal_separator1 = (!empty($decimal_separator) ? $decimal_separator : '.');
    $number_of_decimals1 = (!empty($number_of_decimals) ? $number_of_decimals : 2);
    ob_start(); 
?>
  <div class="row">
    <div class="col-md-6">
        <div class="bg-light pinside40 outline">
            <span><?php echo esc_attr($amount_tx); ?> </span>
            <strong><span class="pull-right" id="la_value"><?php echo esc_attr($amount); ?></span></strong>
            <input type="text" data-slider="true" value="<?php echo esc_attr($amount); ?>" data-slider-range="<?php echo esc_attr($range_amount); ?>" data-slider-step="10000" data-slider-snap="true" id="la">
            <hr>
            <span><?php echo esc_attr($month_tx); ?> <strong><span class="pull-right"  id="nm_value"><?php echo esc_attr($month); ?></span> </strong>
            </span>
            <input type="text" data-slider="true" value="<?php echo esc_attr($month); ?>" data-slider-range="<?php echo esc_attr($range_month); ?>" data-slider-step="1" data-slider-snap="true" id="nm">
            <hr>
            <span><?php echo esc_attr($rate_tx); ?> <strong><span class="pull-right"  id="roi_value"><?php echo esc_attr($rate); ?></span>
            </strong>
            </span>
            <input type="text" data-slider="true" value="<?php echo esc_attr($rate); ?>" data-slider-range="<?php echo esc_attr($range_rate); ?>" data-slider-step=".05" data-slider-snap="true" id="roi">
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12 ">
                <div class="bg-light pinside30 outline">
                    <?php echo esc_attr($edm_m); ?>
                    <h2 id='emi' class="pull-right"></h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="bg-light pinside30 outline">
                    <?php echo esc_attr($interest); ?>
                    <h2 id='tbl_int' class="pull-right"></h2>
                </div>
            </div>
            <div class="col-md-12">
                <div class="bg-light pinside30 outline"> 
                    <?php echo esc_attr($payable); ?>
                    <h2 id='tbl_full' class="pull-right"></h2></div>
            </div>
            <div class="col-md-12">
                <div class="bg-light pinside30 outline">
                     <?php echo esc_attr($percentage); ?>
                    <h2 id='tbl_int_pge' class="pull-right"></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
          echo '<a class="btn btn-default" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
        } ?>
    </div>
</div>
<script type="text/javascript">
   (function($) {
        $(document).ready(function(){
            $("#la").bind(
                "slider:changed", function (event, data) {              
                    $("#la_value").html(data.value.toFixed(0)); 
                    calculateEMI();
                }
            );

            $("#nm").bind(
                "slider:changed", function (event, data) {              
                    $("#nm_value").html(data.value.toFixed(0)); 
                    calculateEMI();
                }
            );
            
            $("#roi").bind(
                "slider:changed", function (event, data) {              
                    $("#roi_value").html(data.value.toFixed(2)); 
                    calculateEMI();
                }
            );
            
            function calculateEMI(){
                var loanAmount = $("#la_value").html();
                var numberOfMonths = $("#nm_value").html();
                var rateOfInterest = $("#roi_value").html();
                var monthlyInterestRatio = (rateOfInterest/100)/12;
                
                var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
                var bottom = top -1;
                var sp = top / bottom;
                var emi = ((loanAmount * monthlyInterestRatio) * sp);
                var full = numberOfMonths * emi;
                var interest = full - loanAmount;
                var int_pge =  (interest / full) * 100;
                $("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
                //$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");               
                
                var emi_str = "<?php echo esc_attr($currentcy1); ?>" + emi.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/\B(?=(\d{3})+(?!\d))/g, "<?php echo esc_js($thousand_separator1); ?>");
                var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                var full_str = "<?php echo esc_attr($currentcy1); ?>" + full.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/\B(?=(\d{3})+(?!\d))/g, "<?php echo esc_js($thousand_separator1); ?>");
                var int_str = "<?php echo esc_attr($currentcy1); ?>" + interest.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/\B(?=(\d{3})+(?!\d))/g, "<?php echo esc_js($thousand_separator1); ?>");
                
                $("#emi").html(emi_str);
                $("#tbl_emi").html(emi_str);
                $("#tbl_la").html(loanAmount_str);
                $("#tbl_nm").html(numberOfMonths);
                $("#tbl_roi").html(rateOfInterest);
                $("#tbl_full").html(full_str);
                $("#tbl_int").html(int_str);                 
            }
            calculateEMI();
        });
	})(jQuery);
</script>

<?php
    return ob_get_clean();
}

//Loan Calculator 2 (june 2018)
add_shortcode('calculator2', 'calculator2_func');
function calculator2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title'  =>  '',  
        'amount_tx'  =>  '',    
        'min_amount'     =>  '', 
        'max_amount'     =>  '', 
        'value_amount'     =>  '', 
        'step_amount'     =>  '',   
        'month_tx'   =>  '',    
        'min_month'      =>  '',   
        'max_month'  => '',  
        'step_month'  => '',   
        'value_month'  => '',  
        'rate_tx'    =>  '',    
        'min_rate'       =>  '', 
        'max_rate'  => '',   
        'step_rate'  => '', 
        'value_rate'  => '',      
        'edm_m'      =>  '',    
        'interest'   =>  '',   
        'payable'    =>  '',   
        'linkbox'    =>  '',    
        'currentcy'  => '', 
        'thousand_separator'   =>  '',  
        'decimal_separator'   =>  '', 
        'number_of_decimals'   =>  '',  
    ), $atts));
    $url = vc_build_link( $linkbox );
    $currentcy1 = (!empty($currentcy) ? $currentcy : '');
    $thousand_separator1 = (!empty($thousand_separator) ? $thousand_separator : ',');
    $decimal_separator1 = (!empty($decimal_separator) ? $decimal_separator : '.');
    $number_of_decimals1 = (!empty($number_of_decimals) ? $number_of_decimals : 2);
    ob_start(); 
?>
  <div class="lead-calculator pinside40">
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb10">
              <h2 class="text-white mb20"><?php echo esc_attr($title); ?></h2>
              <div class="slider">
                  <h4 class="text-white"><?php echo esc_attr($amount_tx); ?></h4>
                  <div id="pricipal-slide"></div>
                  <div>
                      <h6 id="pricipal" class="text-white"></h6>
                  </div>
              </div>
              <div class="slider">
                  <h4 class="text-white"><?php echo esc_attr($month_tx); ?></h4>
                  <div id="totalyear-slide"></div>
                  <div>
                      <h6 id="totalyear" class="text-white"></h6>
                  </div>
              </div>
              <div class="slider">
                  <h4 class="text-white"><?php echo esc_attr($rate_tx); ?></h4>
                  <div id="intrest-slide"></div>
                  <div>
                      <h6 id="intrest" class="text-white"></h6>
                      <span class="percentage-text">%</span>
                  </div>
              </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
              <div class="single-total">
                  <h5 class="lead-cal-small-text"><?php echo esc_attr($edm_m); ?></h5>
                  <h4 class="text-white emi-price" id="emi">0</h4>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
              <div class="single-total">
                  <h5 class="lead-cal-small-text"><?php echo esc_attr($interest); ?></h5>
                  <h4 class="text-white" id="tbl_emi">0</h4>
              </div>
          </div>
          <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
              <div class="single-total">
                  <h5 class="lead-cal-small-text"><?php echo esc_attr($payable); ?></h5>
                  <h4 class="text-white" id="tbl_la">0</h4>
              </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
              <?php if ( strlen( $linkbox ) > 0 && strlen( $url['url'] ) > 0 ) {
                echo '<a class="btn btn-default btn-sm" href="' . esc_attr( $url['url'] ) . '" title="' . esc_attr( $url['title'] ) . '" target="' . ( strlen( $url['target'] ) > 0 ? esc_attr( $url['target'] ) : '_self' ) . '">' . esc_attr( $url['title'] ) . '</a>';
              } ?>
          </div>
      </div>
  </div>
<script type="text/javascript">
   (function($) {
        $(document).ready(function(){

            $("#pricipal-slide").slider({
                range: "min",
                min: <?php echo esc_attr($min_amount); ?>,
                max: <?php echo esc_attr($max_amount); ?>,
                value: <?php echo esc_attr($value_amount); ?>,
                step: <?php echo esc_attr($step_amount); ?>,
                slide: function(event, ui) {
                    $("#pricipal").text(ui.value);
                    loancalculate();
                }
            });
            $("#pricipal").text($("#pricipal-slide").slider("value"));

            $("#totalyear-slide").slider({
                range: "min",
                min: <?php echo esc_attr($min_month); ?>,
                max: <?php echo esc_attr($max_month); ?>,
                step: <?php echo esc_attr($step_month); ?>,
                value: <?php echo esc_attr($value_month); ?>,
                slide: function(event, ui) {
                    $("#totalyear").text(ui.value);
                    loancalculate();
                }
            });
            $("#totalyear").text($("#totalyear-slide").slider("value"));

            $("#intrest-slide").slider({
                range: "min",
                min: <?php echo esc_attr($min_rate); ?>,
                max: <?php echo esc_attr($max_rate); ?>,
                step: <?php echo esc_attr($step_rate); ?>,
                value: <?php echo esc_attr($value_rate); ?>,
                slide: function(event, ui) {
                    $("#intrest").text(ui.value);
                    loancalculate();
                }
            });
            $("#intrest").text($("#intrest-slide").slider("value"));


        function loancalculate() {
            var loanAmount = $("#pricipal").text();
            var numberOfMonths = $("#totalyear").text();
            var rateOfInterest = $("#intrest").text();

            var monthlyInterestRatio = (rateOfInterest / 100) / 12;

            var top = Math.pow((1 + monthlyInterestRatio), numberOfMonths);
            var bottom = top - 1;
            var sp = top / bottom;
            var emi = ((loanAmount * monthlyInterestRatio) * sp);
            var full = numberOfMonths * emi;
            var interest = full - loanAmount;
            var int_pge = (interest / full) * 100;
            //$("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
            //$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");

            var emi_str = "<?php echo esc_attr($currentcy1); ?>" + emi.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/\B(?=(\d{3})+(?!\d))/g, "<?php echo esc_js($thousand_separator1); ?>");
            var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            var full_str = "<?php echo esc_attr($currentcy1); ?>" + full.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/\B(?=(\d{3})+(?!\d))/g, "<?php echo esc_js($thousand_separator1); ?>");
            var int_str = "<?php echo esc_attr($currentcy1); ?>" + interest.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/\B(?=(\d{3})+(?!\d))/g, "<?php echo esc_js($thousand_separator1); ?>");
          

            $("#emi").html(emi_str);
            $("#tbl_emi").html(int_str);
            $("#tbl_la").html(full_str);
        }
            loancalculate();
        });
  })(jQuery);
</script>

<?php
    return ob_get_clean();
}

//Loan Eligibility
add_shortcode('eligibility', 'eligibility_func');
function eligibility_func($atts, $content = null){
    extract(shortcode_atts(array(
        'title1'  =>  '',    
        'title2'     =>  '', 
        'currentcy'  => '',   
        'text_label_input1'   =>  '',    
        'text_placeholder1'      =>  '',   
        'text_label_input2'   =>  '',    
        'text_placeholder2'      =>  '',  
        'text_label_input3'   =>  '',    
        'text_placeholder3'      =>  '',
        'text_label_input4'   =>  '',    
        'text_placeholder4'      =>  '', 
        'text_label_input5'   =>  '',    
        'text_placeholder5'      =>  '', 
        'btn_text1'   =>  '', 
        'btn_text2'   =>  '', 
        'thousand_separator'   =>  '',  
        'decimal_separator'   =>  '', 
        'number_of_decimals'   =>  '',               
    ), $atts));
    $thousand_separator1 = (!empty($thousand_separator) ? $thousand_separator : ',');
    $decimal_separator1 = (!empty($decimal_separator) ? $decimal_separator : '.');
    $number_of_decimals1 = (!empty($number_of_decimals) ? $number_of_decimals : 0);
    ob_start(); 
?>
  
  <div class="loan-eligibility-block">
    <div class="row">
        <div class="col-lg-6">
            <h2 class="mb20"><?php echo esc_attr($title1); ?></h2>
            <form name="formval2" class="form-horizontal loan-eligibility-form">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input1); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo esc_attr($currentcy); ?></span>
                            <input type="number" class="form-control input-sm" id="input" name="pr_amt2" placeholder="<?php echo esc_attr($text_placeholder1); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input2); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo esc_attr($currentcy); ?></span>
                            <input type="number" class="form-control" id="input" name="NetIncome" placeholder="<?php echo esc_attr($text_placeholder2); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input3); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo esc_attr($currentcy); ?></span>
                            <input type="number" class="form-control" id="input" Name="ExLoan" placeholder="<?php echo esc_attr($text_placeholder3); ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input4); ?></label>
                        <input type="number" class="form-control" id="input" name="period2" placeholder="<?php echo esc_attr($text_placeholder4); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="input" class="control-label"><?php echo esc_attr($text_label_input5); ?></label>
                        <div class="input-group">
                            <span class="input-group-addon">%</span>
                            <input type="number" class="form-control" id="input" value="<?php echo esc_attr($text_placeholder5); ?>" name="int_rate2">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-default" onclick="eligiable()"><?php echo esc_attr($btn_text1); ?></button>
                        <button type="reset" class="btn btn-primary"><?php echo esc_attr($btn_text2); ?></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6">
            <h2 class="mb40"><?php echo esc_attr($title2); ?></h2>
            <div class="loan-eligibility-info">
                <form name="formval3" class="">
                    <div class="form-group">
                        <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text" name="field13">
                        </output>
                        <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-amount" name="field11"></output>
                    </div>
                    <div class="form-group">
                        <output class="col-lg-12 col-sm-12 col-md-12 col-xs-12 eligibility-text" name="field12"></output>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
<script type="text/javascript">
  function eligiable() {    
    var P1 = document.formval2.pr_amt2.value; // pick the form input value..
    var rate1 = document.formval2.int_rate2.value; // pick the form input value..
    var n1 = document.formval2.period2.value; // pick the form input value..
    var r1 = rate1 / (12 * 100); // to calculate rate percentage..
    var prate1 = (P1 * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest..
    var emi1 = Math.ceil(prate1 * 100) / 100; // to parse emi amount..    

    var existing = document.formval2.ExLoan.value;
    var existingLoan = (existing - (existing * 60 / 100));
    var income1 = document.formval2.NetIncome.value;
    if (income1 <= 14999) {
      var incomere = ((income1) * 40 / 100) - existingLoan;
    } else if (income1 <= 29999) {
      var incomere = ((income1) * 45 / 100) - existingLoan;
    } else if (income1 >= 30000) {
      var incomere = ((income1) * 50 / 100) - existingLoan;
    }
    var incomereq = Math.floor(incomere / emi1 * P1);
    var prate2 = (incomereq * r1 * Math.pow((1 + r1), n1 * 12)) / (Math.pow((1 + r1), n1 * 12) - 1); // to calculate compound interest2..
    var emi2 = Math.ceil((prate2) * 100) / 100; // to parse emi2 amount..   //Check again Reminder    

    // to assign value in field1 as fixed upto two decimal..
    if (incomereq > P1) {
      document.formval3.field13.value = ("You are Eligible for this loan");
      document.formval3.field11.value = ("<?php echo esc_attr($currentcy); ?>" + P1 + " at EMI " + "<?php echo esc_attr($currentcy); ?>" + emi1.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1<?php echo esc_js($thousand_separator1); ?>"));
      document.formval3.field12.value = ("You are Eligible for a maximum loan of " + ("<?php echo esc_attr($currentcy); ?>" + incomereq.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1<?php echo esc_js($thousand_separator1); ?>")) + " at EMI " + ("<?php echo esc_attr($currentcy); ?>" + emi2.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1<?php echo esc_js($thousand_separator1); ?>")));                
    } else {
      document.formval3.field13.value = ("You are not Eligible for this loan");
      document.formval3.field11.value = ("");
      document.formval3.field12.value = ("You are Eligible for a maximum loan of " + ("<?php echo esc_attr($currentcy); ?>" + incomereq.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1<?php echo esc_js($thousand_separator1); ?>")) + " at EMI " + ("<?php echo esc_attr($currentcy); ?>" + emi2.toFixed(<?php echo esc_js($number_of_decimals1); ?>).replace(".", "<?php echo esc_js($decimal_separator1); ?>").replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1<?php echo esc_js($thousand_separator1); ?>")));
    }
  }
</script>

<?php
  return ob_get_clean();
}

// Blog (use)
add_shortcode('blog', 'blog_func');
function blog_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    => '',
        'excerpt'   => '',
        'image'     => 'img1',
        'style'     => 'style1',
        'order'     =>  'DESC',
        'orderby'   =>  'date',
        'btntext'   =>  '',
    ), $atts));
    $excerpt1 = (!empty($excerpt)) ? $excerpt : 15;
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $order1 = (!empty($order) ? $order : 'DESC');
    $orderby1 = (!empty($orderby) ? $orderby : 'date');
    ob_start();
?>
    <?php if($style == 'style1'){ ?>
    <div class="row">
      <?php 
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
              'order' => $order1,
              'orderby' => $orderby1
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>
      <?php $format = get_post_format();?>
      <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="post-block mb30">
              <div class="post-img">
                  <a href="<?php the_permalink(); ?>" class="imghover">
                  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image2', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                              <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="img-responsive" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                  <?php } ?>
                  </a>
              </div>
              <div class="bg-white pinside40 outline">
                  <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
                  <p class="meta"><span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="meta-author"><?php esc_html_e('by ','otvcp-i10n'); ?> <?php the_author_posts_link(); ?></span></p>
                  <p><?php echo borrow_excerpt($excerpt1); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
              </div>
          </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <?php }elseif($style=='style2'){ ?>
    <div class="row">
      <?php 
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
              'order' => $order1,
              'orderby' => $orderby1
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>
      <?php $format = get_post_format();?>
      <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="post-block mb30">
              <div class="post-img">
                  <a href="<?php the_permalink(); ?>" class="imghover">
                  <?php if($image=='img1'){ ?>
                  <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                  <?php }else{ ?>
                  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image2', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                              <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="img-responsive" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                  <?php } ?>
                  <?php } ?>
                  </a>
              </div>
              <div class="bg-white pinside40 outline">
                  <h3><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h3>
                  <p class="meta"><span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="meta-author"><?php esc_html_e('by ','otvcp-i10n'); ?> <?php the_author_posts_link(); ?></span></p>
              </div>
          </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <?php }else{ ?>
    <div class="row">
      <?php 
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
              'order' => $order1,
              'orderby' => $orderby1
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>
      <?php $format = get_post_format();?>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
          <div class="post-caption-block post-block mb30">
              <div class="post-caption-img">
                  <a href="<?php the_permalink(); ?>" class="imghover">
                  <?php if($image=='img1'){ ?>
                  <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                  <?php }else{ ?>
                  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image2', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                              <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="img-responsive img-fluid" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive img-fluid' ) );
                          } 
                      } ?>
                  <?php } ?>
                  <?php } ?>
                  </a>
              </div>
              <div class="post-caption-content">
                  <h3><a href="<?php the_permalink(); ?>" class="text-white"><?php the_title(); ?></a></h3>
                  <p class="meta"><span class="meta-date text-white"><?php the_time( get_option( 'date_format' ) ); ?></span></p>
              </div>
          </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <?php } ?>
<?php 
  return ob_get_clean();
}

// Blog Style 2 (update May 2020)
add_shortcode('blog2', 'blog2_func');
function blog2_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    => '',
        'excerpt'   => '',
        'image'     => 'img1',
        'style'     => 'style1',
        'order'     =>  'DESC',
        'orderby'   =>  'date',
        'btntext'   =>  '',
    ), $atts));
    $excerpt1 = (!empty($excerpt)) ? $excerpt : 15;
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    $order1 = (!empty($order) ? $order : 'DESC');
    $orderby1 = (!empty($orderby) ? $orderby : 'date');
    ob_start();
?>
    <div class="row">
      <?php 
          $i=0;
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
              'order' => $order1,
              'orderby' => $orderby1
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); $i++;
      ?>
      <?php $format = get_post_format();?>
      <?php if($i==1){ ?>
      <div class="col-lg-6 col-md-12 col-12">
        <div class="blog-style-2 mb-4">
          <a href="<?php the_permalink(); ?>" class="mb-4 d-block">
            <?php 
              if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail( 'full', array( 'class' => 'img-fluid w-100' ) );
              } 
            ?>
          </a>
          <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
          </a>
          <p><?php echo borrow_excerpt($excerpt1); ?></p>
          <span class="font-14 meta-style">
            <?php borrow_posted_in(); ?> |
            <span class="ml-2"><?php the_time( get_option( 'date_format' ) ); ?></span>
          </span>
        </div>
      </div>
      <?php }else{ ?>
        <?php if($i==2){ ?>
        <div class="col-lg-6 col-md-12 col-12">
        <?php } ?>
            <div class="media blog-style-2 mb-4">
              <div class="media-body">
                <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
                <span class="font-14 meta-style">
                  <?php borrow_posted_in(); ?> |
                  <span class="ml-2"><?php the_time( get_option( 'date_format' ) ); ?></span>
                </span>
              </div>
              <a class="media-img" href="<?php the_permalink(); ?>">
                <?php 
                  if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail( 'full', array( 'class' => 'img-fluid ml-5' ) );
                  } 
                ?>
              </a>
            </div>
        <?php if($i==$num){ ?>
        </div>
        <?php } ?>
      <?php } ?>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
<?php 
  return ob_get_clean();
}

// Lastest New Slider (use)
add_shortcode('blogslide', 'blogslide_func');
function blogslide_func($atts, $content = null){
    extract(shortcode_atts(array(
        'number'    => '',
        'excerpt'   => '',
        'image'     => 'img1',
        'btntext'   =>  '',
    ), $atts));
    $excerpt1 = (!empty($excerpt)) ? $excerpt : 15;
    $btntext1 = (!empty($btntext) ? esc_attr($btntext) : 'Read More');
    ob_start();
?>
    <div class="row">
      <div class="blog-slide" id="blog-slide">
      <?php 
          $args = array(   
              'post_type' => 'post',   
              'posts_per_page' => $number,
          );  
          $wp_query = new WP_Query($args);
          while($wp_query->have_posts()) : $wp_query->the_post(); 
      ?>
      <?php $format = get_post_format();?>
      <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="post-block mb30">
              <div class="post-img">
                  <a href="<?php the_permalink(); ?>" class="imghover">
                  <?php if($image=='img1'){ ?>
                  <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                  <?php }else{ ?>
                  <?php if( function_exists( 'rwmb_meta' ) ) { ?>
                      <?php $images = rwmb_meta( '_cmb_image2', "type=image" ); ?>
                      <?php if($images){ ?>              
                          <?php  foreach ( $images as $image ) {  ?>
                              <img src="<?php echo esc_url( $image['full_url'] ); ?>" class="img-responsive" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                          <?php } ?>                
                      <?php }else{
                          if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                              the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) );
                          } 
                      } ?>
                  <?php } ?>
                  <?php } ?>
                  </a>
              </div>
              <div class="bg-white pinside40 outline">
                  <h2><a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a></h2>
                  <p class="meta"><span class="meta-date"><?php the_time( get_option( 'date_format' ) ); ?></span><span class="meta-author"><?php esc_html_e('by ','otvcp-i10n'); ?> <?php the_author_posts_link(); ?></span></p>
                  <p><?php echo borrow_excerpt($excerpt1); ?></p>
                  <a href="<?php the_permalink(); ?>" class="btn-link"><?php echo esc_attr($btntext1); ?></a> 
              </div>
          </div>
      </div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      </div>
    </div>
<?php 
  return ob_get_clean();
}

// Team (use)
add_shortcode('team', 'team_func');
function team_func($atts, $content = null){
  extract(shortcode_atts(array(
    'number'   =>  '',
  ), $atts));
  ob_start(); ?>
  <div class="row isotope">
    <?php 
        $args = array(   
            'post_type' => 'team',   
            'posts_per_page' => $number,
        );  
        $wp_query = new WP_Query($args);
        while($wp_query->have_posts()) : $wp_query->the_post(); 
        $job = get_post_meta(get_the_ID(),'_cmb_job', true);
    ?>
    <div class="col-md-4 col-sm-4 col-xs-12 gallery-masonry">
      <div class="team-block mb30">
          <div class="team-img mb30"><?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?> </div>
          <div class="team-content text-center">
              <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
              <small class="designation"><?php echo htmlspecialchars_decode($job); ?></small> 
          </div>
      </div>
    </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  </div>
<?php
  return ob_get_clean();
}

// Filter Gallery (use)

add_shortcode('filgl','filgl_func');
function filgl_func($atts, $content = null){
    extract( shortcode_atts( array(      
      'all'     => '',
      'number'  => '',
      'column'  => '',
   ), $atts ) );
    ob_start(); ?>

    <div class="row">     
       <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="portfolioFilter">
            <a href="#" class="current" data-filter="*" title=""> <?php echo esc_attr($all); ?></a>
            <?php 
             $categories = get_terms('category_gallery');   
             foreach( (array)$categories as $categorie){
              $cat_name = $categorie->name;
              $cat_slug = $categorie->slug;
             ?>
             <a href="#" data-filter=".<?php echo esc_attr($cat_slug); ?>"><?php echo esc_attr($cat_name); ?></a>
            <?php } ?>
          </div>
        </div>        
    </div>
    <div class="gallery-masonry-row">
      <div id="effect-6" class="effects clearfix">
        <div class="portfolioContainer">
          <?php 
            $number1 = (!empty($number)) ? $number : 9;
            $args = array(   
                'post_type' => 'ot_gallery',
                'posts_per_page' => $number1,   

            );  
            $wp_query = new WP_Query($args);    
            if($wp_query->have_posts()):        
            while ($wp_query -> have_posts()) : $wp_query -> the_post(); 
            $cates = get_the_terms(get_the_ID(),'category_gallery');
               $cate_name ='';
               $cate_slug = '';
                  foreach((array)$cates as $cate){
                 if(count($cates)>0){
                  $cate_name .= $cate->name.' ' ;
                  $cate_slug .= $cate->slug .' ';     
                 } 
               }
          ?>       
            <div class="<?php if($column == 3){echo 'col-md-4 col-sm-4';}else{echo 'col-md-6 col-sm-6';} ?> <?php echo esc_attr($cate_slug); ?> col-xs-12">
                <div class="gallery-thumbnail mb30">
                    <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="image-link"> <?php the_post_thumbnail( 'full', array( 'class' => 'img-responsive' ) ); ?>
                    </a>
                </div>
            </div>       
            
        <?php endwhile;?> 
        </div>
      </div>
    </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>         
    <script type="text/javascript">
      (function($) {
        "use strict";
          $(document).ready(function() {
              if (Modernizr.touch) {
                  // show the close overlay button
                  $(".close-overlay").removeClass("hidden");
                  // handle the adding of hover class when clicked
                  $(".img").click(function(e) {
                      if (!$(this).hasClass("hover")) {
                          $(this).addClass("hover");
                      }
                  });
                  // handle the closing of the overlay
                  $(".close-overlay").click(function(e) {
                      e.preventDefault();
                      e.stopPropagation();
                      if ($(this).closest(".img").hasClass("hover")) {
                          $(this).closest(".img").removeClass("hover");
                      }
                  });
              } else {
                  // handle the mouseenter functionality
                  $(".img").mouseenter(function() {
                          $(this).addClass("hover");
                      })
                      // handle the mouseleave functionality
                      .mouseleave(function() {
                          $(this).removeClass("hover");
                      });
              }
          });
      })(jQuery);
    </script>
<?php
    return ob_get_clean();
}

// Gallery (use)
add_shortcode('gallerypup', 'gallerypup_func');
function gallerypup_func($atts, $content = null){
  extract(shortcode_atts(array(
    'gallery'   =>  '',
  ), $atts));
  ob_start(); ?>
    <div class="row">
      <?php 
      $img_ids = explode(",",$gallery);
      foreach( $img_ids AS $img_id ){
      $meta = wp_prepare_attachment_for_js($img_id);
      $image_src = wp_get_attachment_image_src($img_id,''); ?>
                  
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="gallery-block text-center mb30">
                <div class="gallery-img mb30">
                    <a href="<?php echo esc_url( $image_src[0] ); ?>" class="image-link"><img src="<?php echo esc_url( $image_src[0] ); ?>" class="img-responsive" alt=""></a>
                </div>
            </div>
        </div>
      <?php } ?>
    </div>
<?php
  return ob_get_clean();
}

// Gallery masonry (use)
add_shortcode('gallerymason', 'gallerymason_func');
function gallerymason_func($atts, $content = null){
  extract(shortcode_atts(array(
    'gallery'   =>  '',
  ), $atts));
  ob_start(); ?>
    <div class="gallery-masonry-row isotope">
      <div id="effect-6" class="effects clearfix">
        <div class="portfolioContainer">

          <?php 
          $img_ids = explode(",",$gallery);
          foreach( $img_ids AS $img_id ){
          $meta = wp_prepare_attachment_for_js($img_id);
          $image_src = wp_get_attachment_image_src($img_id,''); ?>
                  
          <div class="col-md-4 col-sm-4 gallery-masonry col-xs-12">
              <div class="gallery-thumbnail mb30">
                  <a href="<?php echo esc_url( $image_src[0] ); ?>" class="image-link"> <img src="<?php echo esc_url( $image_src[0] ); ?>" class="img-responsive" alt=""></a>
              </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    
<?php
    return ob_get_clean();
}

// Logos Client (use)
add_shortcode('logos', 'logos_func');
function logos_func($atts, $content = null){
  extract(shortcode_atts(array(
    'gallery'   =>  '',
    'columns'   =>  6,   
  ), $atts));
  ob_start(); 
  
  $columns1 = '';
  if ($columns == 3) {
    $columns1 = 'col-md-4';
  }elseif ($columns == 4) {
    $columns1 = 'col-md-3';
  }else{
    $columns1 = 'col-md-2';
  }
?>
  <div class="row">
    <?php 
      $img_ids = explode(",",$gallery);
      foreach( $img_ids AS $img_id ){
        $meta = wp_prepare_attachment_for_js($img_id);
        $caption = $meta['caption'];
        $title = $meta['title']; 
        $alt = $meta['alt'];  
        $description = $meta['description'];  
        $image_src = wp_get_attachment_image_src($img_id,''); 
    ?>
      <?php if(!empty($caption)){ ?> 
        <div class="<?php echo $columns1; ?> col-sm-4 col-xs-6 col-6 mb-3">
          <a target="_blank" href="<?php echo esc_attr($caption); ?>">
            <img src="<?php echo esc_url( $image_src[0] ); ?>" alt="<?php echo esc_attr($alt); ?>" class="img-responsive">
          </a>
        </div>
      <?php }else{ ?>           
        <div class="<?php echo $columns1; ?> col-sm-4 col-xs-6 col-6 mb-3"><img src="<?php echo esc_url( $image_src[0] ); ?>" alt="<?php echo esc_attr($title); ?>" class="img-responsive"></div>
      <?php } ?>
    <?php } ?>
  </div>
<?php
  return ob_get_clean();
}

// Testimonial Slider
add_shortcode('testislide', 'testislide_func');
function testislide_func($atts, $content = null){
    extract(shortcode_atts(array(
      'body'  => '',
    ), $atts));
    $body = (array) vc_param_group_parse_atts( $body );
    ob_start(); 
?>
<div class="row">
   <div class="testimonial-slide" id="testimonial-slide">
      
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="testimonial-block mb30">
          <div class="bg-white pinside30 mb20">
            <p class="testimonial-text"> <?php echo htmlspecialchars_decode($data['desc']); ?></p>
          </div>
          <div class="testimonial-autor-box">
            <div class="testimonial-img pull-left"> <img src="<?php echo esc_url($img); ?>" alt=""> </div>
            <div class="testimonial-autor pull-left">
              <h4 class="testimonial-name"><?php echo htmlspecialchars_decode($data['name']); ?></h4>
              <span class="testimonial-meta text-default"><?php echo htmlspecialchars_decode($data['loan']); ?></span> 
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
  </div>
</div>  
<?php
    return ob_get_clean();
}


// Testimonial (use)
add_shortcode('testimonial','testimonial_func');
function testimonial_func($atts, $content = null){
  extract(shortcode_atts(array(
    'body'  => '',
    'style' => 'style1',
  ), $atts));
  $body = (array) vc_param_group_parse_atts( $body );
  ob_start(); ?>
  <?php if($style == 'style1'){ ?>
    <div class="row isotope">
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>
      <div class="col-md-4 col-sm-4 clearfix col-xs-12 gallery-masonry">
        <div class="testimonial-block mb30">
          <div class="bg-white pinside30 mb20">
            <p class="testimonial-text"> <?php echo htmlspecialchars_decode($data['desc']); ?></p>
          </div>
          <div class="testimonial-autor-box">
            <div class="testimonial-img pull-left"> <img src="<?php echo esc_url($img); ?>" alt=""> </div>
            <div class="testimonial-autor pull-left">
              <h4 class="testimonial-name"><?php echo htmlspecialchars_decode($data['name']); ?></h4>
              <span class="testimonial-meta text-default"><?php echo htmlspecialchars_decode($data['loan']); ?></span> 
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?> 
    </div>
  <?php }elseif($style=='style2'){ ?>
    <div class="row isotope">
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>

      <div class="col-md-6 col-sm-6 clearfix col-xs-12 gallery-masonry">
          <div class="testimonial-block mb30 text-center">
              <div class="mb20 testimonial-img-1"> <img src="<?php echo esc_url($img); ?>" class="img-circle" alt=""> </div>
              <div class="mb20">
                  <p class="testimonial-text"><?php echo htmlspecialchars_decode($data['desc']); ?></p>
              </div>
              <div class="testimonial-autor-box">
                  <div class="testimonial-autor">
                      <h4 class="testimonial-name-1"><?php echo htmlspecialchars_decode($data['name']); ?></h4>
                      <span class="testimonial-meta"><?php echo htmlspecialchars_decode($data['loan']); ?></span> 
                  </div>
              </div>
          </div>
      </div>
      <?php } ?> 
    </div>
  <?php }else{ ?>
    <div class="row isotope">
      <?php 
      foreach ( $body as $data ) {
        $data['name'] = isset( $data['name'] ) ? $data['name'] : '';
        $data['desc'] = isset( $data['desc'] ) ? $data['desc'] : '';
        $data['title'] = isset( $data['title'] ) ? $data['title'] : '';
        $img = wp_get_attachment_image_src($data['image'],'full');
        $img = $img[0];
        $data['image'] = isset( $data['image'] ) ? $data['image'] : '';
        $data['loan'] = isset( $data['loan'] ) ? $data['loan'] : '';
      ?>

      <div class="col-md-6 col-sm-12 col-xs-12 gallery-masonry">
        <div class="testimonial-block mb30">
          <div class="bg-white outline pinside30 mb20">
              <p class="testimonial-text"> <?php echo esc_attr($data['desc']); ?></p>
          </div>
          <div class="testimonial-autor-box mb30">
              <div class="testimonial-img"> <img src="<?php echo esc_url($img); ?>" alt=""> </div>
              <div class="testimonial-autor">
                  <h4 class="testimonial-title"><?php echo esc_attr($data['name']); ?></h4>
                  <span class="testimonial-meta"><?php echo esc_attr($data['loan']); ?></span> 
              </div>
          </div>
        </div>
      </div>
      <?php } ?> 
    </div>
  <?php } ?>
  <?php
    return ob_get_clean();
}

// Testimonial 2 (use)
add_shortcode('testi2', 'testi2_func');
function testi2_func($atts, $content = null){
  extract(shortcode_atts(array(
    'image'   =>  '',
    'name'    =>  '',
    'loan'    =>  '',
  ), $atts));

  ob_start(); ?>
   <div class="testimonial-block mb30">
      <div class="bg-white pinside30 mb20">
        <p class="testimonial-text"> <?php echo htmlspecialchars_decode($content); ?></p>
      </div>
      <div class="testimonial-autor-box">
        <div class="testimonial-img pull-left">
          <?php if ( $image != '' ) { echo wp_get_attachment_image( $image, 'full', '' ); } ?>
        </div>
        <div class="testimonial-autor pull-left">
          <h4 class="testimonial-name"><?php echo htmlspecialchars_decode($name); ?></h4>
          <span class="testimonial-meta text-default"><?php echo htmlspecialchars_decode($loan); ?></span> 
        </div>
      </div>
    </div>
<?php
  return ob_get_clean();

}

// Testimonial 3 (use)
add_shortcode('testi3', 'testi3_func');
function testi3_func($atts, $content = null){
  extract(shortcode_atts(array(
    'image'   =>  '',
    'name'    =>  '',
    'style'    =>  'style1',
  ), $atts));
  ob_start(); ?>

<?php if($style=='style1'){ ?>
  <div class="customer-block">
    <div class="customer-quote-circle">
        <i class="fa fa-quote-right "></i>
    </div>
    <div class="customer-img">
      <?php if ( $image != '' ) { echo wp_get_attachment_image( $image, 'full', '', array( "class" => "img-circle" ) ); } ?>
    </div>
    <div class="customer-content">
        <p class="customer-text"><?php echo htmlspecialchars_decode($content); ?></p>
        <div class="customer-meta"><span class="customer-name"><?php echo htmlspecialchars_decode($name); ?></span></div>
    </div>
  </div>
<?php }elseif($style=='style2'){ ?>
  <div class="lead-testimonial testimonial-block bg-yellow-light mb30 pinside30">
      <div class="customer-quote-circle">
          <i class="fa fa-quote-left"></i>
      </div>
      <p class="testimonial-text mb10"><?php echo htmlspecialchars_decode($content); ?></p>
      <div class="testimonial-autor-box">
          <div class="testimonial-autor">
              <h6 class="mb0"><?php echo htmlspecialchars_decode($name); ?></h6>
          </div>
      </div>
  </div>
<?php }else{ ?>
  <div class="bg-yellow-light loan-half-section">
      <p class="testimonial-text"><?php echo htmlspecialchars_decode($content); ?></p>
      <span class="text-dark text-bold"><?php echo htmlspecialchars_decode($name); ?></span>
  </div>
<?php } ?>
<?php
  return ob_get_clean();
}

// Map
add_shortcode('maps','maps_func');
function maps_func($atts, $content = null){
    extract(shortcode_atts(array(       
        'imgmap'         => '', 
        'latitude'       => '23.0225',
        'longitude'      => '72.5714',
        'zoommap'        => '8',
    ), $atts));
    ob_start(); ?>
    <div class="map" id="googleMap"></div>
      <script type="text/javascript">
       
        (function($) { "use strict";
        
          //set your google maps parameters

          $(document).ready(function(){
              var myLatLng = {
                  lat: <?php echo esc_attr($latitude); ?>,
                  lng: <?php echo esc_attr($longitude); ?>
              };

              var map = new google.maps.Map(document.getElementById('googleMap'), {
                  zoom: <?php echo esc_attr($zoommap); ?>,
                  center: myLatLng,
                  scrollwheel: false,

              });
              var image = '<?php echo wp_get_attachment_image_url( $imgmap, 'full' ); ?>';
              var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  icon: image,
                  title: 'Hello World!'

              }); 
          });

        })(jQuery); 
      </script>

<?php
  return ob_get_clean();
}
?>