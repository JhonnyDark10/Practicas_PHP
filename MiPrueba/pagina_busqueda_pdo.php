<html>

<head>



</head>


<body>

	<?php
	
			//$busqueda=$_GET['buscar'];
			$busqueda_sec=$_GET['seccion'];
			$busqueda_pais=$_GET['p_orig'];
		try{

			$base= new PDO('mysql:host=localhost; dbname=usuarios','root','');
		
			//echo 'Conexión OK'
			
			
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$base->exec("SET CHARACTER SET utf8");
			
			//$sql="select codigo,seccion,nombre,precio,pais from articulos where codigo =?";
			$sql="select codigo,seccion,nombre,precio,pais from articulos where seccion= :SECC AND pais = :P_ORI";
			
			$resultado=$base->prepare($sql);
			
			//$resultado->execute(array($busqueda));
			$resultado->execute(array(":SECC"=>$busqueda_sec,":P_ORI"=>$busqueda_pais));
		
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
				
				echo "Nombre Articulo: " . $registro['nombre'] . "Seccion: " . $registro['seccion'];
			}
			
			$resultado->closeCursor();
		
		}catch(Exception $e){
			
			die('Error: ' . $e->GetMessage()); 
		}
		
		
	?>

</body>


</html>