<?php
$result = mysql_query($sql, $conexionLocalhost) or trigger_error("No se pudo ejecutar el query para obtener a los productos");
while ($row = mysql_fetch_assoc ($result)){
	?>
	<div class="col-lg-4 col-md-6 mb-4">
		<div class="card h-100">
			<a href="<?php echo SERVER_SIT_SITE ; ?>producto/?producto=<?php echo $row['idArticulo']; ?>"><img class="card-img-top" src="<?php echo SERVER_SIT_SITE ; ?>imagen/productos/<?php echo $row['imagen'] ; ?>.png" alt="" ></a>
			<div class="card-body">
				<h4 class="card-title">
					<a href="<?php echo SERVER_SIT_SITE ; ?>producto/?producto=<?php echo $row['idArticulo']; ?>"><?php echo $row['nombreArt']; ?></a>
				</h4>
                <h5>$ <?php echo $row['precio']; ?></h5>
                <p class="card-text"><?php echo $row['descripcion']; ?></p>
			</div>
            <div class="row btn-comprar justify-content-end"><button class="btn btn-primary precio" data-accion="ADD"  data-code="<?php echo $row['idArticulo']; ?>" data-precio="<?php echo $row['precio']; ?>" data-cantidad="1" >Comprar</button></div>
            <div class="card-footer">
            	<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
			</div>
		</div>
	</div>
<?php } ?> 
