<body>

<?php


   $id="";
   $contenido="";
   $tipo="";
   
   
	require("datos_conexion.php");
	
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);


	if(mysqli_connect_errno()){
		
		echo "Fallo al conectar la base de datos";
		
		exit();
	}
	//busca base
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base");
	//tildes
	mysqli_set_charset($conexion,"utf8");
 

   $consulta="select * from archivos where id=5";
   $resultado=mysqli_query($conexion, $consulta);

	
	while($fila=mysqli_fetch_array($resultado)){
		
	 $id=$fila["id"];
	 $contenido=$fila["contenido"];
	 $tipo=$fila["tipo"];
	}
	
	echo "Id: " . $id . "<br>";
	
	echo "Tipo: " . $tipo . "<br>";
	
	echo "<img src='data:image/jpeg; base64," . base64_encode($contenido). "'>";
?>

<div>


</div>
</body>