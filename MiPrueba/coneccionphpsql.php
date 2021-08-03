
<style>
table{
	width:50%;
	border:1px dotted #ff0000;
	margin:auto;
}

</style>
<?php
 
	require("datosconexion.php");

	//$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);
	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);


	if(mysqli_connect_errno()){
		
		echo "Fallo al conectar la base de datos";
		
		exit();
	}
	//busca base
	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base");
	//tildes
	mysqli_set_charset($conexion,"utf8");

	//$consulta="SELECT * FROM DATOSPERSONALES";
	//$consulta="SELECT * FROM articulos where sección='ceramica'";
	
	
	$consulta="SELECT * FROM articulos where sección='ceramica'";
	$resultado=mysqli_query($conexion,$consulta);
	
	//$registros=1;
	
	/*$fila=mysqli_fetch_row($resultado
	echo "<table ><tr><td>";
		echo $fila[0] . "</td><td>";
		echo $fila[1] . "</td><td>";
		echo $fila[2] . "</td><td></tr></table>"*/
	
	while($fila=mysqli_fetch_array($resultado, MYSQL_ASSOC)){
		
		//$fila=mysqli_fetch_row($resultado);
		
		echo "<table ><tr><td>";
		echo $fila['SECCIÓN'] . "</td><td>";
		echo $fila['NOMBRE ARTÍCULO'] . "</td><td>";
		echo $fila['PAÍS DE ORIGEN'] . "</td><td></tr></table>";
		
		
		echo "<br>";
		//$registros++;
	}

	mysqli_close($conexion);

?>