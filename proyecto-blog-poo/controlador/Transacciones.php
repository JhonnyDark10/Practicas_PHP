<!doctype html>

<html>

<head>

</head>

<meta charset="utf-8">
<title>documento sin titulo</title>

</head>

<body>

<?php



	include_once("../modelo/Objeto_blog.php");
	
	include_once("../modelo/Manejo_Objetos.php");
	
	
	try{
		
		$miconexion= new PDO('mysql:host=localhost;dbname=bdblog','root','');
		
		$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	
				if($_FILES['imagen']['error']){
		
		
					switch($_FILES['imagen']['error']){
		
						case 1: //error exceso de tamaño de archivo en php.ini
							echo "el tamno del archivo excede lo permitido por el servidor";
					
							break;
					
						case 2: //error tamaño archivo marcado desde formulario
						   echo "el tamaño del archivo excede 2 mb";
						   break;
				   
			
						case 3://corrupcion de archivo
						
							 echo "el envio de archivo se interumpio";
							 break;
				 
						case 4:// no hay fichero 
						
							echo "no se ha enviado ningun archivo";
							break;
		}
		
	}else{
		
		echo "entrada subida correctamente<br/>";
		
		if((isset($_FILES['imagen']['name'])&& ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){
		
			$destino_de_ruta="../imagenes/";
			
			move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta . $_FILES['imagen']['name']);
		
		   echo "el archivo " . $_FILES['imagen']['name'] . "se ha copiado en el directorio de imagenes";
		}else{
			
			echo "el archivo no se a podido copiar al directorio de imagen";
		}
		
	}
	
	
	$Manejo_Objetos= new Manejo_Objetos($miconexion);
	$blog = new Objeto_blog();
	
	$blog->setTitulo(htmlentities(addslashes($_POST["campo_titulo"]),ENT_QUOTES));
	$blog->setFecha(Date("Y-m-d H:i:s"));
	
	$blog->setComentario(htmlentities(addslashes($_POST["area_comentarios"]),ENT_QUOTES));
	
	$blog->setImagen($_FILES["imagen"]["name"]);
	
	
	$Manejo_Objetos->insertaContenido($blog);
	
	echo "<br/> entrada de blog agregada con exito <br/>";
	
	
	}catch(Exception $e){
		
		die("error: " . $e->getMessage());
	}
?>


</body>


</html>