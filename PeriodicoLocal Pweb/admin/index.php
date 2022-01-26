<?php
session_start();
include("conexion.php");
include("funciones.php");
$bd=new BD();
$bd->conectarse();

if (!isset ($_SESSION['admin']) || $_SESSION['admin']==false){
	$_SESSION['admin']=false; 
	$opcion=0;
} 
if(isset($_GET["opcion"])){ 
	$opcion=$_GET["opcion"]; 
}else{
$opcion=0;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Administracion Periodico Local.</title>
    <meta http-equiv="content=-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0"/>
	<link rel="stylesheet" href="estilos.css" type="text/css">
	<link rel="stylesheet" href="../estilos/icon-menu.css" type="text/css">
	<link rel="stylesheet" href="../estilos/fontello.css" type="text/css">
    <link rel="icon" href="Imagenes/noti-logo.jpg"/>
	<script language="javascript" type="text/javascript" src="funciones.js"></script>
</head>
	<body>
		<header>
		<div class="contenedor">
			
				<h1 class="icon-home">Administración Noticiero</h1>
				<input type="checkbox" id="menu_bar"/>
				<label for="menu_bar" class="icon-menu"></label>
				<nav class="menu">
					<a href="index.php?opcion=0">Inicio</a>
					<a href="index.php?opcion=1">Administradores</a> 
					<a href="index.php?opcion=2">Suscriptores</a>
					<a href="index.php?opcion=3">Enlaces</a>
					<a href="index.php?opcion=4">Notas</a>
				</nav>
		</div>
		</header>
		
			<main>
				<section>
					<?php
					if($opcion==-1){
						
						$texto=$_GET["texto"]
							
					}else if($opcion==0){
							inicio();
					
						}else if($opcion==1){
							if($_SESSION['admin']==true){
							administradores();
								
							}else {
								
							inicio();
							}
						
						}else if($opcion==11){
						
							if($_SESSION['admin']==true){
								
							administrador();
								
						}else {
							inicio();	
							}
						}
					?>
					<h2>Registrar Administrador</h2>
					<script language="javascript" type="text/javascript" aetTimeout("location.href='index.php?opcion=-1'," 2000)>
					</script>
				</section>	
			</main> 
		</div> 
	</body>
</html>