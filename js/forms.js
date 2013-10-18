// JavaScript Document
function validate (form) {
	
	$elements = form.find('*[required]').filter(function (index) {
			
			return  $(this).val().length < 1;
			
		});	
	
	
	if ($elements.length > 0 ) {
			
		alert('es necesario completar los siguientes campos');
		
		$elements.addClass('error');
		
		alert($elements);
		
		// obtener los input file ...
		return false;	
	
	} else {
		
		
		return true;
	}
}



function clear (form) {
	
	
	$elements = form.find('input[type=text],input[type=date],input[type=tel],input[type=number],input[type=email],input[type=checkbox],textarea');
	
	$elements.each(function () {
		
			$(this).val('')
				   .prop('checked',false);
				
	});	
	
}


function disable (form) {
	
	$elements = form.find('input,textarea,select');
	
	$elements.each(function () {
		
			
			$(this).prop('disabled', true);
				
	});
	
}

function enable (form) {
	
	$elements = form.find('input,textarea,select');
	
	$elements.each(function () {
		
			
			$(this).prop('disabled', false);
				
	});
	
}