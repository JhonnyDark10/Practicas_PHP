<html>
<body>


<?php

include("../modelo/Manejo_Objetos.php");


	try{
		
		$miconexion= new PDO('mysql:host=localhost;dbname=bdblog','root','');
		
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$Manejo_Objetos= new Manejo_Objetos($miconexion);
		
		$tabla_blog=$Manejo_Objetos->getContenidoPorFecha();
		
		
		if(empty($tabla_blog)){
			
			echo "no ahi entradas de blog aun";
		}else{
			
			foreach($tabla_blog as $valor){
				
				
				echo "<h3>" . $valor->getTitulo() . "</h3>";
				
				echo "<h4>" . $valor->getFecha() . "</h4>";
				
				echo "<div style='width:400px'>" ;
                
                echo $valor->getComentario() . "</div>";

				if($valor->getImagen()!=""){
					
					echo "<img src='../imagenes/";
					
					echo $valor->getImagen() . "' width='300px' height='200px'/>";
				
					
				}
				
			}	echo "<hr/>";
			
		}
		
		
	
	}catch(Exception $e){
		
		die("error: " . $e->getMessage());
	}


?>

<br/>

<a href="Formulario.php"> volver a la pagina de inserccion </a>

</body>

</html>