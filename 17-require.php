/*
@author: janethcj
@description: -Require
              -Include
*/

<?php include 'includes/header.php';

  echo "Después del Include";

include 'includes/footer.php';

/*
Requiere cuando tengas funciones criticas para la aplicación.
Include cuando quieras incluir otros templates.
*/

/*
------INCLUIR FUNCIONES CON REQUIRE------

Nuevo archivo llamado funciones.php

  <?php
    function iniciarApp(){
      echo "Iniciando nuestra app...";
  }

Incluir la funcion en el archivo require.php

<?php include 'includes/header.php';

  require 'funciones.php';
  iniciarApp();

include 'includes/footer.php';


*/
