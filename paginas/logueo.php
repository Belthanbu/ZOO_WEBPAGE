<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logueo</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>
<body class="indext">
<?php
	include "../includes/cabecera2.php";
	?>
	<section class="section_all"> 
	<div align="center" class="texto-nosotros2">
<section class="form-register">
<form action="../llamadas/procesoLogueo.php" method="post">
		<h4 style="text-align: center;"><b>INICIAR SESIÓN</b></h4>
		<div class="texto-nosotros2">
		<label>Nombre de Usuario</label>
		<input id="cod" class="controls" type="text" name="usuario"><br>	
		<label>Contraseña</label>
		<input id="nombre" class="controls" type="password" name="pass"><br>
		<input class="botons" type="submit" name="aceptar" value="Aceptar">
	</div>
	</form>
</div>
</section>
</section>
<?php
	include "../includes/pie2.php";
	?>
</body>
</html>