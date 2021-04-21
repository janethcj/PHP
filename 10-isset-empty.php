/*
@author: janethcj
@description: -Función isset
              -Función empty
*/

<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro', 'Juan', 'Karen');
$cliente = [
  'nombre' => 'Juan',
  'saldo' => 200
];

//Empty <= Revisar si un arreglo esta vacio.
var_dump(empty($clientes));
var_dump(empty($clientes3));
var_dump(empty($clientes2));

//Isset <= Revisar si un arreglo esta creado o una propiedad esta definida
var_dump(isset($clientes4));
var_dump(isset($clientes2));
var_dump(isset($clientes1));
var_dump(isset($clientes3));


var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));


include 'includes/footer.php';
