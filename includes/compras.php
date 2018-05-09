<?php
session_start();
include($_SERVER['DOCUMENT_ROOT']."/integrador6.3/config.php") ; 
include(SERVER_PHP_SITE."/includes/conexion.php") ; 

if ($_GET["accion"]=="ADD"){
	$code = $_GET["code"];
	$precio = $_GET["precio"];
	$cantidad = $_GET["cantidad"];
	
	//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
	header('Content-Type: application/json');
	
	$found = 0 ;
	$cat = 0 ;
	$tot = 0 ;
	for ($i = 0; $i < count($_SESSION['Compras']); $i++) {
		if ($_SESSION['Compras'][$i]['code']==$code){
			$found = 1 ;
			$_SESSION['Compras'][$i]['cantidad']+=$cantidad ;
			$_SESSION['Compras'][$i]['precio']=$precio ;
			$_SESSION['Compras'][$i]['total']=($_SESSION['Compras'][$i]['cantidad']*$precio) ;
		}
		$cat +=$_SESSION['Compras'][$i]['cantidad'] ;
		$tot +=$_SESSION['Compras'][$i]['total'] ;
	}
  	if ($found==0){
		$_SESSION['Compras'][] = array("code" => $code,"precio" => $precio, "cantidad"=>$cantidad,"total" => ($cantidad*$precio));
		$cat +=$cantidad ;
		$tot +=($cantidad*$precio) ;
	}
	$_SESSION['TCompras']= "($ $tot/$cat)" ;
	$datos = array(
		'estado' => 'ok',
		'carrito' => $_SESSION['TCompras']
	);
	//Devolvemos el array pasado a JSON como objeto
	echo json_encode($datos, JSON_FORCE_OBJECT);
}

if ($_GET["accion"]=="DEL"){
	$code = $_GET["code"];
	
	//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
	header('Content-Type: application/json');

	/* Recalcular */ 
	$found = 0 ;
	$posic = 0 ;
	for ($i = 0; $i < count($_SESSION['Compras']); $i++) {
		if ($_SESSION['Compras'][$i]['code']==$code){
			$found= 1 ;
			$posic= $i ;
		}
	}
	if ($found==1){
		unset($_SESSION['Compras'][$posic]);
		$_SESSION['Compras'] = array_values($_SESSION['Compras']);
	}
	
	/* Recalcular */ 
	$cat = 0 ;
	$tot = 0 ;
	for ($i = 0; $i < count($_SESSION['Compras']); $i++) {
		$cat +=$_SESSION['Compras'][$i]['cantidad'] ;
		$tot +=$_SESSION['Compras'][$i]['total'] ;
	}
	$_SESSION['TCompras']= "($ $tot/$cat)" ;
	$datos = array(
		'estado' => 'ok',
		'carrito' => $_SESSION['TCompras']
	);
	//Devolvemos el array pasado a JSON como objeto
	echo json_encode($datos, JSON_FORCE_OBJECT);
}

if ($_GET["accion"]=="UCAN"){
	$code = $_GET["code"];
	$cantidad = $_GET["cantidad"];
	
	//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
	header('Content-Type: application/json');

	/* Recalcular */ 
	$precio = 0 ;
	$total  = 0 ;
	for ($i = 0; $i < count($_SESSION['Compras']); $i++) {
		if ($_SESSION['Compras'][$i]['code']==$code){
			$_SESSION['Compras'][$i]['cantidad']=$cantidad;
			$_SESSION['Compras'][$i]['total']=($_SESSION['Compras'][$i]['cantidad']*$_SESSION['Compras'][$i]['precio']) ;
			$precio = $_SESSION['Compras'][$i]['precio'] ;
			$total = $_SESSION['Compras'][$i]['total'] ;
		}
	}
	
	
	/* Recalcular */ 
	$cat = 0 ;
	$tot = 0 ;
	for ($i = 0; $i < count($_SESSION['Compras']); $i++) {
		$cat +=$_SESSION['Compras'][$i]['cantidad'] ;
		$tot +=$_SESSION['Compras'][$i]['total'] ;
	}
	$_SESSION['TCompras']= "($ $tot/$cat)" ;
	$datos = array(
		'estado' => 'ok',
		'precio' => $precio,
		'total' => $total, 
		'carrito' => $_SESSION['TCompras']
	);
	//Devolvemos el array pasado a JSON como objeto
	echo json_encode($datos, JSON_FORCE_OBJECT);
}


?>