<?php
// con funciones

$empleados = require 'empleados.php';


//llamado de funciones

nomina_foreach($empleados);
nomina_for($empleados);
nomina_while($empleados);
nomina_while2($empleados, .16);

//CODIGO DE FUNCIONES

//ejemplo de los parametros por defecto



function nomina_while2($empleados, $porcentajeIVA = .15, $porcentajeISR = .10)
{

		echo "\nNombre                 | Sueldo\n";
		$i = 0;
		while ($i < count($empleados))
		{
		$sueldo = $empleados[$i]['sueldo']
		- $empleados[$i]['sueldo'] * $porcentajeIVA
		- $empleados[$i]['sueldo'] *  $porcentajeISR;
		echo "{$empleados[$i]['nombre']}             | $sueldo\n";
		$i++;
		}
}



function nomina_while($empleados) 
{
   echo "\n FUNCION WHILE \n";
   echo "Nombre               | Sueldo\n";
   $i = 0;
   while ($i < count ($empleados)) { 
        $sueldo = $empleados[$i]['sueldo']
           - $empleados[$i]['sueldo'] * .15
           - $empleados[$i]['sueldo'] * .1;
        echo "{$empleados[$i]['nombre']}     | $sueldo\n"; 
       $i++;       
  }
}


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
