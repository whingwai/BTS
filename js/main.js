$(document).on('pagecreate', '#login', function(){
	$('#submit').on('click', function(){

	
	
    var username= $('#username').val();
    var email= $('#email').val();
    var password= $('#password').val();

    var myData = 'username='+username+'&email='+email+'&password='+password;
	 			
				console.log(myData);
				
       if(username==""| email =="" | password==""){
	   
	   console.log('please insert all fields');
	   
	    
	   }else{
		   $.ajax({
  		  	 url:'api.php',
  			   type:"POST",
           dataType : 'text',
  			   data:myData,
        success: function(msg, status){
    				alert(msg);
        
                },
                 error:function(xhr, ajaxOptions, thrownError){
                    alert(xhr.status);
                    alert(thrownError);
                 }
            });}
});
	
	
	
	
	
	
	
})