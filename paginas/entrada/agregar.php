<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar Entrada</title>
	<script type="text/javascript" src="../../js/miscript.js"></script>
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
	<h2>Usuario: <?= $_SESSION['usuario'] ?></h2>
	<a class="beliminar" href="../../llamadas/procesoCerrarSesion.php">Cerrar sesión</a>
	<div align="center" class="texto-nosotros2">
<section class="form-register">
<form action="../../llamadas/procesoEntrada.php" method="post">
			<h4 style="text-align: center;"><b>AGREGAR ENTRADA Y CLIENTE</b></h4>
			<div class="texto-nosotros2">
		<label>Codigo de Entrada</label>
		<input id="cod" class="controls" type="text" name="codigo" placeholder="ECZ_000"><br>	
		<label>Datos del cliente</label>
		<input id="nombre" class="controls" type="text" name="nombre" placeholder="Nombres y Apellidos"><br>
		<input class="controls" type="number" name="tel" placeholder="Nro de celular"><br>
		<input class="controls" type="email" name="correoe" placeholder="Correo electrónico"><br>
		<input class="controls" type="number" name="nrodoc" placeholder="Nro de DNI"><br>
		<label>Tipo de entrada</label>
		<select style="text-align: center;" class="controls1" name="precio">
			<option>Entrada general</option>
			<option>Niños</option>
			<option>Adultos mayores</option>
			<option>Pers. discapacidad</option>
		</select>
		<br>
		<label>Cantidad</label>
		<input class="controls" type="number" name="cantidad" placeholder="Cantidad de Entradas"><br>
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
		<label>Codigo de Cliente</label>
		<input id="codc" class="controls" type="text" name="codigoc" placeholder="C0000"><br>
		<input type="hidden" name="accion" value="agregar">
		<input class="botons" type="submit" name="aceptar" onclick="valid3()" value="Aceptar">
	</div>
	</form>
</div>
</section>
<?php
		include "../../includes/adminpie.php";
	?>
</body>
</html>