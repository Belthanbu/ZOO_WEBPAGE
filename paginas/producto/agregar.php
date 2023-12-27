<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Producto</title>
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
<div align="center" class="texto-nosotros2">
	<section class="form-register">
<form action="../../llamadas/procesoProducto.php" method="post" enctype="multipart/form-data">
			<h4 style="text-align: center;"><b>AGREGAR PRODUCTO</b></h4>
			<div class="texto-nosotros2">
		<label>Codigo</label>
		<input class="controls" type="text" name="codigo"><br>
		<label>Nombre</label>
		<input class="controls" type="text" name="nombre"><br>
		<label>Precio</label>
		<input class="controls" type="number" name="precio"><br>
		<label>Foto</label>
		<input class="controls" type="file" name="foto"><br>
		<label>Tipo</label>
		
		<select style="text-align:center;" class="controls1" name="cliente">
		<?php
		foreach (listarTipo($conn) as $key => $data) {
		?>
			<option value="<?=$data[0]?>"><?=$data[0]?></option>
			<?php
			}
			?>
		</select><br>

		<input type="hidden" name="accion" value="agregar">
		<input type="submit" class="botons" name="aceptar" value="Aceptar">
	</div>
	</form>

</div>
</section>
<?php
		include "../../includes/adminpie.php";
	?>


</body>
</html>