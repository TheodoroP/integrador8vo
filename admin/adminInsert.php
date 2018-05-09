
<?php 
  session_start();
  include($_SERVER['DOCUMENT_ROOT']."/integrador6.3/config.php") ; 
  include(SERVER_PHP_SITE."/includes/conexion.php") ; 
?>
<?php


if (isset($_POST["sent"])){
    
    
    //Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
    
    $queryUserAdd = sprintf("INSERT INTO articulo (idArticulo, nombreArt, descripcion, marca, precio, existencia, idCategoria, imagen) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s')",
        mysql_real_escape_string(trim($_POST['idArticulo'])),
        mysql_real_escape_string(trim($_POST['nombreArt'])),
        mysql_real_escape_string(trim($_POST['descripcion'])),
        mysql_real_escape_string(trim($_POST['marca'])),
        mysql_real_escape_string(trim($_POST['precio'])),
        mysql_real_escape_string(trim($_POST['existencia'])),
        mysql_real_escape_string(trim($_POST['idCategoria'])),
        mysql_real_escape_string(trim($_POST['imagen']))
          );
        
    $result = mysql_query($queryUserAdd, $conexionLocalhost) or die("Ocurrio un problema y no se guardo el registro del usuario en la base de datos... :(");
  
     if($result) {
      header("Location: adminInsert.php?actualizacionUsuario=true");
    }

    }
   


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
       <!-- edit profile -->
      <div class="container">
    <h1>Administrador</h1>
    <hr>
  <div class="row">
      <!-- left column -->
      <div class="col-md-3">
       
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
       
           <!--  mensaje exito bootstrap -->
         <?php if(isset($_GET['actualizacionUsuario']))
         { ?>
          <div style="text-align: center;"  class="alert alert-info alert-dismissable">
            <a  href="perfilUpdate.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong >¡Tus datos se han insertado con Exito!</strong>
          </div>

          <?php 
        } 
        ?>
        <h3>Insertar Productos</h3>
        
        <form id="adminIns-form" class="form-horizontal" role="form" action="<?php echo SERVER_SIT_SITE ; ?>admin/adminInsert.php" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">ID:</label>
            <div class="col-lg-8">
              <input class="form-control" name="idArticulo"  type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input class="form-control" name="nombreArt" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Descripción:</label>
            <div class="col-lg-8">
              <input class="form-control" name="descripcion" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Marca:</label>
            <div class="col-lg-8">
              <input class="form-control" name="marca" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Precio:</label>
            <div class="col-md-8">
              <input class="form-control" name="precio" type="text" value="">
            </div>
          </div>
           <div class="form-group">
            <label class="col-md-3 control-label">Existencia:</label>
            <div class="col-md-8">
              <input class="form-control" name="existencia" type="text" value="">
            </div>
          </div>
           <div class="form-group">
            <label class="col-md-3 control-label">Id Categoria:</label>
            <div class="col-md-8">
              <input class="form-control" name="idCategoria" type="text" value="">
            </div>
          </div>
           <div class="form-group">
            <label class="col-md-3 control-label">Imagen:</label>
            <div class="col-md-8">
              <input class="form-control" name="imagen" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Actualizar datos" name="sent" >
              <td><input type="hidden" name="idUsuario" value="<?php echo $userDetails['idUsuario']; ?>"  /></td>
              <span></span>
              <button type="button" class="btn btn-danger"><a href="index.php">Cancelar</a></button>
             <!-- <input type="reset" class="btn btn-danger" value="Cancel"  onclick="myFunction(Location.href='index.php')"> -->
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
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
