/*
@author: janethcj
@description: -Operadores de comparación
*/

<?php include 'includes/header.php';

$numero 1 = 20;
$numero 2 = 30;
$numero 3 = 30;
$numero 4 = "30";

var_dump($numero1 > $numero2);
echo "<br>";

var_dump($numero1 < $numero2);
echo "<br>";

var_dump($numero1 >= $numero2);
echo "<br>";

var_dump($numero1 <= $numero2);
echo "<br>";

var_dump($numero2 == $numero3);
echo "<br>";

var_dump($numero2 == $numero4);
echo "<br>";

//-1 si izquiera es menor, 0 si es igual, 1 si es mayor
var_dump($numero1 <=> $numero2);
echo "<br>";

var_dump($numero2 <=> $numero3);
echo "<br>";

var_dump($numero2 <=> $numero1);
echo "<br>";



include 'includes/footer.php';
