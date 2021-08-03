
<?php

	$num1 =rand(10,50);
	
	echo "El Numero es: " . $num1;
	
	$num2 =5.4332323;
	
	echo "El Numero es: " . round($num2,2);
	
	
	//casting implicito
	$num3 ="5";
	
	$num3+=2;
	$num3+5.75;
	
	echo "El Numero es: " . $num3;
	
	
	//casting explicito
	
	$num4 ="5";
	$resultado=(int)$num4;
	
	

?>