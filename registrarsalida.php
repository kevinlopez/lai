<?php
	include('conexion.php');
	$num_computadora= $_POST['num_pc_salida'];

	
	$sql="UPDATE `registro` SET `fechasalida`=adddate(now(),interval -5 hour) WHERE numero_computadora=$num_computadora AND `fechasalida` is NULL;";
	
	
	mysqli_query($conexion, $sql);
		
	
  
?>