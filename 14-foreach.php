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


//------------EJERCICIO FOREACH------------
$productos = [
  [
    'nombre' => 'Tablet',
    'precio' => 200,
    'disponible' => true
  ],
  [
    'nombre' => 'Television',
    'precio' => 300,
    'disponible' => true
  ],
  [
    'nombre' => 'Monitor',
    'precio' => 400,
    'disponible' => false
  ]
];

foreach($productos as producto){
  <li>
    <p> Producto: <?php echo "producto['']"?></p>
  </li>

  echo "<pre>";
  var_dump($producto);
  echo "</pre>";
}

include 'includes/footer.php';
