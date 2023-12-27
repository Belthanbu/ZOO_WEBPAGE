<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<title>Productos</title>
	<script src="https://kit.fontawesome.com/dd59825ae7.js" crossorigin="anonymous"></script>
</head>
<body class="indext">
	<?php
		session_start();
		include "../includes/cabecera2.php";
	?>

	<?php
	require('../controlador/conexion.php');
	$conn = conectar();
	?>
	<section class="section_all">
	<div class="container-productos">
	<h1 align="center" style="color: #000000;">Nuestros Productos</h1>
	
	<div class="carrito">
	<h1>Ordenar Por:</h1>
	<form action="" method="post" class="carrito-item">

		<select name="codigof" onchange="this.form.submit()" class="controls1" style="width: 40%; text-align: center;">
		<option value="mas">Seleccionar</option>
		<option value="az">Alfabéticamente, A-Z</option>
		<option value="za">Alfabéticamente, Z-A</option>
		<option value="menor">Precio, menor a mayor</option>
		<option value="mayor">Precio, mayor a menor</option>
		</select>
	</form>
	<h1>Tipo:</h1>
	<form action="" method="post" class="carrito-item">
		<select name="codigof" onchange="this.form.submit()" class="controls1" style="width: 40%; text-align: center">
		<option value="mas">Seleccionar</option>
		<option value="mas">Mostrar todos</option>
		<?php
		foreach (listarTipo($conn) as $Key => $value){
			?>
			<option value="<?=$value[0]?>"><?=$value[1]?></option>
			<?php
		}
		?>
		
		</select>
	</form>
	<div class="boton">
		<a href="carrito.php"><i class="icon fa-solid fa-cart-plus" style="color: #000000;"></i></a>
	</div>
	</div>
	</div>
	<?php
	$vector = listarProducto($conn);
		if(isset($_REQUEST['codigof'])){
			$codf= $_REQUEST['codigof'];
			if ($codf==='mas') {
				$vector = listarProducto($conn);
			} else if ($codf === 'menor') {
				$vector = listarProductoFiltro($conn,$codf);
			} else if ($codf === 'mayor') {
				$vector = listarProductoFiltro($conn,$codf);
			} else if ($codf === 'az') {
				$vector = listarProductoFiltro($conn,$codf);
			} else if ($codf === 'za') {
				$vector = listarProductoFiltro($conn,$codf);
			} else {
				$vector = listarProductoFiltro($conn,$codf);
			}
		}

	?>
	<div class="productos">

	<?php
		foreach ($vector as $key => $value) {
	?>
		<div class="container-productos">
		<div class="form-productos2">
		<div class="item-producto">

			<img src="../imagenes/<?=$value[3]?>" width="300" height="350"><br>
			<div class="informacion">
			<p style="color:#4CAF50 ">Nombre: <?=$value[1]?> </p>
			<p>Precio: <?=$value[2]?> </p>
			</div>
			<form action="productos.php" method="post">
				<input type="hidden" name="codigo" value="<?=$value[0]?>">
				<input type="hidden" name="nombre" value="<?=$value[1]?>">
				<input type="hidden" name="precio" value="<?=$value[2]?>">
				<input type="hidden" name="foto" value="<?=$value[3]?>">
				<input style="text-align: left;" type="text" class="controls" placeholder="Cantidad" name="cantidad">
				<input style="text-align: left;" class="botons" type="submit" name="agregar" value="Agregar al Carrito">
			</form>
		</div>
		</div>
		</div>
	<?php
		}
	?>
	</div>
	<?php
		if(isset($_REQUEST['agregar'])){
			$cod = $_REQUEST['codigo'];
			$nom = $_REQUEST['nombre'];
			$pre = $_REQUEST['precio'];
			$fot = $_REQUEST['foto'];
			$can = $_REQUEST['cantidad'];

			$_SESSION['carrito'][$cod]['nombre']=$nom;
			$_SESSION['carrito'][$cod]['precio']=$pre;
			$_SESSION['carrito'][$cod]['foto']=$fot;

			if(isset($_SESSION['carrito'][$cod])){
				$_SESSION['carrito'][$cod]['cantidad'] += $can;
			}
			else{
				$_SESSION['carrito'][$cod]['cantidad'] = $can;
			}			
		}
		
	?>
	</section>
	<?php 
		include "../includes/pie2.php";
	 ?>
</body>
</html>