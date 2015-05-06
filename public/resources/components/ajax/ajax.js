$(window).load(function () {
    $(document).ready(function(){
    	var Ajax = {
    		sendGetRequest:function(url, data, callback){
    			$.ajax({
					type: "GET",
					url: url,
					data: data,
					beforeSend: function( xhr ) {
					    
				  	}
				})
				.done(callback)
				.fail(function( jqXHR, textStatus ) {
				  console.log( "Request failed: " + textStatus );
				});	
    		},
    		sendPostRequest:function(url, data, callback){
				$.ajax({
					type: "POST",
					url: url,
					data: data,
					beforeSend: function( xhr ) {
					    
				  	}
				})
				.done(callback)
				.fail(function( jqXHR, textStatus ) {
				  console.log( "Request failed: " + textStatus );
				});			
    		}
    	}

    	window.Snp || (window.Snp = {});
	    Snp.Ajax = Ajax;
	});
});