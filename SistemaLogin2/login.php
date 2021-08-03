<html>
<style>

h1,h2{
	text-align:center;
}

table{
	
	width:25%;
	background-color:#FFC;
	border: 2pxdotted #F00;
	margin:auto;
	.izq{
		text-align:right;
	}
	.der{
		text-align:left;
	}
	td{
		text-align:center;
		padding:10px;
	}
}

</style>




<head>

</head>


<body>
 <?php
   
   
   if (isset($_POST["enviar"])){
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
				
				//header("location:usuarios_registrados1.php");
				
				
				
			}else{
				
				//header("location:login.php");
				echo "error usuario o contraseña incorrectos";
			}
			
			
		}catch(Exception $e){
			
			die ("Error: " . $e->getMessage());
		}
   
   }
   ?>





<h1> INTRODUCE TUS DATOS </h1>

	
	<?php
	
	
	if(!isset($_SESSION["usuario"])){
	 include("formulario.html");
	}else{
		
		echo "Usuario_ " . $_SESSION["usuario"];
	}
	
	?>

<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">
	<tr>
		<td><img src="imagenes/1.jpg" width="300" height="166"></td>
		<td><img src="imagenes/2.png" width="300" height="171"></td>
	</tr>
	<tr>
		<td><img src="imagenes/3.png" width="300" height="166"></td>
		<td><img src="imagenes/4.png" width="300" height="171"></td>
	</tr>
</table>

</body>




</html>