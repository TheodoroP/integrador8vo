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
    <?php include(SERVER_PHP_SITE."/asset/header.php") ; ?>
    <?php include(SERVER_PHP_SITE."/asset/login.php") ; ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
       <!-- Page Content -->
        <?php  include(SERVER_PHP_SITE.'/asset/menuLista.php') ?>
        
        <div class="col-lg-9">

          <div class="row">
           <?php 
            if ($_GET['categoria']== 'all') {
                $sql="SELECT * FROM  articulo order by idArticulo desc";
            } else if(!empty($_GET['categoria'])){
                $sql="SELECT * FROM  articulo where idCategoria='".$_GET['categoria']."' order by idArticulo desc";
            }
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
	<?php include(SERVER_PHP_SITE.'asset/footer.php'); ?>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo SERVER_SIT_SITE ; ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>js/login.js"></script>
    <script src="<?php echo SERVER_SIT_SITE ; ?>js/compras.js"></script>
  </body>
</html>
