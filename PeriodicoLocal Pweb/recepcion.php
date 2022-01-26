<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content=-Type" content="text/html; charset=utf-8"/>
<title>recepcion de datos</title>
</head>
<body>
	<?php 
	   if(isset($_GET['correo'])==true){
		$n1=$_GET['correo'];
	}else{
		$n1=0;
	}
	   if(isset($_GET['password'])==true){
		$n2=$_GET['password'];
	}else{
		$n2=0;
	}
	echo('<p align="center">'.$n1., .$n2. )
	
 
    ?>
</body>
</html>
