<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	 if(isset($_POST["enviando"])){
	 
	 $edad=$_POST["edad_usuario"];
	 
	/* if($edad<=18){
		 
		 echo "eres menor de edad";
	 }else if($edad<=40){
		 echo "eres joven";
	 }else if($edad<=65){
		 echo "eres maduro";
	 }else{
		 echo "cuidate";
	 } 
    }*/
	
	echo $edad<18 ? "eres menor de edad no puedes acceder" : "puedes acceder";
}
?>