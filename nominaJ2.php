<?php
$departamentos = require 'empleadosJ.php';
$departamentos['Ventas'] = []; //agregar un nuevo departamento llamado ventas
$departamentos['ventas'][] = [   //vete al final no imparta el tamaño y agrega lo que sigue
    'nombre' => 'Roberto Hernández', 
    'sueldo' => 3500,
  ];


echo "\n     Nombre     |   Sueldo   |  Departamento  |  IVA  |  ISR  | Total";
foreach ($departamentos as $departamento => $empleados) {
      echo "\n$departamento";
      $totalDepartamento = 0;

      array_walk($empleados, function($empleado)   //
         use ($departamento, &$totalDepartamento) {  //una forma indirecta de pasarle los datos
         $iva = $empleado['sueldo'] * .15;
         $isr = $empleado['sueldo'] * .1;
         $total = $empleado['sueldo'] - $iva - $isr;
         $totalDepartamento += $total;

         echo "\n{$empleado['nombre']}  |  {$empleado['sueldo']}  |  ";
         echo "$departamento  |  $iva  |  $isr  |  $total ";
      });
     echo "\n$totalDepartamento";
}




