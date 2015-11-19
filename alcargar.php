
 <?php
          include('conexion.php');
		        $i=0;
            $registro = mysql_query("SELECT numero_computadora FROM registro WHERE fechasalida IS NULL"); 
            while($registro2 = mysql_fetch_array($registro)){
            	echo '<input type="text" style="color:white;width:0px; height:0px;" id="'.$registro2['numero_computadora'].'" value="'.$registro2['numero_computadora'].'"/>';
             //  echo "<input type='text'  id='pc".$i.' value='.$registro2['numero_computadora'].'/>' 
             
                }
                
        ?>