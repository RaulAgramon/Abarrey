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

<center><p class="TxtI"></p></center>
<?php
$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
$Correo = $_POST['Correo'];
?>
<div id="login-boxT">
<h1 class="TxtP5">Te has registrado correctamente</h1>
<h1 class="TxtP5">Usuario: <?php echo $Usuario; ?></h1>
<h1 class="TxtP5">Le hemos mandado tu contraseña a su correo</h1>
<h1 class="TxtP5">Correo: <?php echo $Correo; ?></h1>
<?php


$conexcion= new mysqli('localhost:3306', 'root','', 'bd_cuidadoconelperro');
	$conexcion->set_charset("utf8");

$conexcion->query("INSERT INTO registros (Usuario, Contraseña, Correo) VALUES ('$_REQUEST[Usuario]','$_REQUEST[Contraseña]','$_REQUEST[Correo]')");
$conexcion->close();



?>

</div>

</form>
</body>
</html>