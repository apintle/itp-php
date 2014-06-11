<?php
function suma()
{

	$suma = 0;
	foreach (func_get_args() as $number){
	if(!is_numeric($number)) continue;
	$suma += $number;
	}
	
	return $suma;
}
echo suma(2, 5, 6, 7, 8, 10);
echo suma();
echo suma('yuyuyuy', 98, true);
?>