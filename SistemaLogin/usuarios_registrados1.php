<html>

<head>


</head>

<body>
<?php

	session_start();
	
	if(!isset($_SESSION["usuario"])){
		
		header("Location:login.php");
	}

?>
<h1>Bienvenidos Usuarios</h1>

<?php

	echo "hola: " . $_SESSION["usuario"] . "<br>";
?>

<p><a href="cierre.php">Cierra Seción</a></p>


<p>Esto es informacíon solo para usaurios registrados</p>




</body>


</html>