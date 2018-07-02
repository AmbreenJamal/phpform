$(document).ready(function(){
 $('#user_form').on('submit', function(event){
  event.preventDefault();
  
   var form_data = $(this).serialize();
     alert(form_data);
   $.ajax({
    url:"saveData.php",
    method:"POST",
    data:form_data,
    dataType:"json",
    success:function(response)
    {
	   if (response.success) {
            console.log('Success!');
            console.log(response.data);
        } else {
            console.log('Failure!');
            console.log(response.error);
        }
     /*$('#like_form')[0].reset();
      var error_msg ='';
       if(data[0].msg)
       error_msg =  "Data submit successfully";
       else
     error_msg =  "There is a problem in query";
$("#error_msg").fadeIn().html(error_msg);
setTimeout(function(){     $("#error_msg").fadeOut('slow') }, 2000);*/
    }
   });
 });
});