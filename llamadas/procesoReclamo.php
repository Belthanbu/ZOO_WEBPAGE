<?php
	require('../controlador/conexion.php');
	$conn = conectar();

	$action = $_REQUEST['accion'];

	if ($action=="agregar") {
	$doc = $_REQUEST['docu'];
	$nrodoc = $_REQUEST['nrodoc'];
	$nom = $_REQUEST['nombres'];
	$ape = $_REQUEST['apellidos'];
	$cel = $_REQUEST['celular'];
	$correo = $_REQUEST['correoe'];
	$coment = $_REQUEST['Comentario'];
	$ai = $_REQUEST['Comentario'];
	
	echo '<script>alert("Reclamo Enviado");	window.history.back();</script>';

	agregarReclamo($ai,$doc,$nrodoc,$nom,$ape,$cel,$correo,$coment,$conn);
	}
	



header("location:../paginas/reclamos.php");
?>