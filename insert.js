$('#myform4').submit(function(){
	return false;
});

$('#insert').click(function(){
	$.post(		
		$('#myform4').attr('action'),
		$('#myform4 :input').serializeArray(),
		function(result){
			$('#result').html(result);
			$("#pcnueva").val('');
			$("#pcantigua").val('');
		}
	);
 //$('body').load('index.php');
	
});
