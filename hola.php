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





