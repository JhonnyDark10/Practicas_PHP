

<body>

<?php
 
	//$busqueda=$_GET["buscar"];
	$cod_codigo=$_GET["cod"];
	$cod_seccion=$_GET["seccion"];
	$cod_nombre=$_GET["n_art"];
	$cod_precio=$_GET["precio"];
	$cod_fecha=$_GET["fecha"];
	$cod_pais=$_GET["p_ori"];
	
	
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

	$consulta="UPDATE articulos  set CODIGO='$cod_codigo',SECCION='$cod_seccion',NOMBRE='$cod_nombre',FECHA='$cod_fecha',PAIS='$cod_pais',PRECIO='$cod_precio' 
	WHERE CODIGO='$cod_codigo'";
	
      
	//evita inyeccion sql
	//mysqli_real_escape_string();
	//$contra=mysqli_real_escape_string(conexionbase,$_GET["USU"]);
	
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