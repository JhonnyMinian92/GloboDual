<?php

require "../conexion/conect.php";

$servidor = new SoapServer(null, array("uri"=>""));

$servidor-> addFunction("CargaDatos");

$servidor->handle();

function CargaDatos($variable){

	$query = "SELECT * FROM socio WHERE ced_socio = '$variable'";
	$consulta = mysqli_query($conexion, $query);
	$array = mysqli_fetch_array($consulta);
	return $array;
	
	}

?>