<?php

$receptar = $_REQUEST["variable"];

$cliente = new SoapClient(null, array("location"=>"http://localhost/GloboDual/paginas/SoapServer.php","uri"=>"http://localhost/GloboDual/paginas/SoapServer.php"));

$variable = $cliente->__soapCall("CargaDatos", array($receptar));

echo json_decode($variable);

?>