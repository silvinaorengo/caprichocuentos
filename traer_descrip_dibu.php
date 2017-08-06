<?php
//conexion a base de datos
if($link = mysqli_connect("localhost","root","","base_capricho"))
{
	//echo "se conecto";
	$consulta1="SELECT * FROM dibus";
	$respuesta = mysqli_query($link,$consulta1);	
	
	$matriz = array();
	
	while($obj = mysqli_fetch_object($respuesta))
	{
		$matriz[]= array(
		'iddibu'=>utf8_encode($obj->id_dibu),
		'descripdibu'=>utf8_encode($obj->descrip_dibu)	
		);		
		}	
	echo json_encode($matriz);
	
}
else
{
	echo "No se conecto";
}
?>