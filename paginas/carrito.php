<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<title>Carrito</title>
	<script src="https://www.paypal.com/sdk/js?client-id=AXWYBw8ZYW5HR7vBhCnmAmD9GWn3YtYm8pR9rMSFBRPWntI3tNswMaHFgB0gHT2SfUzU4-FOgwrBJRIn&currency=USD"></script>
</head>
<body class="indext">
	<?php
		session_start();
		include "../includes/cabecera-carrito.php";
	?>

	<section class="section_all2">
	<table border="1" align="center" class="content-table">
	<thead>
	<tr>
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Precio</th>
		<th>Foto</th>
		<th>Cantidad</th>
		<th>SubTotal</th>
		<th>Acciones</th>
		
	</tr>
	</thead>
	<tbody style="text-align: center;">
	<?php		
		if(isset($_SESSION['carrito'])){
			$total = 0;
			foreach ($_SESSION['carrito'] as $key => $value) {
				echo "<tr><td>$key</td>";
				foreach ($value as $nombre => $valor) {
					if($nombre==="foto")
						echo "<td><img src='../imagenes/$valor' width='100' height='100'></td>";
					else
						echo "<td>$valor</td>";					
				}



				$subtotal = $value['cantidad'] * $value['precio'];
				$total = $total + $subtotal;
				echo "<td>$subtotal</td>";			
				echo "<td><a class='beliminar' href='carrito.php?codigo=$key'>Eliminar producto</a><br></td>";
				
			}
			echo "TOTAL: $total <br>";
			echo "<a class='beliminar' href='carrito.php?eliminar=true'>Eliminar todo</a><br><hr>";
		}

		if(isset($_REQUEST['eliminar'])){
			session_destroy();
			header("location:productos.php");
		}

		if(isset($_REQUEST['codigo'])){
			$codi = $_REQUEST['codigo'];
			unset($_SESSION['carrito'][$codi]);
			header("location:carrito.php");
		}

	?>
	</tbody>
	</table>

	</section>
	<div class="paypal">
	<div style="text-align: center;" id="paypal-button-container"></div>
			
	<script>
		paypal.Buttons({
			style:{
				shape: 'pill',
				label: 'pay'
			},
			createOrder: function(data, actions){
				return actions.order.create({
					purchase_units: [{
						amount: {
							value: <?=$total?>
						}
					}]
				});
			},
			onApprove: function(data, actions){
				return actions.order.capture().then(function(details) {
                    alert('Muchas Gracias Por su Compra ' + details.payer.name.given_name);
                                    });
			},
			onCancel: function(data){
				alert("Pago Cancelado")
			}
		}).render('#paypal-button-container');
	</script>
	</div>		
	<?php	

		include "../includes/pie2.php";
	?>
</body>

</html>

