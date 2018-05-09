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
    
    <!-- Bootstrap core CSS -->
    <link href="<?php echo SERVER_SIT_SITE ; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo SERVER_SIT_SITE ; ?>font/css/open-iconic-bootstrap.css" rel="stylesheet">
    <link href="<?php echo SERVER_SIT_SITE ; ?>css/login.css" rel="stylesheet">
    <link href="<?php echo SERVER_SIT_SITE ; ?>css/contact.css" rel="stylesheet">    

    <!-- Custom styles for this template -->
    <link href="<?php echo SERVER_SIT_SITE ; ?>css/style.css" rel="stylesheet">
	<style>
		#map {
			height: 400px;
			width: 100%;
		}
	</style>
  </head>

  <body>
    <?php include(SERVER_PHP_SITE."/asset/header.php") ; ?>
    <?php include(SERVER_PHP_SITE."/asset/login.php") ; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
       <!-- Page Content -->
        <?php  include(SERVER_PHP_SITE.'/asset/menuLista.php') ?>
        
        <div class="col-lg-9">

		  <div class="row">
              <div class="jumbotron jumbotron-sm">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12">
                                <h1 class="h1">Informacion del Producto:</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                  <?php
				  $sql= "SELECT * FROM articulo WHERE idArticulo= ".$_GET["producto"];
				  $result = mysql_query($sql, $conexionLocalhost) or trigger_error("No se pudo ejecutar el query para obtener a los productos");
				  $productoDetail = mysql_fetch_assoc($result);
				  ?>
                  
                  <div class="card-title" style="color: #007bff;text-decoration: none; background-color: transparent; -webkit-text-decoration-skip: objects; font-size: 1.5rem"><?php echo $productoDetail['nombreArt'] ?> </div>
                  <p class="card-text"><?php echo $productoDetail['descripcion'] ?></p>
                  <p class="card-text"><strong>Marca:</strong>  <?php echo $productoDetail['marca'] ?> </p>
                  <p class="card-text"><strong>Existencia:</strong> <?php echo $productoDetail['existencia'] ?> Articulos</p>
                  <h5>Precio: $<?php echo $productoDetail['precio'] ?> </h5><br>
                  
                  <div class="row btn-comprar justify-content-end"><button class="btn btn-primary precio" data-accion="ADD"  data-code="<?php echo $productoDetail['idArticulo']; ?>" data-precio="<?php echo $productoDetail['precio']; ?>" data-cantidad="1" >Comprar</button></div>
                  
                </div>
                <div class="col-xs-12 col-sm-6">
                  <img src="<?php echo SERVER_SIT_SITE ; ?>imagen/productos/<?php echo $productoDetail['imagen'] ; ?>.png" width="100%" class="avatar1" alt="avatar">
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
	 <script src="<?php echo SERVER_SIT_SITE ; ?>js/map.js"></script>
	 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDce60zJABg0I6o72JvgM5_VS0HuNIOgK0&callback=initMap"></script>
  </body>
</html>