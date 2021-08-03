<html>

<head>


</head>


<body>
	
	<?php
	
	try{
	
		$login=htmlentities(addslashes($_POST["login"]));
		
		$password=htmlentities(addslashes($_POST["password"]));
		
		$contador=0;
		
		$base=new PDO('mysql:host=localhost; dbname=usuarios','root','');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$sql="select * from usuarios_pass where usuarios= :login";
		
		$resultado=$base->prepare($sql);
		
		$resultado->execute(array(":login"=>$login));
		
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
				
				//echo "Usuarios: " . $registro['usuarios'] . 
				//" Contraseña: " . $registro['password'] . "<br>";
				
				if(password_verify($password, $registro['password'])){
					
					$contador++;
				}
			}
			
			
			if($contador>0){
				echo "Usuario registrado";
			}else{
				echo "usuario no registrado";
			}
				
			$resultado->closeCursor();
	}catch(Exception $e){
			
			die ("Error: " . $e->getMessage());
		}
	
	?>


</body>



</html>