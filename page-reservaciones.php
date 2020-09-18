<?php get_header(); ?>
<div class="main-media_banner">
    <div class="media-banner_item-reservaciones">
        <div class="media-banner_text-reservaciones ">
            <p class="wow animated fadeIn" style="visibility: visible; animation-delay: .3s  ;">

            Llegamos a lugares donde otros no llegan
                    
            </p>
        <div class="contact-form-reservaciones">
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>

                        <div class="form-group">
                            
                            <div class="col-md-12">
                                <input id="fname" name="name" type="text" placeholder="Nombre y apellido" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="col-md-12">
                                <input id="email" name="email" type="text" placeholder="Correo" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            
                            <div class="col-md-12">
                                <input id="phone" name="phone" type="text" placeholder="Teléfono" class="form-control">
                            </div>
                        </div>

                         <div class="form-group_custom">
                         <form class="form__custom">
                        
                        <select class="form-control col-md-12" id="inlineFormCustomSelectPref">
                            <option selected>Escoge tu servicio</option>
                            <option value="1">Turismo/City Tour</option>
                            <option value="2">Servicio Ejecutivo</option>
                            <option value="3">Aeropuerto</option>
                        </select>
                         </div>

                            <div class="form-group">

                            <div class="col-md-12">
                            <input type="date" value="ddd-mm-aaa" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg buttonform">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
<div class="media-banner__img-reservaciones">
 <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/reservaciones.jpeg" alt="">
            </div>
        </div>
    </div>
</div>
</div>

<?php get_footer();?>