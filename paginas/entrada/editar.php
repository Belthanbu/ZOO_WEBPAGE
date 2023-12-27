<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Entrada</title>
	<link rel="stylesheet" type="text/css" href="../../css\css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>
<body class="indext">
<?php
		include "../../includes/admincabecera.php";
	?>
	<?php
	session_start();
	if(!isset($_SESSION['usuario']))
		header("../location:logueo.php");
	require('../../controlador/conexion.php');
	$conn = conectar();
	$cod = $_REQUEST['codigo'];
	$data = buscarEntrada($cod,$conn);
	?>

	<h2>Usuario: <?= $_SESSION['usuario'] ?></h2>
	<a class="beliminar" href="../../llamadas/procesoCerrarSesion.php">Cerrar sesión</a>	 

<div align="center" class="texto-nosotros2">
<section class="form-register">

<form action="../../llamadas/procesoEntrada.php" method="post" enctype="multipart/form-data">
			<h4 style="text-align: center;"><b>MODIFICAR ENTRADA</b></h4>
			<div class="texto-nosotros2">
		<input type="hidden" name="codigo" value="<?=$cod?>"><br>
		<label>Codigo del cliente</label>
		<select style="text-align:center;" class="controls1" name="codigoc">
		<?php
		foreach (listarCliente($conn) as $key => $value) {
		?>
			<option value="<?=$value[0]?>"><?=$value[0]?></option>
			<?php
			}
			?>
		</select><br>
		<label>Tipo de entrada</label>
		<select style="text-align: center;" class="controls1" name="precio">
			<option>Entrada general</option>
			<option>Niños</option>
			<option>Adultos mayores</option>
			<option>Pers. discapacidad</option>
		</select>
		<br>
		<label>Cantidad</label>
		<input class="controls" type="number" value="<?=$data[1]?>" name="cantidad"><br>
		<label>Fecha</label>
		<select style="text-align: center;" class="controls1" name="fecha">
			<?php
			for ($i=0; $i < 172800; $i+=84600) { 
				
			?>
			<option value="<?php date_default_timezone_set("America/Lima"); echo date("d-m-Y",time()+$i)?>"><?php date_default_timezone_set("America/Lima"); echo date("d M",time()+$i)?></option>

			<?php
		}
		?>
		</select><br>
		<input type="hidden" name="accion" value="modificar">
		<input class="botons" type="submit" name="aceptar" value="Aceptar">
	</div>
	</form>
</div>
</section>

<?php
		include "../../includes/adminpie.php";
	?>

</body>
</html>