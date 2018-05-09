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
							<h1 class="h1">
								Contacto:<small> Comunicate estamos para servirte</small></h1>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="well well-sm">
					<form>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">
										Nombre</label>
									<input type="text" class="form-control" id="name" placeholder="Nombre completo" required="required" />
								</div>
								<div class="form-group">
									<label for="email">
										Email</label>
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
										</span>
										<input type="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
								</div>
								<div class="form-group">
									<label for="subject">
										Asunto</label>
									<select id="subject" name="subject" class="form-control" required="required">
										<option value="na" selected="">Elige uno:</option>
										<option value="service">Información General</option>
										<option value="suggestions">Sugerencia</option>
										<option value="product">Soporte de Productos</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="name">
										Mensaje</label>
									<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
										placeholder="Mensaje"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
									Enviar</button>
							</div>
						</div>
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<form>
					<legend><span class="glyphicon glyphicon-globe"></span> Integrador</legend>
					<address>
						<strong>Integrador</strong><br>
						795 Guaymas norte<br>
						Sonora, Mexico<br>
						<abbr title="Phone">
							P:</abbr>
						(123) 456-7890
					</address>
					<address>
						<strong>Cristian German Lizarraga Portillo</strong><br>
						<a href="mailto:#">christian.lizarraga.portillo@gmail.com</a>
					</address>
					</form>
				</div>
			</div>
			<div id="map"></div>
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