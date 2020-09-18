<?php get_header(); ?>
<div class="main-cars__grid">
<?php $args = array( 'post_type' => 'vehiculos', 'posts_per_page' => 2); ?>   
        <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

	 <div class="main-conductores__item  ">
				 <a type="" class="" data-toggle="modal" data-target="#modal-41">
             <div class="main-conductores__title">
             <?php the_post_thumbnail('large'); ?>
      </div>
             
            <div class="main-conductores__descripcion">
                    <p class="wow animated fadeInRight">
						      <?php the_title() ?>  </p>
                </div>
					 	 </a>
				
		            
				
     </div>
		 
			<?php endwhile; ?>
 </div>

<!-- Modal 1 -->
        <div class="modal  modal-video fade" id="modal-41" role="dialog"
    aria-labelledby="41Title" aria-hidden="false ">
  <div class="modal-dialog" role="document">
    <div class="modal-content">	
	
      <div class="modal-header">
          <p class="wow animated fadeInRight">
		    New Rexton 2020  
		  </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
		  <p class="wow animated fadeInRight">
			  <ul>
<li>9 Airbags, Alarma, Cámara de retroceso</li>
<li>Activación freno de estacionamiento eléctrico</li>
<li>Neblineros delanteros con luces led</li>
<li>Sistema de anclaje Isofix para sillas de seguridad de niños</li>
<li>Aire acondicionado, Alzavidrios eléctrico</li>
</ul>
		  </p>
	      
      </div>
		 
      <div class="modal-footer">
           <a href="<?php bloginfo('url');?>/index.php/reservaciones" class="btn ">Reservar</a>
      </div>
	
    </div>
	 
  </div>
</div>
 <div class="modal  modal-video fade" id="modal-40" role="dialog"
    aria-labelledby="40Title" aria-hidden="false ">
  <div class="modal-dialog" role="document">
    <div class="modal-content">	
	
      <div class="modal-header">
          <p class="wow animated fadeInRight">
		    New Rexton 2020 4x4  
		  </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
		  <p class="wow animated fadeInRight">
			  <ul>
<li>9 Airbags, Alarma, Cámara de retroceso</li>
<li>Activación freno de estacionamiento eléctrico</li>
<li>Neblineros delanteros con luces led</li>
<li>Sistema de anclaje Isofix para sillas de seguridad de niños</li>
<li>Aire acondicionado, Alzavidrios eléctrico</li>
</ul>
		  </p>
	      
      </div>
		 
      <div class="modal-footer">
           <a href="<?php bloginfo('url');?>/index.php/reservaciones" class="btn ">Reservar</a>
      </div>
	
    </div>
	 
  </div>
</div>
  

<?php get_footer();?>
