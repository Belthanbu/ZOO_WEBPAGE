<?php
$n=$_GET["valorn"];
echo "Estos son $n numeros aleatorios entre 300 y 2000 <br/>";
$cantidad=0;


echo "<table border='1'>
        <tr>
            <td>N<td>
            <td>Numero<td>
            <td>Suma de digitos<td>
            <td>Descripcion<td> 
        <tr>"; 

while ($cantidad<$n){
    $rand=rand(300,2000);
    $d=$rand;
    $cantidad++;
    $sum=0; $rem=0; 
    
    for ($i =0; $i<=strlen($rand);$i++) 
     { 
      $rem=$rand%10; 
      $sum = $sum + $rem; 
      $rand=$rand/10;
      } 
    if (($sum % 2) == 0) {
    echo "<tr>
            <td>$cantidad<td>          
            <td>$d<td>
            <td>$sum<td>
            <td>PAR<td>
          <tr>";
    } else {
    echo "<tr>
            <td>$cantidad<td>          
            <td>$d<td>
            <td>$sum<td>
            <td>IMPAR<td>
          <tr>";
    }   
}

?>



