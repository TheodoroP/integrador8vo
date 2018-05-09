<?php 
  session_start();
  include($_SERVER['DOCUMENT_ROOT']."/integrador6.3/config.php") ; 
  include(SERVER_PHP_SITE."/includes/conexion.php") ; 
?>

<?php 

if (isset($_POST['buscar'])){

  $queryGetUserDetails =sprintf(" SELECT nombreArt, descripcion, marca, precio FROM articulo WHERE nombreArt = '%s' ",

mysql_real_escape_string(trim($_POST['buscador']))

);


$resQueryUserDetails = mysql_query($queryGetUserDetails, $conexionLocalhost);
// Hacemos un fetch para poder manipular los datos obtenidos del usuario
$userDetails = mysql_fetch_assoc($resQueryUserDetails);

  # code...
}


/*
if(isset($_POST['enviar'])) {
echo "hola";
echo "carola";


  // Validamos que no existan errores antes de continuar con el registro en la BD
     
    $queryUserEdit = sprintf("UPDATE usuarios SET password = '%s', nombre = '%s', email = '%s', telefono ='%s'  WHERE idUsuario = '%s' ",
        mysql_real_escape_string(trim($_POST['password'])),
        mysql_real_escape_string(trim($_POST['nombre'])),
        mysql_real_escape_string(trim($_POST['email'])),
        mysql_real_escape_string(trim($_POST['telefono'])),
        mysql_real_escape_string(trim($_POST['idUsuario']))


    );

    $resQueryUserEdit = mysql_query($queryUserEdit, $conexionLocalhost) or die("Ocurrio un problema y no se actualizó el registro del usuario en la base de datos... :(");

    if($resQueryUserEdit) {
      header("Location: Update.php?actualizacionUsuario=true");
    }
  
}*/


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
    <h1>Editar Perfil

    </h1>


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
            <strong >¡Tus datos se han actualizado con Exito!</strong>
          </div>

          <?php 
        } 
        ?>
        <h3>Información Personal</h3>
        <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar Productos">
</form>
         <form id="#delete-form'" class="form-horizontal" role="form" action="<?php echo SERVER_SIT_SITE ; ?>update/update.php" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input class="form-control" name="nombre"  type="text" value="">
            </div>
          </div>
        <form id="de-form" class="form-horizontal" role="form" action="" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Descripcion:</label>
            <div class="col-lg-8">
              <input class="form-control" name="nombre"  type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Marca:</label>
            <div class="col-lg-8">
              <input class="form-control" name="telefono" type="text" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Precio:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="">
            </div>
          </div>
       
  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Borrar Datos" name="sent" href="index.php" >
              <td><input type="hidden" name="idUsuario" value="<?php echo $userDetails['idArticulo']; ?>"  /></td>
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