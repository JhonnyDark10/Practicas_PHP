
<html>
<head>


</head>

<body>

	<?php

		$codigo_f = $_GET["codigo"];
		$seccion_f = $_GET["seccion"];
		$nombre_f = $_GET["n_art"];
		$precio_f = $_GET["precio"];
		$fecha_f = $_GET["fecha"];
		$pais_f = $_GET["p_orig"];
		
		require("datosconexion.php");

		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
		
		if(mysqli_connect_errno()){
			
			echo "fallo aal conectar la base";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre) or die("no se encuentra la base");

		mysqli_set_charset($conexion,"utf8");
		
		$sql="insert into articulos(codigo,seccion,nombre,fecha,pais,precio) values (?,?,?,?,?,?)";
 		$resultado=mysqli_prepare($conexion,$sql);
		
		$ok=mysqli_stmt_bind_param($resultado,"ssssss",$codigo_f,$seccion_f,$nombre_f,$fecha_f,$pais_f,$precio_f);
		
		$ok=mysqli_stmt_execute($resultado);
		
		if($ok==false){
			
			echo "erro al ejecutar la consulta";
			
		}else{
			
			//$ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
			
			echo "agregado nuevo registro<br><br>";
			
			/*while(mysqli_stmt_fetch($resultado)){
				
				echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
			}*/
			
			mysqli_stmt_close($resultado);
		}
	?>

</body>



</html>