<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>
<body class="indext">
	<?php
	session_start();
	include "../includes/cabecera2.php";
	if(!isset($_SESSION['usuario']))
		header("location:logueo.php");
	?>
	<section class="section_all">
	<h2>Usuario: <?= $_SESSION['usuario'] ?></h2>
	<a class="beliminar" href="../llamadas/procesoCerrarSesion.php">Cerrar sesión</a>
	
	<div style="text-align: center;">
	<h1>Gestion de tablas</h1>

	<h2>Entradas</h2>
	<a href="../paginas/entrada/agregar.php" class="texto-admin">Ingresar Entrada</a><br>
	<a href="../paginas/entrada/listar.php" class="texto-admin">Listar Entradas</a><br>

	<h2>Producto</h2>
	<a href="../paginas/producto/agregar.php" class="texto-admin">Ingresar Producto</a><br>
	<a href="../paginas/producto/listar.php" class="texto-admin">Listar Producto</a><br>
	

	<h2>Tipos</h2>
	<a href="../paginas/tipo/agregar.php" class="texto-admin">Ingresar tipo</a><br>
	<a href="../paginas/tipo/listar.php" class="texto-admin">Listar tipo</a><br>
	</div>
	</section>
	<?php
	include "../includes/pie2.php";
	?>
	
</body>
</html>