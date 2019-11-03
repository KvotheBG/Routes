$('input[type=radio][name=fuel]').change(function() {
    filterByFuel(this.value);
});

function filterByFuel(fuel) {
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});
    $.ajax({
		url: 'get_fuel',
		type: 'POST',
		data: {
			'fuel': fuel
		},
		success: function (response) {
			$('#gas-st-content').html(response);
		},
		error: function(xhr){
			alert('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
		}
	});
}