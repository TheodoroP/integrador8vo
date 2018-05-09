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
    <link href="<?php echo SERVER_SIT_SITE ; ?>css/shpping-car.css" rel="stylesheet">    

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
	          <h1>Su compra</h1>
              <!-- /.row -->
              <div class="shopping-cart">
                <div class="column-labels">
                    <label class="product-image">Image</label>
                    <label class="product-details">Product</label>
                    <label class="product-price">Price</label>
                    <label class="product-quantity">Quantity</label>
                    <label class="product-removal">Remove</label>
                    <label class="product-line-price">Total</label>
                </div>
                
                <?php
				for ($i = 0; $i < count($_SESSION['Compras']); $i++) {
					$sql="SELECT * FROM  articulo where idArticulo='".$_SESSION['Compras'][$i]['code']."'";
					$result = mysql_query($sql, $conexionLocalhost) or trigger_error("No se pudo ejecutar el query para obtener a los productos");
					$row = mysql_fetch_assoc($result);
				?>
                <div class="product">
                    <div class="product-image">
                        <img src="<?php echo SERVER_SIT_SITE ; ?>imagen/productos/<?php echo $row['imagen'] ; ?>.png">
                    </div>
                    <div class="product-details">
                        <div class="product-title"><?php echo $row['nombreArt']; ?></div>
                        	<p class="product-description"> It has a lightweight, breathable mesh upper with forefoot cables for a locked-down fit.</p>
                        </div>
                        <div class="product-price"><?php echo $_SESSION['Compras'][$i]['precio'] ; ?></div>
                        <div class="product-quantity"><input type="number" value="<?php echo $_SESSION['Compras'][$i]['cantidad'] ; ?>" min="1" data-code='<?php echo $_SESSION['Compras'][$i]['code'] ?>'></div>
                        <div class="product-removal"><button class="remove-product" data-code='<?php echo $_SESSION['Compras'][$i]['code'] ?>'>Remove</button>
                    </div>
                    <div class="product-line-price"><?php echo $_SESSION['Compras'][$i]['total'] ; ?></div>
                </div>
                <?php 
				}				
				?>
          <!--   boton compras   -->
          <?php
      if (isset($_SESSION['idUsuario'])){
    ?>    
      <button  class="checkout" onclick="location='<?php echo SERVER_SIT_SITE ; ?>pagar/pago.php'">Confirmar Compra</button>
      <?php   } ?>

    
               
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