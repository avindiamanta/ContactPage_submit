$(document).ready(function(){
	$("#submit").click( function() {
 $.post( $(".forming-class").attr("action"),
         $(".forming-class").serializeArray(),
         function(info){ $("#result").html(info);
         				$("#result").slideDown("slow");
         				
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
  
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }	
         	
         	
   });
clearInput();
});
 
$(".forming-class").submit( function() {
  return false;
});
function clearInput() {
    $(".forming-class :input").each( function() {
       $(this).val('');
    });
}
	
})
