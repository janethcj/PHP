/*
@author: janethcj
@description: -For Each
*/

<?php include 'includes/header.php';

//Diseñado para recorrer arreglos
$clientes = array('Pedro', 'Juan', 'Karen')}},

foreach($clientes as $cliente){
  echo $cliente . "<br/>";
}

//Tamaño del arreglo
echo count($clientes);

//Con arreglo asociativo
$cliente = [
  'nombre' => 'Juan'
  'saldo' => 200
  'informacion' => ['tipo' => 'Premium']
];

foreach($cliente as valor){
  echo $valor . "<br/>";
}


include 'includes/footer.php';
