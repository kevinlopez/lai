
        var arreglo = [false, false, false, false, false, false, false, false, false, false, false, false,  
			      false, false, false, false, false, false, false, false, false, false, false, false];
	       	$(document).ready(function(){ 	
				$( "#paterno" ).autocomplete({
      				source: "buscaralumno.php",
      				minLength: 1
    			});
    			
    			$("#paterno").keydown(function(){
    				$.ajax({
    					url:'alumno.php',
    					type:'POST',
    					dataType:'json',
    					data:{ paterno:$('#paterno').val()}
    				}).done(function(respuesta){
    				//	$("#materno").val(respuesta.materno);
    				//	$("#nombre").val(respuesta.nombre);
    				});
    			});   
    			
    			
    			
    			
			});
			 
			
	function myFunction(elmnt,num) {
		var pc=num-1;
		
	if ($('input:text[name=paterno]').val()=='' && arreglo[pc]==true)
		{
			elmnt.style.background='red';   //pintamos de rojo
			arreglo[pc]=false;              // y lo desocupamos 
			var estadopc=1;
			console.log('if');
	
		    $(document).ready(function()
	        {$("#num_pc_salida").val(num);

            $('#myform2').submit(function(){
            	return false;
	
            });


	    $.post(		
		$('#myform2').attr('action'),
		$('#myform2 :input').serializeArray(),
		function(result){
			$('#result').html(result);
			
		}
	);



	
});
		
			
			
			
		}
	
    else if(arreglo[pc]==false &&  $('input:text[name=paterno]').val()!=''){								//esta ocupado???????    NO, entonces
    															//restamos 1 porque el indice empieza en cero y las pcs en 1
    elmnt.style.background='green'; 							//pintamos de verde
    arreglo[pc]=true;           								 // y lo ocupamos
    console.log('elseif');
    $(document).ready(function()
	{
	var nom=$('input:text[name=paterno]').val();//variable NOM ahora tendra el nombre del alumno ingresa en el input
												//limpiamos en input "paterno"
	$("#paterno").val('');						//mandamos el foco a la caja de texto vacia
	var estadopc=1;								//estado de pc lo ponemos en ocupado
	$("#nombre_alumno").val(nom);	
	$("#numero_pc").val(num);
//	$("#fecha_entrada").val(new Date);
//	$("#fecha_salida").val(null);
//	$( "paterno").focus();
	
$('#myform').submit(function(){
	return false;
});


	$.post(		
		$('#myform').attr('action'),
		$('#myform :input').serializeArray(),
		function(result){
			$('#result').html(result);
		}
	);



	
});
	
//	$('index.php').load('#outer2');
	}
	
	else{							//esta ocupado????????     SI, entonces
	
	alert('ingrese nombre de alumno');
	}

   // $('#outer2').load('index.php div#outer2');

   // $('#outer2').css('background-color','black');
}


if(navigator.userAgent.match(/Android/i)){
    window.scrollTo(0,1);
 }
 