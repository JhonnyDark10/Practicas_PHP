<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>

h1{
	text-align:center;
	color:#00F;
	border-bottom:dotted #0000FF;
	width:50%;
	margin:auto;
	
	
}

table{
	border:1px solid #F00;
	padding:20px 50px;
	margin-top:50px;
}

body{
	background-color:#rc9;
}

#boton{
	 padding-top:25px;
}


</style>
</head>

<body>
<h1>Alta de Artículos nuevos</h1>
<form name="form1" method="post" action="pagina_insertar_pdo.php">
  <table border="0" align="center">
    
	<tr>
      <td>Codigo Articulo</td>
      <td>
      <input type="text" name="codigo" id="codigo"></td>
    </tr>
    <tr>
      <td>Sección</td>
      <td>
      <input type="text" name="seccion" id="seccion"></td>
    </tr>
    <tr>
      <td>Nombre artículo</td>
      <td>
      <input type="text" name="n_art" id="n_art"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td>
      <input type="text" name="precio" id="precio"></td>
    </tr>
    <tr>
      <td>Fecha</td>
      <td>
      <input type="text" name="fecha" id="fecha"></td>
    </tr>
    <tr>
      <td>País de Origen</td>
      <td>
      <input type="text" name="p_orig" id="p_orig"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="enviar" id="enviar" value="Dale!"></td>
      
    </tr>
  </table>
</form>
</body>
</html>