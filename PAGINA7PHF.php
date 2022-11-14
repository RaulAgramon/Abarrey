<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Abarrey</title>
	<link rel="stylesheet" href="css/css.css">
</head>
<body background="img/PCCEP.png">
	<header class="header">
		<div class="container">
		<div class="btn-menu">
			<label for="btn-menu">☰</label>
		</div>
			<div class="logo">
				<h1><img class="Log" src="img/logo1.png" width="190px" height="80px"></h1>
			</div>
			
			
		</div>
	</header>
	<div class="capa"></div>
<!--	--------------->
<input type="checkbox" id="btn-menu">
<div class="container-menu">
	<div class="cont-menu">
		<nav>
		<a href="Index.html">Inicio</a>
			<a href="PAGINA1.html">Ropa Hombre</a>
			
			<a href="PAGINA5.php">Regristrarse</a>
			<a href="PAGINA6.php">Cancelar registro</a>
            <a href="PAGINA7.php">Consultar registro</a>
	
		</nav>
		<label for="btn-menu">✖️</label>
	</div>
</div>

<br>
<?php

//CONEXION A LA BD (localhost:puerto, 'usuario', 'password','base de datos)
$conexion = new mysqli('localhost:3306', 'root', '', 'bd_cuidadoconelperro');
$conexion->set_charset("utf8");
//LEE LOS NOMBRES DEL FORMULARIO DE cambios2.php
$Usuario=$_REQUEST['Usuario'];
$Contraseña=$_REQUEST['Contraseña'];
$Correo= $_REQUEST['Correo'];
//ACTUALIZA LA INFORMACIÓN EN LA TABLA ALUMNOS
$conexion->query("UPDATE registros SET Usuario='$Usuario', Contraseña='$Contraseña', Correo='$Correo' WHERE Usuario='$Usuario'");
$conexion->close();
?>
<div id="login-boxT">

<h1 class="TxtP5"> <?php echo "Los datos han sido actualizados";?></h1>

</div>


</body>
</html>