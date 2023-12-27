<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
	<title>Entregable</title>
	<script type="text/javascript" src="js/miscript.js"></script>
</head>
<body class="indext">

	<?php
		include "cabecera.php";
	?>

	<div class="texto-nosotros2">
	<form name="tri">
	<fieldset>
		<legend>Datos</legend>
		<label>Ingrese un carácter</label>
		<input type="text" name="car"><br><br>
		<label>Ingrese un número</label>
		<input type="text" name="tamaño"><br><br>
		<input type="button" value="Mostrar" onclick="triangulo()"><br><br>
		<br>
	</fieldset>
	</form>

	<form name="zod">
	<fieldset>
	<legend>Datos</legend>
	<label>Día de nacimiento</label>
	<input type="number" name="dia" max="31" min="1" step="" required="">
	<label>Mes de nacimiento</label>
	<input type="number" name="mes" max="12" min="1" required="">
	<input value="Mostrar" type="button" onclick="zodiaco()">
	<br>
	<br>
	<div class="entregable3">
		<img id="img" src="">
		<p id="inf"></p>
	</div>
	</fieldset>
	</form>

<form name="basedec">
	<fieldset>
		<legend>Datos</legend>
		<label>Ingrese un numero entero(10 u 8)</label>
		<input type="text" name="bas"><br><br>
		<label>Ingrese un número a convertir</label>
		<input type="text" name="conv"><br><br>
		<input type="button" value="Mostrar" onclick="convertirBase()"><br><br>
		<label>Resultado</label>
		<textarea name="resp" rows="6" cols="50"></textarea><br>
	</fieldset>
	</form>
	</div>
	
	<?php
		include "pie.php";
	?>

</body>		
</html>