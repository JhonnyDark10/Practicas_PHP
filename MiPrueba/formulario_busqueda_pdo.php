<style>
table{
	width:300px;
	margin.auto;
	backgroud-color:#FFC;
	border:2px solid #F00;
	padding: 5px;
}


td{
	
	text-align:center;
}
</style>


<body>



	<form action="pagina_busqueda_pdo.php" method="get">
	
	<table><tr><td>
	Sección</td><td> <input type="text" name="seccion"></td></tr>
	<tr><td>Pais </td><td><input type="text" name="p_orig"></td></tr>
	
	
	<tr><td colspan="2"> <input type="submit" name"enviando"  value="Dale!">
	
	</td></tr></table>
	</form>



<?php
//esto era para buscar por codigo un articulo
/*<form action="pagina_busqueda_pdo.php" method="get">
	
	<label>Buscar: <input type="text" name="buscar"></label>
	
	
	<input type="submit" name"enviando"  value="Dale!">
	
	</form>*/
?>

</body>