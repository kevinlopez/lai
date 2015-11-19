<?php
	
include('conexion.php');
	$paterno = $_POST['paterno'];
	$consulta = "select  paterno FROM alumno WHERE paterno = '$paterno'";

	$result = $conexion->query($consulta);
	
	$respuesta = new stdClass();
	if($result->num_rows > 0){
		$fila = $result->fetch_array();
		//$respuesta->paterno = $fila['paterno'];	
		//$respuesta->nombre = $fila['nombre'];
			
	}
	echo json_encode($respuesta);

?>