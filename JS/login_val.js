function validate() 
{
	if(validateU() == true && validatePW() == true)
	{
		return true;
	}
	else 
	{
		return false;
	}
}	

function validateU()
{
	var u = document.forms["login_form"]["name"].value;
	var check = /^[a-zA-Z0-9]*$/.test(u);
	
	if(u == "")
	{
		alert("Missing username.");
		return false;
	}
	else if ( u.length < 6 || u.length > 12)
	{
		alert("Username should contain 6 - 12 characters only.");
		return false;
	}
	else if(!check)
	{
		 alert("Invalid password. Please use alphabets and numbers only.");
		 return false;
	}
	else
	{
		return true;
	}
}	
	
function validatePW()
{
	var pw = document.forms["login_form"]["password"].value;
	var check = /^[a-zA-Z0-9]*$/.test(pw);
	
	if(pw == "")
	{
		alert("Missing password.");
		return false;
	}
	else if ( pw.length < 6 || pw.length > 12)
	{
		alert("Password should contain 6 - 12 characters only.");
		return false;
	}
	else if(!check)
	{
		alert("Invalid password. Please use alphabets and numbers only.");
		return false;
	}
	else
	{
		return true;
	}
}