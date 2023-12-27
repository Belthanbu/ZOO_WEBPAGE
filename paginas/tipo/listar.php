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
	?>
	<h2>Usuario: <?= $_SESSION['usuario'] ?></h2>
	<a class="beliminar" href="../../llamadas/procesoCerrarSesion.php">Cerrar sesión</a>
	
<table border="1" align="center" class="content-table">
	<thead>
	<tr>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Acciones</th>
	</tr>
</thead>
	
		<?php
		foreach (listarTipo($conn) as $key => $value) {
		?>
	<tr>
		<td><?=$value[0]?></td>
		<td><?=$value[1]?></td>
		<td>
			<a href="../../llamadas/procesoTipo.php?accion=eliminar&codigo=<?=$value[0]?>" class="beliminar">Eliminar</a>
			<a href="editar.php?accion=modificar&codigo=<?=$value[0]?>" class="bmodificar">Modificar</a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>