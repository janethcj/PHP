/*
@author: janethcj
@description: -Funciones arreglos
*/

<?php include 'includes/header.php';

//Buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Televisión'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1,3,4,5,1,2);

sort($numeros);   //de menor a mayor
rsort($numeros);  //de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo
$cliente = array (
  'saldo' => 200;
  'tipo' => 'Premium'
  'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

//Orden alfabético
asort($cliente);   //ordena por los valores (primero números y despues Strings)
arsort($cliente);  //Ordena por valores (Z primero)
ksort($cliente);   //Ordenar las llaves de lado izquierdo
krsort($cliente);  //Ordena las llavez de la Z a la A

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
