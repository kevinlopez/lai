<?php
	include('conexion.php');
	
	$pcantigua = $_POST['pcantigua'];
	$pcnueva = $_POST['pcnueva'];
	
	$sql = "UPDATE `registro` SET `numero_computadora`=$pcnueva WHERE numero_computadora=$pcantigua and fechasalida is null;";
	
	if(mysqli_query($conexion, $sql)){
		echo 'Se cambio de PC'.$pcantigua.' a PC'.$pcnueva. 'Exitosamente';
	}
?>