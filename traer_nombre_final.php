<?php
//conexion a base de datos
if($link = mysqli_connect("localhost","root","","base_capricho"))
{
	//echo "se conecto";
	$consulta1="SELECT * FROM finales";
	$respuesta = mysqli_query($link,$consulta1);	
	
	$matriz = array();
	
	while($obj = mysqli_fetch_object($respuesta))
	{
		$matriz[]= array(
		'idfinal'=>utf8_encode($obj->id_final),
		'nombrefinal'=>utf8_encode($obj->tipo_final)
			
		);
		}	
	echo json_encode($matriz);
	
}
else
{
	echo "No se conecto";
}
?>