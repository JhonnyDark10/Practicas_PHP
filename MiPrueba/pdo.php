<html>

<head>



</head>


<body>

	<?php
	
		try{

			$base= new PDO('mysql:host=localhost; dbname=usuarios','root','');
		
			echo 'Conexión OK';
		}catch(Exception $e){
			
			die('Error: ' . $e->GetMessage()); 
		}finally{
			
			$base=null;
		}
		
		
	?>

</body>


</html>