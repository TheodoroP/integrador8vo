<?php 


if (isset($_SESSION['idUsuario'])) {
  $queryGetUserDetails = sprintf("SELECT * FROM usuarios WHERE idUsuario = '%s' ",

mysql_real_escape_string(trim($_SESSION['idUsuario']))

);


$resQueryUserDetails = mysql_query($queryGetUserDetails, $conexionLocalhost);
// Hacemos un fetch para poder manipular los datos obtenidos del usuario
$userDetails = mysql_fetch_assoc($resQueryUserDetails);




$resQueryUserDetails = mysql_query($queryGetUserDetails, $conexionLocalhost);
// Hacemos un fetch para poder manipular los datos obtenidos del usuario
$userDetails = mysql_fetch_assoc($resQueryUserDetails);
} 



 ?>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container"><img src="<?php echo SERVER_SIT_SITE ; ?>imagen/logo-icon.png">&nbsp
    <a class="navbar-brand" href="<?php echo SERVER_SIT_SITE ; ?>">TPC Electronic<?php 
		if (isset($_SESSION['idUsuario'])){
			echo " - <span class='oi oi-person'> </span> ".$_SESSION['idUsuario'];
		}
		
	?> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo SERVER_SIT_SITE ; ?>">Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SERVER_SIT_SITE ; ?>categoria/?categoria=all">Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SERVER_SIT_SITE ; ?>About/nosotros.php">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SERVER_SIT_SITE ; ?>contacto/">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo SERVER_SIT_SITE ; ?>compras/" ><span class="oi oi-cart"></span> Carrito <span id="totalcompras"><?php if ( !isset($_SESSION['TCompras'])){ echo "" ; }else{ echo $_SESSION['TCompras'] ; }?></span></a>
        </li>
		<?php
			if (isset($_SESSION['idUsuario'])){
		?>		
			<li class="nav-item">
				<a class="nav-link" href="#" id="TerminarSession" ><span class="oi oi-account-logout"></span> Salir</a>
			</li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SERVER_SIT_SITE ; ?>update/update.php" id="TerminarSession" ><span class="oi oi-pencil"></span> Perfil</a>
      </li>
     

		<? }else{ ?>
			<li class="nav-item">
			<a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal"><span class="oi oi-account-login"></span> Ingresar</a>
			</li>		
		<? } ?>
     <!--empiexa drop -->
<?php
        if(isset($userDetails['rol'])){
          if ($userDetails['rol']=="Administrador") { ?>
                 <div class="btn-group">
  <button type="button" class="btn btn-info">Administrador</button>
  <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="sr-only">Admin</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="<?php echo SERVER_SIT_SITE ; ?>Admin/adminInsert.php">Agregar Producto</a>
    <a class="dropdown-item" href="<?php echo SERVER_SIT_SITE ; ?>Admin/delete.php"">Eliminar Productos</a>
  </div>

</div>
<?php } ?>
<?php } ?>


       
       <!--termina -->
      </ul>
    </div>
  </div>
</nav>