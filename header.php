<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="<?php  echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/assets/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css"/>
    <title><?php wp_title();?></title>
    <?php wp_head();?>
</head>
<body>

  <header id="fixed-top">                                                                                                                                                                                                                                                                                                                              
     <div class="nav-color">
       <div class="nav-color_item">
         <ul class="site-map">
          <li class="item-color">
          <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/telefono.png" alt="">
            <a href="#">(+56) 9 53493523 / (+56) 9 37649460</a>
          
          </li>
         </ul>
       </div>
       <div class="nav-color_item">
         <ul class="site-map">
          <li class="item-color">
          <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/email.png" alt="">
            <a href="#">transportesys.cl@gmail.com</a>
          
          </li>
         </ul>
       </div>
       <div class="nav-color_item">
         <ul class="site-map">
          <li class="item-color">
          <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/Tarjetas.png" alt="">
            <a href="#">Pagar servicio</a>
          
          </li>
         </ul>
       </div>
     </div>
     <div class="main-logo">
      <div class="main-logo__item">
       <a href="<?php bloginfo('url');?>/">
       <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/logo-T.png" alt="">
       </a>
      </div> 
     </div>
  
     <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-main">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <ul class="navbar-nav mr-autos">
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url');?>/">
          
              Inicio
</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Servicios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php bloginfo('url');?>/index.php/turismo">Turismo/City Tour</a>
          <a class="dropdown-item" href="<?php bloginfo('url');?>/index.php/Servicio">Servicio ejecutivo</a>
          <a class="dropdown-item" href="<?php bloginfo('url');?>/index.php/Eventos">Eventos especiales</a>
          <a class="dropdown-item" href="<?php bloginfo('url');?>/index.php/Aeropuertos/">Aeropuertos</a>
        </div>
      </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url');?>/index.php/conductor">
Conductores
</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url');?>/index.php/vehiculo">
Vehículos
</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url');?>/index.php/reservaciones">
Reservaciones
</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-p" data="offcanvas" href="<?php bloginfo('url');?>/index.php/contacto">
Contacto
</a>
            </li>
          </ul>
    </div>
  </div>
</nav>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script type="module" src="<?php  echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<!-- jQuery CDN -->
<script src="//https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>
</header>