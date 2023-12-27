<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css\css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>
<body class="indext">
	<?php
		session_start();
		if(!isset($_SESSION['usuario']))
		header("../location:logueo.php");
		include "../../includes/admincabecera.php";
	?>

	<?php
	require('../../controlador/conexion.php');
	$conn = conectar();
	$cod = $_REQUEST['codigo'];
	$data = buscarTipo($cod,$conn);
	?>
<h2>Usuario: <?= $_SESSION['usuario'] ?></h2>
	<a href="../../llamadas/procesoCerrarSesion.php">Cerrar sesión</a>
	<div align="center" class="texto-nosotros2">
	<section class="form-register">
<form action="../../llamadas/procesoTipo.php" method="post">
	<h4 style="text-align: center;"><b>MODIFICAR TIPO</b></h4>
			<div class="texto-nosotros2">
		<input type="hidden" name="codigo" value="<?=$cod?>"><br>
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?=$data[0]?>" class="controls"><br>
		<input type="hidden" name="accion" value="modificar">
		<input type="submit" name="Actualizar" value="Aceptar" class="botons">
	</div>
	</form>
</section>
</div>
</body>
</html>