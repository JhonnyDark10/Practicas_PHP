<head>
<?php
 
	function ejecuta_consulta($labusqueda){
	
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

	$consulta="SELECT * FROM articulos where NOMBRE like '%$labusqueda'";
	$resultado=mysqli_query($conexion,$consulta);
	
		
	while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
		
		echo "<table ><tr><td>";
		echo $fila['SECCIÓN'] . "</td><td>";
		echo $fila['NOMBRE'] . "</td><td>";
		echo $fila['PAÍS DE ORIGEN'] . "</td><td></tr></table>";
		
		
		echo "<br>";
		
	}

	mysqli_close($conexion);
	
	}

?>



</head>



<body>

	<?php
    
	 $mibusqueda=$_GET["buscar"];
	 
	 $mipagina=$_SERVER["PHP_SELF"];
	 
	 if($mibusqueda!=NULL){
		
		ejecuta_consulta($mibusqueda);
		
	 }else{
		 
		 echo("<form action='" . $mipagina . "' method='get'>
		 
		 <label>Buscar:<input type='text' name='buscar'></label>
		 
		 <input type='submit' name='enviando' value='Dale!'>
		 
		 </form>");
	 }

	?>

</body>