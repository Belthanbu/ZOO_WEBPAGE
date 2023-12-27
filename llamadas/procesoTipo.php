<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$action = $_REQUEST['accion'];

	if ($action=="agregar") {
	$cod = $_REQUEST['codigo'];
	$nom = $_REQUEST['nombre'];
	agregarTipo($cod,$nom,$conn);
	}
	else if ($action == "eliminar") {
		$cod = $_REQUEST['codigo'];
		eliminarTipo($cod,$conn);
	}
	else if ($action == "modificar") {
		$cod = $_REQUEST['codigo'];
		$nom = $_REQUEST['nombre'];
		actualizarTipo($cod,$nom,$conn);
	}



header("location:../paginas/tipo/listar.php");
?>