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

function ajaxSubmit(){
	var valid;
	valid = validateAbandonForm();	

	if(valid) {
	    var tmpDate = $("#ntc_abandon_date").val();
	    var tmpCallerid = $("#ntc_callerid").val();
	    var tmpSubmit = $("#submit").val();

	    $('#position_that_you_show').html('Dang xu ly ...');

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

function validateAbandonForm() {
	var valid = true;
	$("#ntc_callerid").css('border-color','');

	if(!$("#ntc_callerid").val()) {
		$("#ntc_callerid").css('border-color','red');
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


// for bootstrap datepicker
var page = {bootstrap:3};
function swap_bs(){
  var bscss = $('#bs-css'),
      bsdpcss = $('#bsdp-css');
  if (page.bootstrap == 3){
    bscss.prop('href', 'bootstrap-datepicker/css/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css');
    bsdpcss.prop('href', 'bootstrap-datepicker/css/datepicker.css');
    page.bootstrap = 2;
    $(page).trigger('change:bootstrap', 2)
  }
  else{
    bscss.prop('href', 'css/bootstrap.min.css');
    bsdpcss.prop('href', 'bootstrap-datepicker/css/datepicker3.css');
    page.bootstrap = 3;
    $(page).trigger('change:bootstrap', 3)
  }
}