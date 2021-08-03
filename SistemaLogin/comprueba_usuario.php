
<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
    <title>Ejemplo de login</title>
  </head>
  <body>
   
   <?php
   
		try{
			
			$base=new PDO('mysql:host=localhost;dbname=usuarios','root','');	
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//$base->conexion_db->exec("SET CHARACTER SET utf8");
			
			$sql="select * from usuarios_pass where usuarios= :login and password=:password";
			
			$resultado=$base->prepare($sql);
			
			$login=htmlentities(addslashes($_POST["login"]));
			$password=htmlentities(addslashes($_POST["password"]));
			
			$resultado->bindValue(":login",$login);
			$resultado->bindValue(":password",$password);
			
			$resultado->execute();
			
			$numero_registro=$resultado->rowCount();
			
			if($numero_registro!=0){
				
				//echo "<h2>Adelante!!</h2>";
				
				session_start();
				
				$_SESSION["usuario"]=$_POST["login"];
				
				header("location:usuarios_registrados1.php");
				
				
				
			}else{
				
				header("location:login.php");
			}
			
			
		}catch(Exception $e){
			
			die ("Error: " . $e->getMessage());
		}
   
   
   ?>
   
   
  </body>
</html>