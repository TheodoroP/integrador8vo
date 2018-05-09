<?php 
  session_start();
  include($_SERVER['DOCUMENT_ROOT']."/integrador6.3/config.php") ; 
  include(SERVER_PHP_SITE."/includes/conexion.php") ; 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Integrador" content="">
    <meta name="Christian" content="">

    <title>TPC Electronic</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Bootstrap & CSS -->
     <link href="<?php echo SERVER_SIT_SITE ; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SERVER_SIT_SITE ; ?>font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link href="<?php echo SERVER_SIT_SITE ; ?>css/login.css" rel="stylesheet">
    <link href="<?php echo SERVER_SIT_SITE ; ?>css/shpping-car.css" rel="stylesheet">   
    
    <!-- estilos -->
    <link href="/integrador6.3/css/style.css" rel="stylesheet">
    <link href="/integrador6.3/css/login.css" rel="stylesheet" >
    <!-- apis y fuentes -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
  </head>

  <body>
  <?php include(SERVER_PHP_SITE."/asset/header.php") ; ?>
  <?php include(SERVER_PHP_SITE."/asset/login.php") ; ?>
    <!-- Page Content -->
    <div class="container">

      <div class="row">
         <?php  include(SERVER_PHP_SITE.'/asset/menuLista.php') ?>
 
       <div class="col-lg-9">

          <!-- Page content -->
        <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">La banda</h2>
    <p class="w3-opacity"><i>Integrador</i></p>
    <p class="w3-justify">Nosotros somos el equipo #?, realizamos este proyecto Integrador con la finalidad de pasar
    la materia de Diseño de sistemas interactivos & Aplicaciones Web, el proyecto esta enfocado en diseñar y desarrollar una aplicacion web para una empresa llamada TPC (teodoro, Paula, Christian), la cual realiza ventas de dispositivos moviles, electronica, audio, entre otras categorias de productos. como conclusión nos percatamos de que el diseño que elegimos al principio no fue agradable para el cliente, y decidimos tomar los colores negro, y blanco para transmitir seriedad al clinte asi como confianza por medio del blanco, basandonos en la psicologia del color.</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Christian</p>
        <img src="/integrador6.3/imagen/chris.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%" >
      </div>
      <div class="w3-third">
        <p>Teodoro</p>
        <img src="/integrador6.3/imagen/teo.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Paula</p>
        <img src="/integrador6.3/imagen/pau.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>
         <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACTO</h2>
    <p class="w3-opacity w3-center"><i>Integrador</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Guaymas, Son<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: (622) 1452142<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: Christian.lizarraga@gmail.com<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: tpalomerar@gmail.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>     
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
       
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  <?php include(SERVER_PHP_SITE.'asset/footer.php'); ?>
    <!-- Bootstrap core JavaScript -->
   <script src="<?php echo SERVER_SIT_SITE ; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>js/login.js"></script>
     <script src="<?php echo SERVER_SIT_SITE ; ?>js/compras.js"></script>

  </body>

</html>
