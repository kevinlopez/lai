<?php
include('conexion.php');

	$nombre_alumno = $_POST['nombre_alumno'];
	$numero_pc = $_POST['numero_pc'];
	
	$sql="INSERT INTO  `matriculaautocompletar`.`registro` (
 `id` ,
 `paterno_alumno` ,
 `numero_computadora` ,
 `fechaentrada` ,
 `fechasalida`
)
VALUES (
NULL ,
'$nombre_alumno',
$numero_pc, ADDDATE( NOW( ) , INTERVAL -5 HOUR ) 
, NULL
)";
	
	
	mysqli_query($conexion, $sql);
		
	
  
?>