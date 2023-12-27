<?php
	$cuo = 0;
	if(isset($_POST['calcu'])){
		$mon = $_POST['monto'];
		$tarj = $_POST['tarjeta'];
		$int = 0;
		$mes = $_POST['meses'];
		$deu = $mon;
		$pi=0;
		switch ($tarj) {
			case 'visa':
				$int = 0.03;
				break;
			case 'master':
				$int = 0.035;
				break;		
			default:
				$int = 0.04;
				break;
		}
		$cuo = ($mon * $int) /(1-(1 + $int)**-$mes);
		$cuo = round($cuo, 2);
		}

	echo "<table border='1'>
			<tr>
				<td>Mes</td>
				<td>Cuota Mensual</td>
				<td>Pago del interes</td>
				<td>Pago del capital</td>
				<td>Deuda</td>
			</tr>";
	for ($i=1; $i <=$mes ; $i++) { 
		$pi=round($deu*$int,2);
		$pc=round($cuo-$pi,2);
		$deu=round($deu-$pc,2);
		echo "<tr>
				<td>$i</td>
				<td>$cuo</td>
				<td>$pi</td>
				<td>$pc</td>
				<td>$deu</td>
			</tr>
		";
		
	}
	

	echo "</table>";
	?>