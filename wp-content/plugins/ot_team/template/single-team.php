<?php
get_header(); ?>

<section class="page-title-bar">



    <div class="container">



      <div class="row">



        <div class="col-lg-12">



          <h2><?php the_title(); ?></h2>



          <?php if ($theme_option['breadcrumbs_opt'] != '0') { ?>
            <?php dotted_breadcrumbs(); ?>
          <?php }else{} ?>



        </div>



      </div>



    </div>



  </section>
  <section>

    <?php while (have_posts()) : the_post()?>

      <div class="container">

          <div class="row">

            <div class="col-md-8">
              <div class="page-content">
                <?php the_content(); ?>                
              </div>            

            </div>

            <div class="col-md-4">

            <?php get_sidebar()?>

          </div>

        </div>
        
      </div>
          
    <?php endwhile; ?>

    </section>

<?php get_footer(); ?>