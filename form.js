$(function() {
    $("#registered").hide();
    $( "form" ).submit(function( event ) {
        event.preventDefault();
        
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            cache: false,
            dataType: "html",
            data: $(this).serialize(),
            async: true,
            processData: false,
            
            success: function(result){
                if  ( "#response" != "" && "#response" != undefined ){  
                    $("#response").html(result); 
                }
                if (result==""){
                    $("#regform").hide();
                    $("#registered").show();
                }
            },
            error: function(jqXHR, textStatus, errorThrown){
                var Result = jqXHR.getAllResponseHeaders()+"<hr>"+textStatus+"<hr>"+errorThrown;
                if( "#response" != "" && "#response" != undefined ){ 
                    $("#response").html(Result); 
                }
		    }
          });
      });
});