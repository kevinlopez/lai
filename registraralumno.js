$('#nuevoalumnoform').submit(function(){
	return false;
});

$('#botonregistraralumno').click(function(){
	$.post(		
		$('#nuevoalumnoform').attr('action'),
		$('#nuevoalumnoform :input').serializeArray(),
		function(result){
			$('#pregistraralumno').html(result);
			$("#nombrealumnoinput").val('');
		}
	);
});