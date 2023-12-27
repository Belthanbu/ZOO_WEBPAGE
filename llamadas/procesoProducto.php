<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$action = $_REQUEST['accion'];

	if ($action=="agregar") {
	$cod = $_REQUEST['codigo'];
	$nom = $_REQUEST['nombre'];
	$pre = $_REQUEST['precio'];
	$cli = $_REQUEST['cliente'];
	$fot = $_FILES['foto']['name'];
	$ruta = $_FILES['foto']['tmp_name'];
	$destino = "../Imagenes/".$fot;

	copy($ruta, $destino);

	agregarProducto($cod,$nom,$pre,$fot,$cli,$conn);
	}
	else if ($action == "eliminar") {
		$cod = $_REQUEST['codigo'];
		eliminarProducto($cod,$conn);
	}
	else if ($action == "modificar") {
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		$pre = $_REQUEST['precio'];
		$cli = $_REQUEST['cliente'];
		actualizarProducto($cod,$nom,$pre,$cli,$conn);
	}



header("location:../paginas/producto/listar.php");
?>