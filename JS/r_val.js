function validate_all()
{
	if ( validateName()==true && validateIC()==true && validateG()==true && validateM()==true && validateHome()==true && validateMail()==true && validatePhone()==true && validateE()==true && validateU()==true && validatePW()==true )
	{
		return true;
	}
	else
	{
		return false;
	}
}

function validateName()
{	
	var n = document.forms["reg"]["name"].value;
    var check = /^[A-Za-z\s]+$/.test(n);
					
	if (n == "") 
	{
		alert("Missing name.");
		return false;
	}
	else if (!check)
	{
		alert("Name can only contain alphabets.");
		return false;
	}
	else 
	{
		return true;
	}		
}

function validateIC()
{
	var icnumber = document.forms["reg"]["IC"].value;	
	var check = /^[0-9]*$/.test(icnumber);
	
	if (icnumber.length != 12) 
	{
		alert("IC must contain 12 digits.");
		return false;
	}
	else if(!check)
	{
		alert("IC can only contain digits.");
		return false;
	}
	else 
	{
		return true;
	}		
}

function validateG() 
{
	var g = document.forms["reg"]["gender"].value;
	
	switch(g)
	{
		case 'M':
		case 'F':
		{
			return true;
		}
			
		default:
		{	
			alert("Please choose gender.");
			return false;
		}
			
	}
}

function validateM() 
{
	var g = document.forms["reg"]["status"].value;
	
	switch(g)
	{
		case 'Married':
		case 'Engaged':
		case 'Single':
		{
			return true;
		}
			
		default:
		{	
			alert("Please choose marital status.");
			return false;
		}
			
	}
}

function validateHome()
{
	var home = document.forms["reg"]["address"].value;
	var check = /^[A-Za-z0-9\,\-\.\/\(\) ]+$/.test(home);
	
	if (home == "")
	{
		alert("Missing home address.");
		return false;
	}
	else if (!check)
	{
		alert("Invalid home address.");
		return false;
	}
	else
	{
		return true;
	}	
}

function validateMail()
{
	var mail = document.forms["reg"]["mail"].value;
	var check = /^[A-Za-z0-9\,\-\.\/\(\) ]+$/.test(mail);
	
	if (mail == "")
	{
		alert("Missing mail address.");
		return false;
	}
	else if (!check)
	{
		alert("Invalid mail address.");
		return false;
	}
	else
	{
		return true;
	}	
}

function validatePhone()
{
	var p = document.forms["reg"]["phone"].value;
	var check = /\d/g.test(p);
		
	if(p == "")
	{
		alert("Missing phone number.");
		return false;
	}
	else if (!check) 
	{
		alert("Phone number should contain digits only.");
		return false;
	}
	else 
	{
		return true;
	}
}
		
function validateE()
{
	var e = document.forms["reg"]["email"].value;
	var check = /^([-_.A-Za-z0-9]+)@([A-Za-z]+).(net|com|edu|my)$/g.test(e);

	if(e == "")
	{
		alert("Missing email.");
		return false;
	}
	else if(!check)
	{
		alert("Invalid Email");
		return false;
	}
	else
	{
		return true;
	}
}

function validateU()
{
	var u = document.forms["reg"]["username"].value;
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
	var pw = document.forms["reg"]["password"].value;
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