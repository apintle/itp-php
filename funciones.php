<?php
function first()
{
    echo 'first';
}

function second()
{
    echo 'second';
}

$function = 'second'; //se le pasa el valor a una variable
$function();  //se invoca a la funci�n second, pero desde la variable anterior
