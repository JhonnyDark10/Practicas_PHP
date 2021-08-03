<?php

	//$palabra="Juan";
	
	
	//echo(strtolower($palabra));
	
/*
	function suma($num1, $num2){
		
		$resultado=$num1+$num2;
		
		return $resultado;
		
	}


	echo (suma(1,2));

*/


	function frase_mayuscula($frase,$conversion=true){
		
		
		$frase=strtolower($frase);
		
		if($conversion==true){
			
			$resultado=ucwords($frase);
		}else{
			
			$resultado=strtoupper($frase);
		}
		return $resultado;
		
	}
	
	
	echo (frase_mayuscula("esto es una prueba"));
?>