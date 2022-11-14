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
<hr>
<center><p class="TxtI"></p></center>


<form  method="POST" action="PAGINA7PH.php">
    <div id="login-box">
        <h1>Ingresa el Usuario del registro que quiere modificar</h1>

        <div class="form">
            <div class="item"> 
               
                <input required type="text" placeholder="Usuario" name="Usuario" />
            </div>

           
        <button type="submit" name="Modificar" >Modificar registro</button>
    </div>
</form>

</body>
</html>