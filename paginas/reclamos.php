<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Reclamos</title>
	<script type="text/javascript" src="../js/miscript.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
	
</head>
<body class="indext">

	<?php
		include "../includes/cabecera2.php";
	?>
	<section class="section_all">
	<main class="texto-nosotros2">
	<form action="../llamadas/procesoReclamo.php" method="post" name="reclam">

			<div class="texto-nosotros2">
			<h2 class="titulos">Libro de reclamaciones</h2>
			<img src="../Imagenes/libro.png" class="libro-reclamo">
					<p>Estimado ciudadano, ponemos a su disposición el Libro de Reclamaciones, con la finalidad de atender sus reclamos o sugerencias con respecto a su experiencia visitando El Castillo del Zoo.</p>
					<p>La atención de los reclamos o sugerencias, se efectuará dentro de los siguientes siete (07) días hábiles a su presentación, por favor deje su reclamo en el siguiente formulario.</p>
				<p><b>IDENTIFICACIÓN: </b></p>
					<section class="form-register">
					<h4 style="text-align: center;"><b>DATOS DEL CLIENTE</b></h4>
					<div class="reclamos">
							<b>Tipo de documento:</b><br><br>
							<select style="text-align:center" class="controls1" name="docu" id="docu" class="controls2">
							<option value="dni">DNI</option>
							<option value="pasaporte">Pasaporte</option>
							<option value="ruc">RUC</option>
						</select><br>
					<input class="controls" type="text" name="nrodoc" placeholder="Nro documento"><br>
					<input class="controls" type="text" name="nombres" placeholder="Nombres"><br>
					<input class="controls" type="text" name="apellidos" placeholder="Apellidos"><br>
					<input class="controls" type="text" name="celular" placeholder="Nro de celular"><br>
					<input class="controls" type="email" name="correoe" placeholder="Correo electrónico"><br>
					<textarea  class="controls" rows="7" cols="20" name="Comentario" placeholder="Detalles del Reclamo"></textarea><br>
					
					<input type="hidden" name="accion" value="agregar">
					<input type="button" onclick="validar()" value="Enviar Reclamo" class="botons">

					</div>
			</div>

	</form>
	</main>
	</section>
	</section>
	<?php
		include "../includes/pie2.php";
	?>

</body>
</html>