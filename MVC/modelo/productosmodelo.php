<?php

	class Productos_modelo{
		
		
		private $db;
		
		
		private $productos;
		
		public function __construct(){
			
			require_once("modelo/conectar.php");
			
			$this->db=conectar::conexion();
			
			$this->productos=array();
			
		}
		
		
		public function get_productos(){
			
			$consulta=$this->db->query("SELECT * FROM ARTICULOS");
			
			while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
				
				$this->productos[]=$filas;
						
			}
			
			return $this->productos;
			
		}
			
	}







?>