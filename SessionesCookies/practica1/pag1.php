<html>

<head>

</head>

<body>


<?php

  if(isset($_COOKIE["idioma_seleccionado"])){
	  
	 if($_COOKIE["idioma_seleccionado"]=="es"){
		  
		  header("Location:espanol.php");
	  }else if($_COOKIE["idioma_seleccionado"]=="en"){
		   header("Location:ingles.php");
	  }
	  
  }

?>

	<table width="25%" border="0" align="center">
		<tr>
			<td colspan="2" align="center"><h1>Elige idioma</h1></td>
		</tr>

		<tr>
			<td align="center"><a href="creaCookies.php?idioma=es"><img src="img/espana.png" width="90" height="60"></a></td>
			<td align="center"><a href="creaCookies.php?idioma=en"><img src="img/ingles.png" width="90" height="60"></a></td>
		</tr>


	</table>

<p>&nbsp;</p>
<p>&nbsp;</p>
</body>



</html>