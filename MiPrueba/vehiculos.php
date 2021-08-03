<?php

class Coche{
	
	//private $ruedas;
	
	protected $ruedas;
	
	var $color;
	
	protected $motor;
	
	function Coche(){
		
		$this->ruedas=4;
		$this->color="";
		$this->motor=1600;
		
	}
	
	
	function get_motor(){
		
		return $this->motor;
	}
	
	
	function get_ruedas(){
		return $this->ruedas;
		
	}
	
	function arrancar(){
		
		echo "estoy arrancando<br>";
		
	}
	
	function girar(){
		
		echo "estoy girando<br>";
		
	}
	
	function frenar(){
		echo "estoy frenando<br>";
	}
	/*
	function establece_color($color_coche,$nombre_coche){
		
		$this->color=$color_coche;
		echo "El color de " . $nombre_coche . " es: " . $this->color . "<br>";
	}*/
	
	function set_color($color_coche,$nombre_coche){
		
		$this->color=$color_coche;
		echo "El color de " . $nombre_coche . " es: " . $this->color . "<br>";
	}
	
}

class Camion extends Coche{
	
	
	function Camion(){
		
		$this->ruedas=8;
		
		$this->color="gris";
		
		$this->motor=2600;
	}
	
	function establece_color($color_camion,$nombre_camion){
		
		$this->color=$color_camion;
		
		echo "el color de " . $nombre_camion . " es: " . $this->color . "<br>";
		
	}
	
	function arrancar(){
		
		parent::arrancar();
		echo "Camion arrancado";
	}
}



?>