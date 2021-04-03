<?php

require "../conexion/conect.php";

$uss = $_POST['username'];
$contra = $_POST['pass'];

$query = "SELECT * FROM usuarios WHERE nom_user = '".$uss."' AND clav_user='".$contra."'";

$consulta = mysqli_query($conexion, $query);
if ($array = mysqli_fetch_array($consulta)){ 
	header("Location: ../paginas/principal.php");
}
else
{
	echo "Usuario o Clave Incorrecta";
}


?>