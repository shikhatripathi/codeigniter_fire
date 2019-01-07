$(document).ready(function(){

	$('#btn_submit').click(function(){
		var data = $('#auth_form').serializeArray();
		console.log(base_url);

		
		$.ajax({
            type:'POST',
            url:base_url+'auth/submit',
            data:JSON.stringify(data),
            dataType:'json', 
           
        })
        .done(function( json ) { 
    		
    		
           
        })
        .fail(function( xhr, status, errorThrown ) {
          
          alert( "Sorry, there was a problem!" );
          console.log( "Error: " + errorThrown );
          console.log( "Status: " + status );
          console.dir( xhr );
        });
        
	});// end of button click
});