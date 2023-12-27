<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>El Castillo del Zoo</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/dd59825ae7.js" crossorigin="anonymous"></script>
</head>
</html>
	<?php
		include "includes/cabecera.php";
	?>

<body class="indext">
	<img class="item-atencion" src="imagenes/atencion.jpg">
	<section>
		<h2 class="formato">¡EXPLORA EL ZOO!</h2>
		<div class="container-slider">
			<div class="slider" id="slider">
				<div class="slider__section">
					<a href="paginas/costa.php"><img class="slider__img" src="imagenes/costa.jpg"></a>
				</div>
				<div class="slider__section">
					<a href="paginas/sierra.php"><img class="slider__img" src="imagenes/sierra.jpg"></a>
				</div>
				<div class="slider__section">
					<a href="paginas/selva.php"><img class="slider__img" src="imagenes/selva.jpg"></a>
				</div>	
				<div class="slider__section">
					<a href="paginas/aves.php"><img class="slider__img" src="imagenes/fondoaves1.jpg"></a>
				</div>	 					
			</div>
			<div class="slider__btn slider__btn--right" id="btn--right">&#62;</div>
			<div class="slider__btn slider__btn--left" id="btn--left">&#60;</div>	
		</div>
	</section>	
		<div class="regiones">			
			<a href="paginas/costa.php"><img class="item-regiones" src="Imagenes/costa.jpg" height="450"></a>
			<p class="texto-regiones">COSTA</p>
			<div class="regiones-div">
			<a class="link-regiones" href="paginas/costa.php">Mas información</a>
			</div>	
		</div>	
		<div class="regiones2">
			<p class="texto-regiones2">SIERRA</p>
			<a class="link-regiones2" href="paginas/sierra.php">Mas información</a>			
			<a href="paginas/sierra.php" ><img class="item-regiones2" src="Imagenes/sierra.jpg"  ></a>
		</div>
		<div class="regiones">			
			<a href="paginas/selva.php"><img class="item-regiones" src="Imagenes/selva.jpg" height="450"></a>
			<p class="texto-regiones">SELVA</p>
			<div class="regiones-div">
			<a class="link-regiones" href="paginas/selva.php">Mas información</a>
			</div>	
		</div>
	<section align="center">
		<h2 class="formato">¡VISITA NUESTRO CENTRO DE INTERACCIÓN DE AVES!</h2>
		<a href="paginas/aves.php"><img class="item-aves" src="imagenes/fondoaves2.jpg"></a>
	</section>
	
	<?php
		include "includes/pie.php";
	?>

	<script type="text/javascript" src="js/miscript.js"></script>
</body>
