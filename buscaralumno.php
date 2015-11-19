<?php

include('conexion.php');
$paterno = $_GET['term'];
$consulta = "select  paterno FROM alumno WHERE paterno LIKE '$paterno%'";

$result = $conexion->query($consulta);

if($result->num_rows > 0){
	while($fila = $result->fetch_array()){
		//$paternos[] = $fila['paterno'].' '.$fila['materno'].' '.$fila['nombre'];
		$paternos[] = $fila['paterno'];
	}
	
	echo json_encode($paternos);
}

?>