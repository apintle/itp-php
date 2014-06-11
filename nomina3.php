<?php
// con funciones

$empleados = require 'empleados.php';


//llamado de funciones

nomina_foreach($empleados);

nomina_for($empleados);


//CODIGO DE FUNCIONES


function nomina_for($empleados)
{
   echo "\n FUNCION FOR \n";
   echo "Nombre               | Sueldo\n";
   for ($i = 0; $i < count($empleados); $i++) {   //el parametro debe ser el mismo
        $sueldo = $empleados[$i]['sueldo']
        - $empleados[$i]['sueldo'] * .15
        - $empleados[$i]['sueldo'] * .1;

        echo "{$empleados[$i]['nombre']}     | $sueldo\n";
    }
}



function nomina_foreach($empleados) //el parametro debe ser el mismo
{
   echo "\n FUNCION FOREACH \n";
   echo "Nombre               | Sueldo\n";
   foreach ($empleados as $empleado) {   //el parametro debe ser el mismo
        $sueldo = $empleado['sueldo']
        - $empleado['sueldo'] * .15
        - $empleado['sueldo'] * .1;

        echo "{$empleado['nombre']}     | $sueldo\n";
  }
}
