
<?php

	/*$semana[]="Lunes";
	
	$semana[]="Martes";
	
	$semana[]="Miercoles";
	
	$semana[]="Jueves";
	
	$semana[]="Viernes";
	
	$semana=array("Lunes","Martes","Miercoles","Jueves");
	
	echo $semana[0];*/
	
	
	$datos=array("Nombre"=>"Juan","Apellido"=>"Flores","Edad"=>21);
	
	//echo $datos["Apellido"];
	/*
	if(is_array($datos)){
		
		echo "es un array";
		
	}else{
		
		echo "esto no es un array";
	}*/
	
	foreach($datos as $clave=>$valor){
		
		echo "A $clave le corresponde $valor <br>";
	}

?>