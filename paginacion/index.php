
<html>

<head>


</head>


<body>
<?php

	try{
		
		$base=new PDO('mysql:host=localhost;dbname=usuarios','root','');	
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$base->exec("SET CHARACTER SET utf8");
		
		$tamano_paginas=5;
		
		if(isset($_GET["pagina"])){
				
				if($_GET["pagina"]==1){
					
					header("Location:index.php");
				}else{
					$pagina=$_GET["pagina"];
				}
		}else{
			
			$pagina=1;
		}
		//$pagina=1;
		
		$empezar_desde=($pagina-1)*$tamano_paginas;
		
		$sql="select codigo, seccion,nombre,pais,precio from articulos where seccion='DEPORTE'";
			
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array());
		
		
		$num_filas=$resultado->rowCount();
		
		$total_paginas=ceil($num_filas/$tamano_paginas);
		
		echo "Numero de registros de la consulta: " . $num_filas . "<br>";
		echo "mostramos: " . $tamano_paginas . "<br>";
		
		echo "mostrando la pagina: " . $pagina .  " de " .$total_paginas . "<br>";
		
		/*while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			
			echo "Nombre: " . $registro["nombre"] . "Seccion: " . $registro["seccion"] ."Pais: " . $registro["pais"] .
			"Precio: " . $registro["precio"] ."<br>";
		}*/
		
		$resultado->closeCursor();
		
		$sql_limite="select codigo, seccion,nombre,pais,precio from articulos where seccion='DEPORTE' limit $empezar_desde,$tamano_paginas";
		
		$resultado=$base->prepare($sql_limite);
		
		$resultado->execute(array());
		
		while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
			
			echo "Nombre: " . $registro["nombre"] . "Seccion: " . $registro["seccion"] ."Pais: " . $registro["pais"] .
			"Precio: " . $registro["precio"] ."<br>";
		}
		
		}catch(Exception $e){
			
			echo "Linea de error: " . $e->getLine();
			
		}
		
		//-----------------------paginacion-------------------------------

	for($i=1; $i<=$total_paginas; $i++){
		
		echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
		
	}

?>


</body>





</html>