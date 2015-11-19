
 <?php
         include('conexion.php');
		         $i=1;
		         $registro = mysql_query("SELECT `numero_computadora`,`paterno_alumno`, TIMEDIFF( fechasalida, fechaentrada ) AS uso, `fechaentrada`, `fechasalida` FROM `registro` order by fechaentrada DESC LIMIT 25;"); 
		   echo'
		   <html>
		   <head>
		    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   		<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
		   <style>
		   #Exportar_a_Excel {font-size:12px; }
		   #Exportar_a_Excel th {background-color: #9BBB59; }
		   #Exportar_a_Excel tr:nth-child(odd) {background-color: DFDFDF;}

            #Exportar_a_Excel tr:nth-child(even) {background-color: white;}
            </style>
            <script language="javascript">
$(document).ready(function() {
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
});
</script>
		   </head>
		   <body>
		   ';

          
                
                echo' <table cellpadding="1" id="Exportar_a_Excel">
            <tr>
               <!-- <th width="2">N  </th>--!>
                <th width="2">PC</th>
                <th width="10">Nombre</th>
                <th width="2">Uso</th>
                <th width="50">Entrada</th>
                <th width="10">Salida</th>
            </tr>';
       
            
            while($registro2 = mysql_fetch_array($registro)){
                echo '<tr>
                        <!--<td>'.$i++.'</td>!-->
                        <td style="font-size:16px;text-align:right;">'.$registro2['numero_computadora'].'</td>
                        <td>'.$registro2['paterno_alumno'].'</td>
                        <td>'.$registro2['uso'].'</td>
                        <td>'.$registro2['fechaentrada'].'</td>
                        <td>'.$registro2['fechasalida'].'</td>
                    </tr>';       
            }
        
        echo '</table>
        <form action="ficheroExcel.php" method="post" target="_blank" id="FormularioExportacion">
<p>Exportar a Excel  <img src="http://www.jose-aguilar.com/scripts/jquery/Excel/export_to_excel.gif" class="botonExcel" /></p>
<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form> 
</body>
</html>

';
                
                
        ?>