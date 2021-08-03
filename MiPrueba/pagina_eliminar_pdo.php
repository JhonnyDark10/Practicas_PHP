<html>

<head>



</head>


<body>

	<?php
	
			//$busqueda=$_GET['buscar'];
			
			$busqueda_cod=$_POST['codigo'];
			
			/*$busqueda_sec=$_POST['seccion'];
			$busqueda_nombre=$_POST['n_art'];	
			$busqueda_fecha=$_POST['fecha'];
			$busqueda_pais=$_POST['p_orig'];
			$busqueda_precio=$_POST['precio'];*/
			
			
			
			
		try{

			$base= new PDO('mysql:host=localhost; dbname=usuarios','root','');
		
			//echo 'Conexión OK'
			
			
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$base->exec("SET CHARACTER SET utf8");
			
			
			//$sql="select codigo,seccion,nombre,precio,pais from articulos where seccion= :SECC AND pais = :P_ORI";
			
			/*$sql="insert into articulos (codigo,seccion,nombre,fecha,pais,precio) 
			values (:c_art,:seccion,:n_art,:fecha,:pais,:precio)";*/
			
			$sql="delete from articulos where codigo = :c_artr";
			
						
			$resultado=$base->prepare($sql);
			
			//$resultado->execute(array($busqueda));
			//$resultado->execute(array(":SECC"=>$busqueda_sec,":P_ORI"=>$busqueda_pais));
						
			/*$resultado->execute(array(":c_art"=>$busqueda_cod,":seccion"=>$busqueda_sec,
			"n_art"=>$busqueda_nombre,"fecha"=>$busqueda_fecha,
			"pais"=>$busqueda_pais,"precio"=>$busqueda_precio));*/
			
			$resultado->execute(array("c_artr"=>$busqueda_cod));
			/*
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
				
				echo "Nombre Articulo: " . $registro['nombre'] . "Seccion: " . $registro['seccion'];
			}*/
			
			echo "Registrado eliminado";
			$resultado->closeCursor();
		
		}catch(Exception $e){
			
			die('Error: ' . $e->GetMessage()); 
		}
		
		
	?>

</body>


</html>