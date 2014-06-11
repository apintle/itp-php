<?php
/**
* comentario de varias líneas
*/
$message = 'Hola mundo'; // Comentario  en línea
# El punto y coma se puede omitir al final de un bloque
ECHO "$message\n";
define('PUBLISHER', 'Springer');
echo PUBLISHER;

$PI= 0.0314e2;

ECHO "\n$pi\n";
echo '\n$pi';

$people = ['Luis', 'Misraim', 'Noe', 1234, false,[2]];
//forma anterior de poner arreglos
$old = array(2, 3, 4);

$product = [
       'name' => 'Ajax',
       'price' => 230,
       'available' => true,
];

//10/06/14 para recorrer el arreglo
foreach ($product as $field => $value) {
        echo "\n$field: $value";
}





//9/06/14
echo "\nEste es el precio del producto {$product['price']}\n";
echo $product['name'];



print_r($product);
print_r($old);
print_r($people);

//Variables variables
$foo = 'bar';
$$foo= 'baz';

echo "\n$foo";
echo "\n$bar"; //aunque va a marcar warning si existe

//10/06/14

echo "\n";
$bigVariable = 'PHP';
$short = &$bigVariable;
$bigVariable .= ' Rocks!';  //el  punto antes del  igual es para concatenar cadenas 
echo "Short is $short";
echo "Long is $bigVariable";

/*
echo "\n"; //funciones
function update_counter()
{
    global $counter;  // para utilizar variables que fueron declaradas en prog. principal
    $counter++;
}
$counter = 10;
update_counter();
echo $counter;
*/


//variables estaticas
echo "\n"; 
function update_counter()
{
    static $counter = 0;  
    $counter++;
    echo "\nStatic: $counter";
}
$counter = 10;
update_counter();
update_counter();
echo "\n$counter";
echo "\n";

//paso de parámetros:
function greet($name)
{
echo "\nHello $name!";
}
greet('Janet');


echo "\n";// casting de variables
$age = 30;
$age = (string) $age; //quiero convertir edad a cadena
var_dump($age); //devuelve el tipo de variable
$age = (boolean) $age;
var_dump($age);
$age = (float) $age;
var_dump($age);
$age = (array) $age;
var_dump($age);

//ejemplo de operadores
var_dump('10' == 10);
var_dump('10' === 10);
var_dump('5' . 5);
var_dump('2' + 2);

echo "\n";// condiciones
$password = 'Letmein';
if ($password == 'letmein') {
    echo 'Password is correct';
} else {
    echo 'Try again';
}

echo "\n"; 

$color = 'red';
switch ($color){
     case 'green';
           echo 'Green';
     break;
     case 'blue';
           echo 'Blue';
     break;
     default:
           echo $color;
}


echo "\n";// pase de parametros
function test()
{
  $parameter1 = 'foo';
  $parameter2 = 'bar';
  if ($parameter1 === 'baz') {
      die('Terminate script');
}
    return "\n$parameter1 $parameter2";
}
//return 'Luis';
echo test();
//exit(0);
// no hace nada con el return, si se le quita si


//recuperar datos de otro archivo, por eso funciona el return fuera de una función
//como sabemos que tiene un valor lo podemos meter a una variable

$configuration = require 'configuration.php';
print_r sueldo ($configuration);





