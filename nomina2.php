<?php
// con funciones

$empleados = require 'empleados.php';

nomina_foreach($empleados);

function nomina_foreach($empleados) //el parametro debe ser el mismo
{
   echo "Nombre               | Sueldo\n";
   foreach ($empleados as $empleado) {   //el parametro debe ser el mismo
        $sueldo = $empleado['sueldo']
        - $empleado['sueldo'] * .15
        - $empleado['sueldo'] * .1;

        echo "{$empleado['nombre']}     | $sueldo\n";
  }
}
