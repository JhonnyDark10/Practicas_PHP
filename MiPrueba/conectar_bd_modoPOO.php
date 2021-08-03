

<html>

<head>


</head>


<body>

	<?php
	
		$conexion= new mysqli("localhost","root","","usuarios");
	
		if($conexion->connect_errno){
			
			echo "fallo la conexion " . $conexion->connect_errno;
		}
		
		//mysqli_set_charset($conexion,"uft8");
		
		$conexion->set_charset("utf8");
		
		$sql="select * from articulos";
		
		//$resultados=mysqli_query($conexion,$sql);
		
		$resultado=$conexion->query($sql);
		
		if($conexion->errno){
			
			die($conexion->error);
		}
		
		/*while($fila=mysqli_fetch_array($resultado,MYSQL_ASSOC){
			
		}*/
		
		
		while($fila=$resultado->fetch_assoc()){
			
			echo "<table ><tr><td>";
		echo $fila['SECCION'] . "</td><td>";
		echo $fila['NOMBRE'] . "</td><td>";
		echo $fila['PAIS'] . "</td><td></tr></table>";
		
		
		echo "<br>";
			
		}
		
		//mysqli_close($conexion);
		
	$conexion->close();
	?>


</body>


</html>