$(document).ready(function(){

$("#register").click(function(){

	var Firstname = $("#Firstname").val();
	var Middlename = $("#Middlename").val();
	var Lastname = $("#Lastname").val();
	var Contact = $("#Contact").val();
	var Address = $("#Address").val();
	var Username = $("#Username").val();
	var MyPassword = $("#Password").val();
	var CPassword = $("#CPassword").val();
	var Email = $("#Email").val();
	var numbers = /^\(?([0]{1})\)?[-. ]?([9]{1})[-. ]?([0-9]{2})[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
	
	
	
	if( Firstname =='' ||  Middlename=='' || Lastname =='' || Contact =='' || Address =='' || Username =='' || MyPassword =='' || CPassword =='' ||  Email =='')
		{
		  alert("Please fill all fields...!!!!!!");
		}	
	else if((MyPassword.length)<8)
		{
			alert("Password should atleast 8 character in length.!");
		}
		
	else if(!(MyPassword).match(CPassword))
		{
			alert("Your passwords don't match. Try again?");
		} 
	else if(!(Contact).match(numbers))
		{
			alert('Enter a valid phone number');
		}
	else if((Username.length)<4)
		{
			alert("Username should atleast 4 character in length.!");
		}
	else 
	   {
	     $.post("regis.php",{ Firstname: Firstname, Middlename: Middlename, Lastname: Lastname, Contact: Contact, Address: Address, Username:Username, MyPassword: MyPassword, CPassword: CPassword, Email: Email },
		  function(data) {
		   if(data=='You have Successfully Registered.....')
		   {
			$("form")[0].reset();
		   }
		   alert(data);
		});
	   }
	
	});

});
