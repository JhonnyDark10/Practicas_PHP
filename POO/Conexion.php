<?php

	require ("config.php");

	class Conexion{
		
		
		protected $conexion_db;
		
		public function Conexion(){
			
			/*forma de mysqli POO
			$this->conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_CONTRA,DB_NOMBRE);
			
			if($this->conexion_db->connect_errno){
				
				echo "Fallo al conectar Mysql: " . $this->conexion_db->connect_error;
				return;
			}
			
			
			$this->conexion_db->set_charset(DB_CHARSET);*/
			
			
			//forma con la libreria PDO de poo
			
			try{
				
				$this->conexion_db= new PDO('mysql:host=localhost;dbname=usuarios','root','');
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexion_db->exec("SET CHARACTER SET utf8");
				
				
				return $this->conexion_db;
			
			}catch(Exception $e){
				
				echo "La lines de eror es: " . $e->getLine();
			}
			
		}
		
	}



?>