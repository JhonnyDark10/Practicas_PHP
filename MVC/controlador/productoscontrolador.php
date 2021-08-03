<?php

	require_once("modelo/productosmodelo.php");
	
	
	$producto=new Productos_modelo();
	
	$matrizProductos=$producto->get_productos();

	require_once("vista/productosview.php");





?>