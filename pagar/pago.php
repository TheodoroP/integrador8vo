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
    <link href="/integrador6.3/pagar/tarjeta.css" rel="stylesheet">
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
       <!-- edit profile -->
      <div class="container">
    <h1>Metodo de Pago

    </h1>


    <hr>
  <div class="row">

      <!-- left column -->
      
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">

       
           <!--  mensaje exito bootstrap -->
         <?php if(isset($_GET['actualizacionUsuario']))
         { ?>
          <div style="text-align: center;"  class="alert alert-info alert-dismissable">
            <a  href="perfilUpdate.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >¡Tus datos se han actualizado con Exito!</strong>
          </div>

          <?php } ?>
        <div class="arriba">
          
        </div>
        <form action="#" class="credit-card-div">
<div class="panel panel-default" >
 <div class="panel-heading">
     
      <div class="row ">
              <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Inserta Tu numero de Tarjeta" />
              </div>
          </div>
     <div class="row ">
              <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" > Expiracion Mes</span>
                  <input type="text" class="form-control" placeholder="MM" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >  Expiracion año</span>
                  <input type="text" class="form-control" placeholder="YY" />
              </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block text-muted small-font" >  CCV</span>
                  <input type="text" class="form-control" placeholder="CCV" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
<img src="assets/img/1.png" class="img-rounded" />
         </div>
          </div>
     <div class="row ">
              <div class="col-md-12 pad-adjust">

                  <input type="text" class="form-control" placeholder="Nombre del Titular" />
              </div>
          </div>
     <div class="row">
<div class="col-md-12 pad-adjust">
    <div class="checkbox">
    <label>
      <input type="checkbox" checked class="text-muted"> Guarde los detalles para pagos rápidos <a href="#"> ¿cómo? </a>
    </label>
  </div>
</div>
     </div>
       <div class="row ">
            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                 <input  type="submit"  class="btn btn-danger" value="Cancelar" />
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                  <input type="submit"  class="btn btn-warning btn-block" value="Pagar Ahora" />
              </div>
          </div>
     
                   </div>
              </div>
</form>
        <div class="abajo">
          

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