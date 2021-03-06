// refer at http://api.jquery.com/jquery.ajax/
/*
function ajaxSubmit(){
    var tmpDate = $("#ntc_abandon_date").val();
    var tmpCallerid = $("#ntc_callerid").val();
    var tmpSubmit = $("#submit").val();
	
	//$('#position_that_you_show').html('Dang xu ly ...');

	if(tmpCallerid=='') {
		alert("Please fill out the form");
	} else {
		$.ajax({
		method: "POST",
		url: "ajax_mjn_abandon_test.php",
		data: { tmpDate1: tmpDate, tmpCallerid1: tmpCallerid, tmpSubmit1: tmpSubmit },
		})
		.done(function( msg ) {
			$('#position_that_you_show').html(msg);
		});			
	}
}
*/

// used in : mjn_abandon.php when user click button submit
function ajaxSubmit(){
	var valid;
	valid = validateAbandonForm();	

	if(valid) {
	    var tmpDate = $("#ntc_abandon_date").val();
	    var tmpCallerid = $("#ntc_callerid").val();
	    var tmpSubmit = $("#submit").val();

	    $('#position_that_show_process').html('Processing ...');

		$.ajax({
		method: "POST",
		url: "ajax_mjn_abandon_test.php",
		data: { tmpDate1: tmpDate, tmpCallerid1: tmpCallerid, tmpSubmit1: tmpSubmit },
		})
		.done(function( msg ) {			
			$('#position_that_you_show').html(msg);
			$('#position_that_show_process').html('');
		});			
	}
}

// used in mjn_abandon.php : check input value
function validateAbandonForm() {
	var valid = true;
	$("#ntc_callerid").css('border-color','');

	if(!$("#ntc_callerid").val()) {
		//$("#ntc_callerid").css('border-color','red');
		$("#ntc_callerid").addClass("selected");
		alert("Please fill out Callerid");
		valid = false;
	} else {
		if(!$("#ntc_callerid").val().match(/[0-9 -()+]+$/) | !$("#ntc_callerid").val().match(/^[0-9]{8,11}$/)) {
			$("#ntc_callerid").css('border-color','red');
			alert("Callerid required is a number and 8->11");
			valid = false;
		}
	}

	return valid;
}