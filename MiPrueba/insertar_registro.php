

<body>

<?php
 
	//$busqueda=$_GET["buscar"];
	
	$cod_seccion=$_GET["seccion"];
	$cod_nombre=$_GET["n_art"];
	$cod_precio=$_GET["precio"];
	$cod_fecha=$_GET["fecha"];
	$cod_pais=$_GET["p_orig"];
	
	
	require("datosconexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);


	if(mysqli_connect_errno()){
		
		echo "Fallo al conectar la base de datos";
		
		exit();
	}
	//busca base
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base");
	//tildes
	mysqli_set_charset($conexion,"utf8");

	$consulta="insert into articulos (SECCION,NOMBRE,FECHA,PAIS,PRECIO) values('$cod_seccion','$cod_nombre','$cod_fecha','$cod_pais','$cod_precio')";
	
      
	
	$resultado=mysqli_query($conexion,$consulta);
	
	if($resultado==false){
		
		echo "Error en la consulta";
	}else{
		
		echo "registro guardado<br><br>";
		
		echo "<table><tr><td>$cod_seccion</td></tr>";
		
		echo "<tr><td>$cod_nombre</td></tr>";
		echo "<tr><td>$cod_precio</td></tr>";
		echo "<tr><td>$cod_fecha</td></tr>";
		echo "<tr><td>$cod_pais</td></tr></table>";
		
		
	}
	

	mysqli_close($conexion);
	
	

?>




</body>