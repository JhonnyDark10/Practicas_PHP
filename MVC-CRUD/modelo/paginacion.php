<?php

    require_once("conectar.php");
	
	$base=conectar::conexion();
	
//------------paginacion  inicio --------------------------------
	
	$tamano_paginas=3;
		
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
		
		$sql="select * from datos_usuarios";
			
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array());
		
		
		$num_filas=$resultado->rowCount();
		
		$total_paginas=ceil($num_filas/$tamano_paginas);
	
	
	
	//------------paginacion fin--------------------







?>