<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$action = $_REQUEST['accion'];

	if ($action=="agregar") {
	$cod = $_REQUEST['codigo'];
	$nom = $_REQUEST['nombre'];
	$tipen = $_REQUEST['precio'];
	$can = $_REQUEST['cantidad'];
	$fec = $_REQUEST['fecha'];
	$pre= 0;
	$codc = $_REQUEST['codigoc'];
	$tel = $_REQUEST['tel'];
	$cor = $_REQUEST['correoe'];
	$dni = $_REQUEST['nrodoc'];
	if ($tipen=="Entrada general") {
		$pre = 15*$can;
	} else if ($tipen == "Niños") {
		$pre = 8*$can;
	} else if ($tipen == "Adultos mayores") {
		$pre = 4*$can;
	}	
	agregarEntrada($cod,$pre,$can,$fec,$codc,$conn);
	agregarCliente($codc,$nom,$cor,$tel,$dni,$conn);
	}




	else if ($action == "eliminar") {
		$cod = $_REQUEST['codigo'];
		eliminarEntrada($cod,$conn);
	}
	else if ($action == "modificar") {
		$cod = $_REQUEST['codigo'];
		
		$tipen = $_REQUEST['precio'];
		$can = $_REQUEST['cantidad'];
		$fec = $_REQUEST['fecha'];
		$codc = $_REQUEST['codigoc'];
		$pre= 0;
		if ($tipen=="Entrada general") {
			$pre = 15*$can;
		} else if ($tipen == "Niños") {
			$pre = 8*$can;
		} else if ($tipen == "Adultos mayores") {
			$pre = 4*$can;
		}
		actualizarEntrada($cod,$pre,$can,$fec,$codc,$conn);
	}



header("location:../paginas/entrada/listar.php");
?>