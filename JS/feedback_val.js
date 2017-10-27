function validateEmail() {
var emailvalid = document.getElementById("email");
var re = /^([-_.A-Za-z0-9]+)@([A-Za-z]+).(net|com|edu|my)$/i;

	
		if(!re.test(emailvalid.value)){
			 alert("Invalid Email");
			 return 0;
		}
}