<?php get_header(); ?>
 <section id="banner">
  <div class="main-banner slick">
  <?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 2); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
         
       
        <div class="main-banner__text">
          <div class="main-banner__title wow animated fadeInRight">
            <p class="">
            
              <?php the_title(); ?>
            </p>
          </div>
          <div class="main-banner text_2">
                    <div class="main-banner_content1 wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
                        
                         
                        <?php the_content(); ?>
							
						<a href="<?php bloginfo('url');?>/index.php/contacto/" class="btn boton_banner">Ver más</a>
                    </div>
                </div>
          <div class="main-banner-img">
            <p class="">
            <?php the_post_thumbnail('large'); ?>
            </p>
          </div>
        </div>
      

       <?php endwhile; ?> 
    </div>
 </section>
 <div class="main-descuento">
      <div class="main-descuento__item">
          <div class="text-descuento">
              <p>
              50% de descuento en nuestros paquetes por todo el mes de agosto
              </p>
          </div>
      </div>
  </div>

  <?php get_footer();?>
 