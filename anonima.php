<?php
//despues de la palabra function no tiene nombre.
//la unica forma de usarla es poni�ndola en una variable

$mayor = function($a, $b) {
    if ($a > $b){
        return $a;
    } else {
         return $b;
    }
};    //la sentencia completa es una asignaci�n, por eso necesita ;


echo $mayor(12,7);
$mayor = 'Hola';
echo $mayor;

