/* Datepicker
 * input[type=date] fallback
 *
 * using jQuery UI Datepicker
 */
var initDatepicker = function() {
	$('input[type=date]').each(function() {
		var $input = $(this);
		$input.datepicker({
			minDate: $input.attr('min'),
			maxDate: $input.attr('max'),
			dateFormat: 'yy-mm-dd'
		});
	});
};


if(!Modernizr.inputtypes.date){
	$(document).ready(initDatepicker);
};



$elements = $(this).find('*[required]').filter(function (index) {
	return  $(this).val().length < 1;
});