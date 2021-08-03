
<body>
<?php
 
 
	$busqueda=$_GET["buscar"];
	
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

	$consulta="SELECT * FROM articulos where codigo like '%$busqueda%'";
	$resultado=mysqli_query($conexion,$consulta);
	
		
	while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
		
		//echo "<table ><tr><td>";
		
		echo "<form action='Actualizar.php' method='get'>";
		echo "<input type='text' name='cod' value='" .$fila['codigo'] . "'><br>";
		echo "<input type='text' name='seccion' value='" .$fila['SECCION'] . "'><br>";
		echo "<input type='text' name='n_art' value='" .$fila['NOMBRE'] . "'><br>";
		echo "<input type='text' name='fecha' value='" .$fila['FECHA'] . "'><br>";
		echo "<input type='text' name='p_ori' value='" .$fila['PAIS'] . "'><br>";
		echo "<input type='text' name='precio' value='" .$fila['PRECIO'] . "'><br>";
		
		
		echo  "<input type='submit' name='enviando' value='Actualizar!'>";
		
		
		echo "</form>";
		
	}

	mysqli_close($conexion);

?>


</body>