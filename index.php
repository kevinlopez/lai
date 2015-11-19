<html>
	<meta name=viewport content="width=device-width">
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="192x192" href="logo.png">
    <head>
    	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script language="javascript" src="js/jquery-1.2.6.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
   		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
   		<script src="myscript.js"></script>
   		<link href="css/jqueryui.css" type="text/css" rel="stylesheet"/>
   		<link href="css/miestilo.css" type="text/css" rel="stylesheet"/>
        
                    
    </head>
    <body>
    		 <!-- <div id="header">
			<div class="content">
			</div>
			</div> -->

		<div id="wrapper">
			<div id="outer1">
				<div class="content">
					  <form>
       		<label for="paterno"></label>
	    	<input type="text" id="paterno" name="paterno" value="" size="36" autofocus onFocus="this.value=''" style="text-transform:uppercase;height:40px;" onkeyup="javascript:this.value=this.value.toUpperCase();" />
	    	
		    
    		
		</form>
		<table id="tablacomputadoras">
		        <tr><td><button id="btnActualizar" onclick="document.location.reload();" style="">F5   </button></td><td>&nbsp;</td><td><button id="button8" onclick="myFunction(this,8)">08</button></td><td><button id="button17" onclick="myFunction(this,17)">17</button></td><td>&nbsp;</td><td><button id="button18" onclick="myFunction(this,18)">18</button></td></tr>
		        <tr><td><button id="button6" onclick="myFunction(this,6)">06</button></td><td>&nbsp;</td><td><button id="button9" onclick="myFunction(this,9)">09</button></td><td><button id="button16" onclick="myFunction(this,16)">16</button></td><td>&nbsp;</td><td><button id="button19" onclick="myFunction(this,19)">19</button></td></tr>
		        <tr><td><button id="button5" onclick="myFunction(this,5)">05</button></td><td>&nbsp;</td><td><button id="button10" onclick="myFunction(this,10)">10</button></td><td><button id="button15" onclick="myFunction(this,15)">15</button></td><td>&nbsp;</td><td><button id="button20" onclick="myFunction(this,20)">20</button></td></tr>
		        <tr><td><button id="button4" onclick="myFunction(this,4)">04</button></td><td>&nbsp;</td><td><button id="button11" onclick="myFunction(this,11)">11</button></td><td><button id="button14" onclick="myFunction(this,14)">14</button></td><td>&nbsp;</td><td><button id="button21" onclick="myFunction(this,21)">21</button></td></tr>
		        <tr><td><button id="button3" onclick="myFunction(this,3)">03</button></td><td>&nbsp;</td><td><button id="button12" onclick="myFunction(this,12)">12</button></td><td><button id="button13" onclick="myFunction(this,13)">13</button></td><td>&nbsp;</td><td><button id="button22" onclick="myFunction(this,22)">22</button></td></tr>
		        
		        <tr><td style="padding-top:15px;"><button id="button2" onclick="myFunction(this,2)" >02</button></td>
		        	
		        	<td  colspan="4" rowspan="3"></td>
		        	
		        	<td style="padding-top:15px;"><button id="button23" onclick="myFunction(this,23)">23</button></td>
		        </tr>
		        <tr><td><button id="button1" onclick="myFunction(this,1)">01</button></td><td><button id="button24" onclick="myFunction(this,24)">24</button></td></tr>
		       
		    
		</table><br>
		<h1>INSTRUCCIONES</h1>
		<p>*Introduzca Apellidos y Nombres del Alumno<br>
		*Si existe, se autocompletara automaticamente<br>
		*Elija una PC a ocupar<br>
		*Si no existe el Alumno, registrelo (columna derecha)<br>
		*Si alumno se cambio de PC, cambielo (columna derecha)<br>
		*Cuando el Alumno se retire, clickee en la PC que ocupo</p>
		
		  <form  action='insert.php' method='post' id='myform'>
			<input type='text' name='nombre_alumno' id='nombre_alumno' style="color:white;width:0px; height:0px;"/>
			<input type='text' name='numero_pc' id='numero_pc' style="color:white;width:0px; height:0px;"/>
		</form>
		
		<form  action='registrarsalida.php' method='post' id='myform2'>
			<input type='text' name='num_pc_salida' id='num_pc_salida' style="color:white;width:0px; height:0px;"/>
		</form>
		<button style="width:40%">DISPONIBLE</button>
		<button style="background-color:green;width:40%">OCUPADO</button>
    
    
    
    
    <?php
           $conexion = mysql_connect('localhost', 'kevinlopez', '');
			mysql_select_db('matriculaautocompletar', $conexion);
		$i=0;
	
            $registro = mysql_query("SELECT numero_computadora FROM registro WHERE fechasalida IS NULL"); 
            while($registro2 = mysql_fetch_array($registro)){
            //	echo '<input type="text" style="color:white;width:0px; height:0px;" id="'.$registro2['numero_computadora'].'" value="'.$registro2['numero_computadora'].'"/>';
             echo '<script language="javascript"> 
             		document.getElementById("button'.$registro2['numero_computadora'].'").style.backgroundColor = "green";
             		arreglo['.$registro2['numero_computadora'].'-1]=true;
             </script>';
                }
                
        ?>
				</div> <!-- end content -->
			</div>


			<div id="outer2">
				<div class="content">
					 <?php 
             include'historial.php';
             ?>
				</div> <!-- end content -->
			</div> <!-- end outer2 -->
			

			<div id="outer3">
				<div class="content">
					<i><h1>CAMBIAR DE PC</h1></i>
							<form action='registrar.php' method='post' id='myform4'>
			<p>
				<input type='text' name='pcantigua' placeholder='PC origen' id='pcantigua'  size="5"/>
			</p>
			
			<p>
				<input type='text' name='pcnueva' placeholder='PC destino' id='pcnueva' size="5"/>
			</p>
			
			<button id='insert'>OK</button><button id="btnActualizar" onclick="document.location.reload();" >F5</button>
			<p id='result'></p>
			
			<script src='insert.js'></script>
		</form>
		
		
			<i><h1>REGISTRAR ALUMNO</h1></i>
		<form action='registraralumno.php' method='post' id='nuevoalumnoform'>
			<p>
				<input type='text' name='nombrealumnoinput' placeholder='Apellidos y Nombres' id='nombrealumnoinput'  size="35" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" />
			</p>
			
			<button id='botonregistraralumno' >OK</button>
			
			<p id='pregistraralumno'></p>
			
			<script src='registraralumno.js'></script>
		</form>
		
		<i><h1>REPORTE DE ALUMNOS POR DIA</h1></i>
			<form action='reporteuso.php' method='post' id='form_reporteuso'>
				<input type="date" name="fecha" id="fecha">
			<input type="submit" value="Consultar"></button>
			</form>
			
		
		
		
				</div> <!-- end content -->
			</div> <!-- end outer2 -->


		</div><!-- end #wrapper -->

		<div id="footer">
			<div class="content">
			
			</div>
		</div> <!-- end footer -->


    </body>
</html>
