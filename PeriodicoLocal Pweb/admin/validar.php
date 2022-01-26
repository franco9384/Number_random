<?php
session_start();
include("conexion.php");
$bd =new BD();
$bd->conectarse(); 

$usuario= $_POST['usuario'];
$password= $_POST['password'];

$sql = "select * from administradores where usuario='".$usuario."' and password=AES_ENCRYPT('".$password."','*Lrm25') and estado=1";

$resultado =$bd->ejecutarSQL($sql);
$nfilas =mysqli_num_rows($resultado);
if ($nfilas >0){
	$_SESSION["admin"]=true;
}else{
	$_SESSION["admin"]=false;
}
header("location: index.php");

?>  