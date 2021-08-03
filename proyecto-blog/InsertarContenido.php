<!doctype html>

<html>

<head>

</head>

<meta charset="utf-8">
<title>documento sin titulo</title>

</head>

<body>

<?php


	$miconexion=mysqli_connect("localhost","root","","bdblog");
	
	/*comprobar conexion*/
	
	if(!$miconexion){
		
		echo "La conexion ha fallado: " . mysqli_error();
		
		exit();
	}
	
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
		
			$destino_de_ruta="imagenes/";
			
			move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta . $_FILES['imagen']['name']);
		
		   echo "el archivo " . $_FILES['imagen']['name'] . "se ha copiado en el directorio de imagenes";
		}else{
			
			echo "el archivo no se a podido copiar al directorio de imagen";
		}
		
	}
	
	$eltitulo=$_POST['campo_titulo'];
	
	$lafecha=date("Y-m-d H:i:s");
	
	$elcomentario=$_POST['area_comentarios'];
	
	$laimagen=$_FILES['imagen']['name'];
	
	$miconsulta="INSERT INTO CONTENIDO(Titulo, Fecha, Comentario, Imagen) VALUES ('" . $eltitulo . "','" . $lafecha . "','" . $elcomentario . "','" . $laimagen . "')";
	
	$resultado=mysqli_query($miconexion, $miconsulta);
	
	/*cerramos conexion*/
	
	mysqli_close($miconexion);
	
	echo "<br/> se ha agregado el comentario con exito. <br/><br/>";
	
?>

<a href="Formulario.php">Añadir nueva entrada </a>
<a href="MostrarBlog.php">Ver Blog     </a>

</body>


</html>