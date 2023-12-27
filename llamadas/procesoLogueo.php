<?php  

	require('../controlador/conexion.php');
	$conn = conectar();

	$usu = $_REQUEST['usuario'];
	$pass = $_REQUEST['pass'];

	$cant = validarUsuario($usu,$pass,$conn);

	if($cant>0){
		session_start();
		$_SESSION['usuario'] = $usu;
		header("location:../paginas/admin.php");
	}
	else{
		echo '<script>alert("Usuario o contraseña incorrecto");	window.history.back();</script>';
	}
?>