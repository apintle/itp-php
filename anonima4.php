<?php
//despues de la palabra function no tiene nombre.
//la unica forma de usarla es poniéndola en una variable

$mayor = function($a, $b) {
    if ($a > $b){
        return $a;
    } else {
         return $b;
    }
};    //la sentencia completa es una asignación, por eso necesita ;


echo $mayor(12,7);

$numbers = [1,3,4,11,100,5];
usort($numbers, function($a, $b) {
       return $b - $a;  //se cambian las variables de lugar
});

print_r($numbers);

$mayor = 'Hola';
echo $mayor;
 

// ordena descendentemente
