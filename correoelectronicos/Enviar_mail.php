<?php



	$texto_mail=$_POST["comentario"];
	
	$destinatario=$_POST["email"];
	
	
	$asunto=$_POST["asunto"];


	$headers="MIME-Version: 1.0\r\n";
	
	$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
	
	$headers.="From: Prueba Jhonny < flores_dark10@outlook.es >\r\n";

	$exito=mail($destinatario,$asunto,$texto_mail,$headers);

	if($exito){
		
		echo "mensaje enviado con exito";
	}else{
		
		echo "error";
	}






?>