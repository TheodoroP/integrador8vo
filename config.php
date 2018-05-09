<?php
if (!defined("GLOBALES")){
	define("GLOBALES",1);
	define("SERVER_SIT_SITE", "/".reset(explode('/', substr($_SERVER['PHP_SELF'], 1)))."/" );
	define("SERVER_PHP_SITE", $_SERVER['DOCUMENT_ROOT']."/".reset(explode('/', substr($_SERVER['PHP_SELF'], 1)))."/" );
	//$SFolder=explode('/',$_SERVER['PHP_SELF']);
	//$SFolder=$_SERVER['DOCUMENT_ROOT']."/".$SFolder[1] ;
}
if ( !isset($_SESSION['Compras'])){
   $_SESSION['Compras']=array();
   $_SESSION['TCompras']="" ;
   
}
?>