<html>
<head>


</head>


<body>

	<?php
	
	$usuario = $_POST["usu"];
	
	$contrasenia = $_POST["contra"];
	
	//CIFRA CONTRASEÑA AL GUARDAR
	//$pass_cifrado= password_hash($contrasenia, PASSWORD_DEFAULT);
	$pass_cifrado= password_hash($contrasenia, PASSWORD_DEFAULT,array("cost"=>12));
	try{
		
		$base= new PDO('mysql:host=localhost; dbname=usuarios','root','');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$base->exec("SET CHARACTER SET utf8");
		
		$sql="INSERT INTO USUARIOS_PASS (USUARIOS,PASSWORD) VALUES (:usu,:contra)";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":usu"=>$usuario, ":contra"=>$pass_cifrado));
	
		echo "registro insertado";
		
		$resultado->closeCursor();
		
	}catch(Exception $e){
		echo "Linea del error: " . $e->getLine();
	}
	
	
	
	?>

</body>


</html>