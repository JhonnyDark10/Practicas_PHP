<html>

<head>
<style>

td{
	border:1px dotted #FF0000;
}

</style>

</head>


<body>

<table>

<tr><td>nombre del articulo </td>

<?php

	foreach($matrizProductos as $registro){
		
		echo "<tr><td>" . $registro["NOMBRE"] . "</td></tr>";
	}


?>

</table>
</body>



</html>