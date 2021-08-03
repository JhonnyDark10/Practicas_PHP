
<?php


	require "Conexion.php";

   class DevuelveProductos extends Conexion{
	   
	   public function  DevuelveProductos(){
		   
		   parent::__construct();
		   
		   
	   }
	   
	   public function get_productos($dato){
		   //FORMA MYSQLI POO
		  /* $resultado=$this->conexion_db->query('select * from articulos where pais="' . $dato . '"');
		   
		   $productos=$resultado->fetch_all(MYSQLI_ASSOC);
		   
		   return $productos;*/
		   
		   //FORMA CON LA LIBRERIA PDO
		   
		   $sql="select *from articulos where pais='" . $dato . "'";
		   
		   $sentencia=$this->conexion_db->prepare($sql);
		   
		   $sentencia->execute(array());
		   
		   $resultado=$sentencia->fetchALL(PDO::FETCH_ASSOC);
		   
		   $sentencia->closeCursor();
		   
		   return $resultado;
		   
		   
		   $this->conexion_db=null;
	   }
	   
	   
	   
	   
   }
	



?>