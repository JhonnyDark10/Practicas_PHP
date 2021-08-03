

<body>

<?php
 
	//$busqueda=$_GET["buscar"];
	$cod=$_GET["codigo"];
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

	$consulta="delete from articulos where codigo='$cod'";
	
      
	
	$resultado=mysqli_query($conexion,$consulta);
	
	if($resultado==false){
		
		echo "Error en la consulta";
	}else{
		
		//echo "registro eliminado<br><br>";
		
		//echo mysqli_affected_rows($conexion);
		if(mysqli_affected_rows($conexion)==0){
			
			echo "no ahi registro q eliminar";
		}else{
			echo "se han eliminado " . mysqli_affected_rows($conexion) . "registros";
		}
		
	}
	

	mysqli_close($conexion);
	
	

?>




</body>