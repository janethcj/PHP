/*
@author: janethcj
@description: -Extensión de un String
              -Eliminar espacios en blanco
              -Convertir a mayúsculas
              -Convertir a minúsculas
              -Reemplazar el valor de una variable
              -Revisar existencia de un String
              -Concatenar variables
*/

<?php include 'includes/header.php';

$nombreCliente = "Janeth Jiménez";

//Extensión de un String
echo strlen(SnombreCliente);
var_Deup($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertir a mayúsculas
echo strtoupper($nombreCliente);

//Convertir a minúscilas
echo strtolower($nombreCliente);

$mail = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) == strtolover($mail2));

//Reemplaza el valor de una variable (valorActual, nuevoValor, de qué variable)
echo str_replace('Janeth', 'J', $nombreCliente);

//Revisar si un String existe o no
echo strpos($nombreCliente, 'Janeth');

//Concatenar variables
$tipoCliente = "Premium";
echo <br>
//Forma 1
echo "El cliente " . $nombreCliente . "es " . $tipoCliente;
//Forma 2
echo "El cliente {$nombreCliente} es {$tipoCliente}"; //Solo funciona con ""



include 'includes/footer.php';
