<?php
	include('conexion.php');
	$alumnonuevo= $_POST['nombrealumnoinput'];

	
	$sql="INSERT INTO alumno(paterno) VALUES ('$alumnonuevo');";
	
	
	if(mysqli_query($conexion, $sql)){
		echo 'Se REGISTRO Exitosamente';
	}
		
	
  
?>