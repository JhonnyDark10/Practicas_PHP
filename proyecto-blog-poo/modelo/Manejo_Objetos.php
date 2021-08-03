<?php
		
		include_once("Objeto_blog.php");
		class Manejo_Objetos{
			
			
			private $conexion;
			
			public function __construct($conexion){
				
				
				$this->setConexion($conexion);
				
				
			}
			
			
			public function setConexion(PDO $conexion){
				
				$this->conexion=$conexion;
				
				
			}
			
			
			public function getContenidoPorFecha(){
				
				
				$matriz=array();
				
				$contador=0;
				
				$resultado=$this->conexion->query("select * from contenido order by fecha");
				
			
			
				while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
					
					$blog=new Objeto_blog();
					
					$blog->setId($registro["Id"]);
					$blog->setTitulo($registro["Titulo"]);
					$blog->setFecha($registro["Fecha"]);
					$blog->setComentario($registro["Comentario"]);
					$blog->setImagen($registro["Imagen"]);
					
					
					$matriz[$contador]=$blog;
					
					$contador++;
					
				}
				
				
				return $matriz;
			}
			
			
			
			public function insertaContenido(Objeto_blog $blog){
				
				$sql="insert into contenido(Titulo,Fecha, Comentario, Imagen) values('" . $blog->getTitulo() . "','" . $blog->getFecha() . "','" .$blog->getComentario() . "','" . $blog->getImagen() . "')";
				
			$this->conexion->exec($sql);
			
			}
			
			
		}







?>