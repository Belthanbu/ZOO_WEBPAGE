  <b><div>
    <?php 
      if (isset($_POST['send'])) {
        $a = trim($_POST['one']);
        $b = trim($_POST['two']);
        $c = trim($_POST['three']);

        if (!empty($_POST['one']) && !empty($_POST['two']) && !empty($_POST['three'])) {
        
        if (($a+$b > $c) && ($a + $c > $b) && ($b + $c > $a)) {

          echo "Es un triangulo de forma: ";
          if ( ($a==$b) && ($a==$c) && ($b==$c)  ) {
            echo "EQUILÁTERO";
          }else if ( ($a==$b) || ($a==$c) || ($b==$c) ) {
            echo "ISÓSCELES";
          }else{
            echo "ESCALENO";
          }
          $s = ( $a + $b + $c ) / 2;
          $ss  = ($s*($s-$a)*($s-$b)*($s-$c));
          echo "<br> Area: ";
          echo number_format(sqrt($ss), 2);
        }else{
          echo "No forma un triangulo <br>(Teorema de la desigualdad del triángulo)";
        }
      }
      }
    ?>
  </div></b>