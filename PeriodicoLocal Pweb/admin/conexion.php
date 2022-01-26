<?php 
class BD {
	var $conexion;
	function conectarse(){
		global $conexion;
		$conexion = mysqli_connect ("localhost", "root", "", "noti_huejutla");
		if(!$conexion){
			die("Error de conexión: " . mysqli_connect_error());
		}
	}
	function ejecutarSQL($sql){
		global $conexion;
		$consulta =mysqli_query($conexion, $sql) or die (mysqli_error());
		return $consulta;
	}
}
?> 