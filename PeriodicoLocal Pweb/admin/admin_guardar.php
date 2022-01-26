<?php 
session_star();
if($_SESSION["admin"]==false){
	header("location: index.php");
}
include ("conexion.php");
$bd =new BD();
$bd->conectarse();

$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$password=$_POST["password"];
$sql="insert administradores (nombre, usuario, password) values ('".$nombre."','".$usuario."', AES_ENCRYPT('".$password."','*Lrm25'))";
$incertado=$bd->ejecutarSQL($sql);
if($incertado){
	header ("location: index.php?opcion=-1&texto=Administrador registrado");
}else{
	header ("location: index.php?opcion=-1&texto=Administrador No registrado");
}

?> 