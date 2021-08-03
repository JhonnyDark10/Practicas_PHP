<body>

<?php






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
 

   $consulta="select foto from articulos where codigo=6";
   $resultado=mysqli_query($conexion, $consulta);

	
	while($fila=mysqli_fetch_array($resultado)){
		
	  $ruta_img=$fila['foto'];
	  
	}
?>

<div>

	<img src="/imagenes/<?php echo $ruta_img;?>" alt='imagen del primer articulo' width='25%'/>

</div>
</body>