<div class="col-lg-3">
  <a class="nav-link logo-h1" href="<?php echo SERVER_SIT_SITE ; ?>">
    <img id="logo-h1" src="<?php echo SERVER_SIT_SITE ; ?>imagen/logo.png">
  </a>
  <div class="list-group">
    <?php 
    $sql="SELECT * FROM  categoria ";
    $result = mysql_query($sql, $conexionLocalhost) or trigger_error("No se pudo ejecutar el query para obtener a los productos");
    while ($row = mysql_fetch_assoc ($result)){
	?>
      <a href="<?php echo SERVER_SIT_SITE ; ?>categoria/?categoria=<?php echo $row['idCategoria'] ?>" class="list-group-item"><?php echo $row['nombreCat'] ; ?></a>
 	<?php 
	}
    ?>
  </div>

</div>