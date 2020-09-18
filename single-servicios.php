<?php get_header(); ?>
<div class="main-servicios">
<?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
            <div class="main-servicios__grid">

                <div class="main-servicios__item">
                    <div class="main-servicios__img">
                    <?php the_post_thumbnail('large'); ?>
                    </div>
                </div>
                <div class="main-servicios__item">
                    <div class="main-servicios__textos">
                        <div class="main-servicios__titlle">
                            <p>
                            <?php the_title() ?>                            </p>

                        </div>
                        <div class="main-servicios__descripcion">
                            <p>
                               <p><?php the_content(); ?></p>
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="main-servicios__textos">
               
                <div class="main-servicios__descripcion">
                    <div class="servicios__grid">
                        <ul class="site-map-servicios_item">
                            <li class="site-servios">
                                <p>
                                                                   </p>
                            </li>
                        </ul>
                        <ul class="site-map-servicios_item">
                            <li class="site-servios">
                                <p>
                                                                    </p>
                            </li>
                           
                        </ul>
                        <ul class="site-map-servicios_item">
                            <li class="site-servios">
                                <p>
                                                                      </p>
                            </li>
                            
                        </ul>

                    </div>
                    <div class="reservar-ahora">
                        <a href="<?php bloginfo('url');?>/index.php/reservaciones" class="btn ">Reservar ahora</a>
                    </div>

                </div>
            </div>
            <?php
            }
    } ?>
        </div>
        <div class="main-galeria">
            <div class="main-galeria__grid">
                <div class="main-galeria__item">
                    <div class="main-galeria__img">
                      <a href='<?php bloginfo('url');?>/index.php/servicios/turismo-city-tour/'>
						<div class="main-gallery__mask">
						
                       <h2>Turismo / City Tour</h2>
                    </div>
						</a>
                        <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/Turismo-city-tour.png" alt="">
                    </div>
						
                </div>
               <div class="main-galeria__item">
                    <div class="main-galeria__img">
						<a href='<?php bloginfo('url');?>/index.php/servicio-ejecutivo/'>
                     <div class="main-gallery__mask">
                         <h2>Servicio ejecutivo</h2>
                    </div>
							</a>
                            <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/Servicio---ejecutivo.png" alt="">
                    </div>
						
                </div>
                <div class="main-galeria__item">
                    <div class="main-galeria__img">
						<a href='<?php bloginfo('url');?>/index.php/eventos-especiales/'>
                     <div class="main-gallery__mask">
                        <h2>Eventos especiales</h2>
                    </div>
								</a>
                                <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/servicios-Eventos-especiales.png" alt="">
                    </div>
						
                </div>
             <div class="main-galeria__item">
                    <div class="main-galeria__img">
							<a href='<?php bloginfo('url');?>/index.php/aeropuerto/'>
                     <div class="main-gallery__mask">
                      <h2>Aeropuerto</h2>
                    </div>
								</a>
                                <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/servicios-aeropuerto.png" alt="">
                    </div>
						
                </div>
            </div>
        </div>

 
     
    <?php get_footer();?>
