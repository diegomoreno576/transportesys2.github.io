<?php get_header(); ?>
<section>
<div class="main-banner conductores">
  <?php $args = array( 'post_type' => 'conductores', 'posts_per_page' => 1); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
         
       
        <div class="main-banner__text">
          <div class="main-banner__title  wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">
            <p class="">
            
              <?php the_title(); ?>
            </p>
          </div>
          <div class="main-banner-img">
            <p class="">
              <?php the_content(); ?>
            </p>
          </div>
        </div>
      

       <?php endwhile; ?> 
</section>
<?php get_footer();?>
