/*
@author: janethcj
@description: -Condicionales
*/

<?php include 'includes/header.php';

//IF
$autenticado = true;
$admin = false;

if($autenticado || $admin){
  echo"El usuario esta autenticado"
}else {
  echo"El usuario no esta autenticado"

}

//IF ANIDADOS
$cliente = [
  'nombre' => 'Juan'
  'saldo' => 200
  'informacion' => ['tipo' => 'Premium']
];

if(!empty($cliente)){
  echo "El arreglo de cliente no esta vacio";

  if($cliente['saldo'] > 0){
    echo "El saldo del cliente esta disponible";
  } else {
    echo "No hay saldo";
  }

}

//ELSE IF

if($cliente['saldo'] > 0){
  echo "El cliente tiene saldo";
} else if ($cliente['información']['tipo']== 'Premium'){
  echo "El cliente es Premium";
} else {
  echo "No hay cliente definido o no tiene saldo o no es Premium"
}

//SWITCH
$tecnologia = 'JavaScript';

switch($tecnologia){
  case 'PHP':
    echo "PHP, un excelente lenguaje";
    break;
  case 'JavaScript':
    echo "Genial, el lenguaje de la web";
    break;
  case 'HTML':
    echo "Emmm..."
    break;
  default:
    echo "Algún lenguaje que no se cual es";
    break;
}



include 'includes/footer.php';
