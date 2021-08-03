
<html>

<head>

</head>


<body>

	<?php
	
	  if(!$_COOKIE["idioma"]){
		  
		 header("Location:pag1.php"); 
		  
	  }else if($_COOKIE["idioma_seleccionado"]=="es"){
		  
		  header("Location:espanol.php");
	  }else if($_COOKIE["idioma_seleccionado"]=="en"){
		   header("Location:ingles.php");
	  }
	
	
	?>

</body>



</html>