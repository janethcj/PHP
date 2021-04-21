/*
@author: janethcj
@description: -Funciones
*/



<?php
declare(strict_type=1);
include 'includes/header.php';

  function sumar($numero1, $numero2){   //Argumentos
    echo $numero1 + $numero2;
  }

  sumar(10,'Hola');                         //Parámetros
  echo "<br>"
  sumar(20,50);                         //Parámetros
  echo "<br>"
  sumar(50,30);                         //Parámetros

include 'includes/footer.php';
