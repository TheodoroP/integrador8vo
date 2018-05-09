<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/integrador6.3/config.php") ; 
include(SERVER_PHP_SITE."/includes/conexion.php") ; 

if ($_GET["accion"]=="LOGIN"){
	$user = $_GET["user"];
	$password = $_GET["password"];
    
	
	//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
	header('Content-Type: application/json');
	$sql= "SELECT * FROM usuarios where idUsuario='$user'" ;
	$result = mysql_query($sql, $conexionLocalhost);
	$estado="" ;
	if (mysql_num_rows($result)>0){
		$row =mysql_fetch_assoc($result) ;
		
		if ($row['password']==$password){
			$estado="ok" ;
			/* Crear Variables de Sesion */
			$_SESSION["rol"]= $row['rol'];
			$_SESSION["id"]= $row['id'];
			$_SESSION["idUsuario"]= $row['idUsuario'] ;
			$_SESSION["password"]= $row['password'] ;
			
	       
   
			//`idUsuario`='programa98',`password`='gmo',`nombre`='Guillermo Castellanos Garcia',`email`='programa98@hotmail.com',`telefono`=855353,`rol`='Administrador';
		}
	}
	
	$datos = array(
		'estado' => $estado
	);
	//Devolvemos el array pasado a JSON como objeto
	echo json_encode($datos, JSON_FORCE_OBJECT);
}
if ($_GET["accion"]=="LOGOUT"){
	
	unset($_SESSION["idUsuario"]);
	unset($_SESSION["password"]);
	$estado="ok" ;

	header('Content-Type: application/json');
	
	$datos = array(
		'estado' => $estado
	);

	//Devolvemos el array pasado a JSON como objeto
	echo json_encode($datos, JSON_FORCE_OBJECT);

}

if ($_GET["accion"]=="REGISTER"){
	$user = $_GET["user"];
	$email = $_GET["email"];
	$password = $_GET["password"];
	$nombre = $_GET["nombre"];
	$telefono = $_GET["telefono"];
	
	//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
	header('Content-Type: application/json');
	$sql= "INSERT INTO usuarios (idUsuario, password, nombre, email, telefono) VALUES ('$user','$password','$nombre','$email','$telefono')" ;
	$result = mysql_query($sql, $conexionLocalhost);
	$estado="ok" ;
	
	
	$datos = array(
		'estado' => $estado
	);
	//Devolvemos el array pasado a JSON como objeto
	echo json_encode($datos, JSON_FORCE_OBJECT);
}
if ($_GET["accion"]=="UPDAT"){
	$nombre = $_GET["nombre"];
	$email = $_GET["email"];
	$password = $_GET["password"];
	$user = $_GET["idUsuario"];
	$telefono = $_GET["telefono"];
	
	//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
	header('Content-Type: application/json');
	$sql= "UPDATE usuarios SET nombre = $nombre, email = $email, password = $password, telefono= $telefono where idUsuario = $user";
	$result = mysql_query($sql, $conexionLocalhost);
	$estado="ok" ;
	
	
	$datos = array(
		'estado' => $estado
	);
	//Devolvemos el array pasado a JSON como objeto
	echo json_encode($datos, JSON_FORCE_OBJECT);
}


?>