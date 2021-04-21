/*
@author: janethcj
@description: -Arreglos indexados
*/

<?php include 'includes/header.php';

//Forma 1
$carrito = ['Tablet', 'Television', 'Computadora'];

//Ver valores del arreglo
echo "<pre>";
var_dump($carrito);
echo "</pre>";

//Acceder a un elemento en específico
echo $carrito[1];

//Añadir elementos al array
$carrito[3] = 'Nuevo Producto...';

//Agregar elementos al final del arreglo
array_push($carrito, 'Audifonos');

//Agregar elementos al inicil del arreglo
array_unshift($carrito, 'Smartwatch');


//Forma 2
$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';
