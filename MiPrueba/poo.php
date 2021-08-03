<?php




	include("vehiculos.php");

	$mazda =new Coche();
	$pegaso= new Camion();
	
	//$mazda->motor=5000;
	
	echo "El Mazda Tiene " . $mazda-> get_ruedas() . "ruedas<br>";
	
	
	echo "El pegazo Tiene " . $pegaso-> get_ruedas() . "ruedas<br>";
	
	echo "El mazda tiene " . $mazda->get_motor() . "cc<br>";
	
	//$mazda-> ruedas=7;  
	
	//echo "El mazda tiene " . $mazda->ruedas . "ruedas <br>";
	
	//echo "El pegaso tiene " . $pegaso->ruedas . "ruedas <br>";
	
	
	//$pegaso->frenar();
	//$pegaso->arrancar();

?>