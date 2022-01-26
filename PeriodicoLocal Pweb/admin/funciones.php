<?php

function inicio() {
  if($_SESION['admin']==false) {
    echo('
							<h2>Validar sesión</h2>
					<form name="frmlogin" action="validar.php" method="post">
					<input type="text " name="usuario" placeholder="Usuario" id="caja" required="required" value="">
					<input type="password" name="password" placeholder="password" id="caja" required="required" value="">
					<button type="submit" name="validar" class="icon-lock" id="boton">Iniciar Sesión
						</button>
					</form>
							' );
  } else {
    echo( '
							<h2 >Bienvenid@ a la Administración del periodico local</h2>
							<a href="logout.php">Cerrar Sesión</a>
							' );
  }
}

function administradores() {
  $bd = new BD();
  $bd->conectarse();
  $sql = "select * from administradores order by nombre";
  $resultado = $bd->ejecutarSQL( $sql );
  $nfilas = mysqli_num_rows( $resultado );
  echo( '
							<h2>Administradores</h2>
					<table cellpadding="0" cellspacing="0"id="tabla">
						<tr>
							<td id="filatitulo">Administradores</td>
							<td id="filatitulo">Usuario</td>
							<td id="filatitulo">Estado</td>
							<td id="filatitulo">Eliminar</td>
						</tr>' );
  for ( $c = 0; $c < $nfilas; $c++ ) {
    $fila = mysqli_fetch_array( $resultado );
    echo('
	<tr>
							<td id="fila">' . $fila[ "nombre" ] . '</td>
							<td id="fila">' . $fila[ "usuario" ] . '</td>
							<td id="fila">' . $fila[ "estado" ] . '</td>
							<td id="fila"><button type="button" id="boton" name="eliminar" class="icon-trash"></</button></td>
						</tr>' );
  }
  echo('
  </table>
							<a href="index.php?opcion=11">Nuevo</a>
							');
}
function administrador(){
echo ('
<h2>Registrar Administrador</h2>
					<form name="frmadmin" action="admin_guardar.php" method="post" onSubmit="return validarfrmadmin(frmadmin);"> 
						<input type="text" name="nombre" placeholder="Nombre" id="caja" required="required"/>
						<input type="text" name="usuario" placeholder="Usuario" id="caja" required="required"/>
						<input type="password" name="password" placeholder="Password" id="caja" required="required"/>
						<input type="password" name="confir_password" placeholder="Confirmar Password" id="caja" required="required"/>
						<button type="submit" name="registrar" class="icon-eye" id="boton">Registrar
						</button>
					</form>
					<a href="index.php?opcion=1">Regresar</a> 
');
}
function mensaje($texto){
	echo ('
	<h2>'.$texto.'</h2>
	<script languaje="javascript" type="text/javascript">
	setTimeout("location.href=\'index.php?opcion=1\'",2000);
	</script>
	');
}
?>
  