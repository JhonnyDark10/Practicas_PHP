<?php

    require "DevuelveArticulos.php";
	
	$pais=$_GET["buscar"];

	$productos = new DevuelveProductos();
	
	$array_productos=$productos->get_productos($pais);

?>


<head>
<title></title>
</head>

<body>

<?php

	foreach($array_productos as $elemento){
		
		echo "<table><tr><td>";
		echo $elemento['codigo'] . "</td><td>";
		echo $elemento['SECCION'] . "</td><td>";
		echo $elemento['NOMBRE'] . "</td><td>";
		echo $elemento['FECHA'] . "</td><td>";
		echo $elemento['PAIS'] . "</td><td>";
		echo $elemento['PRECIO'] . "</td><td></tr></table>";
		
		echo "<br>";
		echo "<br>";
		
	}



?>
</body>

