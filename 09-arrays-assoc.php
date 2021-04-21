/*
@author: janethcj
@description: -Arreglos asociativos
              -Se acceden a ellos por medio de una propiedad
*/

<?php include 'includes/header.php';

$cliente = [
  'nombre' => 'Juan',
  'saldo' => 200,
  'informacion' => ['tipo' => 'premium', 'disponible' => 200]
];

echo "<pre">;
var_dump($cliente[]);
echo "</pre>";

//Acceder y mostrar la información
echo $cliente['nombre'];
echo $cliente['saldo'];
echo $cliente['informacion']['tipo'];
echo $cliente['informacion']['disponible'];

//Agregar propiedades a un arreglo
$cliente['codigo'] = 12165461;

echo "<pre">;
var_dump($cliente[]);
echo "</pre>";



include 'includes/footer.php';
