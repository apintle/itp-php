<?php
/* Para el proceso de pagos de una empresa se deben de agregar la cantidad ganada
 para cada empleado, calcular el IVA (15%) e ISR(10%), mostrar el nombre del empleado, 
la cantidad ganada, retención de impuestos así como el total pagado a cada empleado. */


$empleado = [['nom' => 'Luis', 's' => 4000],
             ['nom' =>'María', 's' => 3000],
             ['nom' =>'Jorge', 's' => 5000]];

//print_r($empleado);

foreach ($empleado as $empleado) {
          $s = $empleado['s'] - $empleado['s'] * .15 - $empleado['s'] * .1;
         
         echo "{$empleado['nom']}     | $s\n"; 

}