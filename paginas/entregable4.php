<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/miscript.js"></script>
</head>
<body class="indext">

	<?php
		include "cabecera.php";
	?>

	
	<?php
	$mcm=0;
	if (isset($_POST['calcular'])) {
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];
		$n3 = $_POST['n3'];
		$max = $n1;
		if($n2>$max)
			$max=$n2;
		if($n3>$max)
			$max=$n3;
		$mcm=$max;
		while (($mcm%$n1!=0)||($mcm%$n2!=0)||($mcm%$n3!=0)) {
			$mcm++;
		}
	}
	?>
	<div class="texto-nosotros2">
		<form name="ejerc1"method="post" action="proceso1.php" target="proc1">
			<fieldset>
			<legend>Ejercicio 1</legend>
			<label>Monto de la compra:</label>
			<input type="text" name="monto"><br>
			<label>Tarjeta:</label>
			<select name="tarjeta">
				<option value="visa">Visa</option>
				<option value="master">MasterCard</option>
				<option value="america">America Express</option>
			</select><br>
			<label>Cantidad de meses a fraccionar: </label>
			<select name="meses">
			<?php
				for ($i=1; $i <=15 ; $i++) { 
					echo "<option>$i</option>";
				}
			?>
			</select><br><br>
			<label>Cuota:</label><br>
			<iframe src="" name="proc1" width="400px" height="300px"></iframe><br>
			<input type="submit" name="calcu" value="Calcular Cuota">
		</fieldset>
		</form>
	</div>

	<div class="texto-nosotros2">
<form action="proceso2.php" method="get" target="entregable2">
	<fieldset>
		<legend>Ejercicio 2</legend>
		<label>Ingrese el valor de N</label><br>
		<input type="text" name="valorn"><br>
		<input type="submit" name="calcular" value="Calcular"><br><br>
		<label>Resultado</label><br>
		<iframe width="350" height="250" src="" name="entregable2"></iframe>
		<br>
	</fieldset>
</form>


<form name="mcm" action="entregable4.php" method="post">
	<fieldset>
		<legend>Ejercicio 3</legend>
		<label>Ingrese 3 números enteros</label><br>
		<input type="text" name="n1">
		<input type="text" name="n2">
		<input type="text" name="n3"><br>
		<label>Resultado</label><br>
		<input type="text" name="res" value="<?=$mcm?>"></input><br><br>
		<input type="submit" name="calcular" value="Calcular"><br><br>
		<br>
	</fieldset>
	</form>


<form name="triangulo" action="triang.php" method="POST" target="rpta">
	<fieldset>
		<legend>Ejercicio 4</legend>
		<label>Lado A</label><br>
        <input type="number" name="one" /><br>
		<label>Lado B</label><br>
        <input type="number"  name="two" /><br>
      	<label>Lado C</label><br>
        <input type="number"  name="three" /><br>
		<input type="submit" name="send" value="Enviar"><br>
		<label>Resultado</label><br>
		<iframe src="" name="rpta"></iframe>
	</fieldset>
	</form>
	
	<?php
		include "pie.php";
	?>

</body>
</html>