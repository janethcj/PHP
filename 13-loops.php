/*
@author: janethcj
@description: -Loops
*/

<?php include 'includes/header.php';

//WHILE (Hasta que una condición sea evaluada como falsa terminara el ciclo)
$i = 0;   //Inicializador

while($i < 10){
  echo $i . "<br>";
  $i++;   //Incremento
}

//DO WHILE (Primero ejecuta el código y después lo evalua)
$i = 0;

do {
  echo $i . "<br>";
  $i++;   //Incremento
} while ($i < 10);

//FOR (Se ejecuta hasta que una condición sea evaluada como verdadera o falsa)
for($i = 0; $i < 10; $i++){
  echo $i. "<br>";
}

/*
------EVALUACIÓN EN UNA ENTREVISTA DE TRABAJO------

Si el número actual se puede dividir entre:
3 imprime Fizz
5 imprime Buzz
3 Y 5 imprime FizzBuzz
*/

for($i = 1; $i < 100; $i++){
  if($i % 15 ==0){
    echo $i . " - Fizz Buzz<br>";
  } else if($i % 3 == 0){
    echo $i . " - Fizz <br>";
  } else if($i % 5 == 0){
    echo $i . " - Buzz <br>";
  } else {
    echo $i . "<br>";
  }
}


include 'includes/footer.php';
