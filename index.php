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

    <!-- Custom styles for this template -->
    <link href="<?php echo SERVER_SIT_SITE ; ?>css/style.css" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation -->
    <?php include(SERVER_PHP_SITE."/asset/header.php") ; ?>
    <?php include(SERVER_PHP_SITE."/asset/login.php") ; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
	    <!-- Menu Categorias -->
        <?php include(SERVER_PHP_SITE."/asset/menuLista.php") ; ?>
        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="<?php echo SERVER_SIT_SITE ; ?>imagen/slide/slide1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo SERVER_SIT_SITE ; ?>imagen/slide/slide2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="<?php echo SERVER_SIT_SITE ; ?>imagen/slide/slide3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">
				<?php 
                $sql="SELECT * FROM  articulo order by idArticulo desc limit 1,6";
                include(SERVER_PHP_SITE."/includes/listproductos.php") ; 
                ?>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <?php include(SERVER_PHP_SITE.'asset/footer.php'); ?>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo SERVER_SIT_SITE ; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>js/login.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>js/compras.js"></script>
  </body>
</html>
