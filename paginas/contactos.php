<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
	<title>Contactos</title>
	<script type="text/javascript" src="../js/miscript.js"></script>
</head>
<body class="indext">

	<?php
		include "../includes/cabecera2.php";
	?>
    <section class="section_all">
	<main class="texto-nosotros2" >
			<div class="texto-nosotros2">
			<h2 class="titulos">Contactos</h2>
				<p><b>CENTRAL TELEFÓNICA:</b> (01) 644-2000</p>
				<b>EDUCACIÓN Y EXTENSIÓN CULTURAL:</b>
					Solicita información sobre guiados por las diferentes zonas del zoológico, visita de colegios, institutos y universidades, cursos de verano y celebración de cumpleaños.
				<p><b>Teléfono:</b> 6449200 – Opción 2<br></p>
					<b>Correo electrónico: </b>educacion@elcastillodelzoo.gob.pe
				<p><b>VENTAS Y ALQUILERES DE ESPACIOS:</b>
					Consulta sobre nuestros espacios para activaciones de marcas, eventos corporativos, ferias y mucho más.</p>
				<b>Teléfono:</b> 6442000 – Opción 3
				<p><b>Correo electrónico: </b>comercial@elcastillodelzoo.gob.pe</p>
					<form>	
					<section class="form-register">
					<h4 style="text-align: center;"><b>DATOS DEL USUARIO</b></h4>
					<div class="texto-nosotros2">
					<label>Nombre:</label>
					<input class="controls" type="text" id="nombre" placeholder="Nombres y Apellidos"><br>
						
					<label>Email:</label>
				    <input class="controls" type="text" id="email" placeholder="robert@gmail.com"><br>
					<label><b>Asunto:</b></label>
					<input class="controls" type="text" id="asunto" placeholder="Asunto"><br>
					<label><b>Comentario:</b></label>
					<textarea  class="controls" rows="5" cols="20" name="Comentario" placeholder="Escriba aquí su comentario"></textarea>
					<input class="botons" type="button"  onclick="valid()" value="Enviar Consulta"></td>
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