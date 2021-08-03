<?php
 
	//$busqueda=$_GET["buscar"];
	
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

	$consulta="insert into articulos (seccion,nombre,fecha,pais,precio) values('ceramica','tubo3','12/12/2012','ecuador',123)";
	
	
	$resultado=mysqli_query($conexion,$consulta);
	
		
	

	mysqli_close($conexion);
	
	

?>
