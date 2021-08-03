<?php

	//recibimos los datos de la imagen
	
	$nombre_archivo=$_FILES['archivo']['name'];
	$tipo_archivo=$_FILES['archivo']["type"];
	$tamano_archivo=$_FILES['archivo']["size"];
	
	
	//echo $tipo_imagen;
	
	
	if($tamano_archivo<=1000000){
		
				//ruta carpeta destino servidor
				$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . 'imagenes/';
				
				//movemos la imagen del directrio temporal al directorio escogido
				move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);
			
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
	
	
	//flujo de datos y apuntado al archivo que quermremo abrir
	$archivo_objetivo=fopen($carpeta_destino . $nombre_archivo,"r");
	
	//para leer y la sucesion de byte que forma el archivo del index
    $contenido=fread($archivo_objetivo,$tamano_archivo);
	
	
	$contenido=addslashes($contenido);
	
	fclose($archivo_objetivo);
	
	$sql="insert into archivos(nombre,tipo,contenido) values ('$nombre_archivo','$tipo_archivo','$contenido')";
	
	
	$resultado=mysqli_query($conexion,$sql);
	
	if (mysqli_affected_rows($conexion)>0){
		
		echo "se ha insertado con exito";
	}else{
		
		echo "no se  ha insertado ";
	}
	

?>