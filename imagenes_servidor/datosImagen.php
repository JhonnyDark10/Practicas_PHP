<?php

	//recibimos los datos de la imagen
	
	$nombre_imagen=$_FILES['imagen']['name'];
	$tipo_imagen=$_FILES['imagen']["type"];
	$tamano_imagen=$_FILES['imagen']["size"];
	
	
	//echo $tipo_imagen;
	
	
	if($tamano_imagen<=1000000){
	
			if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){
				//ruta carpeta destino servidor
				$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . 'imagenes/';
				
				//movemos la imagen del directrio temporal al directorio escogido
				move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
			
			
			
			}else{
				
				
				echo "solo se pueden subir imagenes jpg,png,gif,jpeg";
				
			}
	}else{
		
		echo "El tamaño es demasiado grande";
	}
	
	
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

	//$sql="insert into articulos(foto) values ('$nombre_imagen')";
	$sql="update articulos set foto='$nombre_imagen' where codigo = 6";
	$resultado=mysqli_query($conexion,$sql);

?>