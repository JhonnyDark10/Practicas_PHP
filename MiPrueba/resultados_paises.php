
<html>
<head>


</head>

<body>

	<?php

		$pais = $_GET["buscar"];
		
		require("datosconexion.php");

		$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);
		
		if(mysqli_connect_errno()){
			
			echo "fallo aal conectar la base";
			
			exit();
		}
		
		mysqli_select_db($conexion,$db_nombre) or die("no se encuentra la base");

		mysqli_set_charset($conexion,"utf8");
		
		$sql="select codigo, seccion, precio, pais from articulos where pais=?";
 		$resultado=mysqli_prepare($conexion,$sql);
		
		$ok=mysqli_stmt_bind_param($resultado,"s",$pais);
		
		$ok=mysqli_stmt_execute($resultado);
		
		if($ok==false){
			
			echo "erro al ejecutar la consulta";
			
		}else{
			
			$ok=mysqli_stmt_bind_result($resultado,$codigo,$seccion,$precio,$pais);
			
			echo "articulos encontrados: <br><br>";
			
			while(mysqli_stmt_fetch($resultado)){
				
				echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
			}
			
			mysqli_stmt_close($resultado);
		}
	?>

</body>



</html>