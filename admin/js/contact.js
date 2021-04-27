$("#register").click(function(){
var Contact = $("#Contact").val();
var numbers = /^[0-9]+$/;  

if(Contact.value.match(numbers))  
{  
return true;  
}  
else  
{  
alert('Contact code must have numeric characters only');  
Contact.focus();  
return false;  
}  
}  