<html>
<style>

h1{
	text-align:center;
}

table{
	
	width:25%;
	background-color:#FFC;
	border: 2pxdotted #F00;
	margin:auto;
	.izq{
		text-align:right;
	}
	.der{
		text-align:left;
	}
	td{
		text-align:center;
		padding:10px;
	}
}

</style>




<head>

</head>


<body>
<h1> INTRODUCE TUS DATOS </h1>

<form action="comprueba_usuario.php" method="post">

<table>
<tr>
<td class="izq">Login:</td>
<td class="der"><input type="text" name="login"></td></tr>
<tr><td class="izq">Password:</td><td class="der"><input type="password" name="password"></td></tr>
<tr><td colspan="2"><input type="submit" name="enviar" value"LOGIN"></td></tr></table>

</body>




</html>