$(document).ready(function() {
	/* ************************** Form Validation start ********************* */
	$("#my-reg-form").validate({
	  rules: {
	    name: {
	      required: true
	    },
	    fname: {
	      required: true
	    },
		dob: {
	      required: true
	    },
	    domicile:{
	    	required: true,
	    },
	    nationality:{
	    	required:true
	    },
	    cnic:{
	    	required:true
	    }
	  },
	   messages: {
     
            
		}
	});

	/* ************************** Form Validation End ********************* */
	/* ************************** CNIC Validation start ********************* */
	$(".validate_cnic").keypress(function(event) {
		var cnic_len= $(this).val().length;
		var cnic_val= $(this).val();
		if(cnic_len == 5 || cnic_len == 13 ){
			$(this).val( cnic_val + "-");
		}
		if(cnic_len > 14){
			return false;
		}
	});
	/* ************************** CNIC Validation END ********************* */	

			    $( "#time" ).datetimepicker({
				    	format: 'DD/MM/YYYY'
				});
});