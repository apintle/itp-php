<?php

$nombre = 'Pedro';
$sb = 4000.00;

$iva = $sb * 0.15;
$isr= $sb * 0.10;
$st = $sb - $iva -$isr;
echo $sb;
echo "\n$nombre";
echo "\nIVA: $iva";
echo "\nISR: $isr";
echo "\nPago: $st";