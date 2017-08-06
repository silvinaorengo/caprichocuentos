<?php
//conexion a base de datos
if($link = mysqli_connect("localhost","root","","base_capricho"))
{
	//echo "se conecto";
	$consulta1="SELECT * FROM lugares";
	$respuesta = mysqli_query($link,$consulta1);	
	
	$matriz = array();
	
	while($obj = mysqli_fetch_object($respuesta))
	{
		$matriz[]= array(
		'idlugar'=>utf8_encode($obj->id_lugar),
		'txtlugar'=>utf8_encode($obj->txt_lugar)
			
		);		
		}	
	echo json_encode($matriz);
	
}
else
{
	echo "No se conecto";
}
?>