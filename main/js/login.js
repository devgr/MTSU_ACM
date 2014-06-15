function checkpass(passvar){
	var valid = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

	if (passvar.value.match(valid)){
		passvar.setCustomValidity('');
	}
	else{
		passvar.setCustomValidity("Passwords must be at least eight characters long, contain one number, and contain one uppercase and lowercase character.");
	}
}

function checkemail(mailvar){
	var theEM = mailvar.value;

	if(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(theEM)){
		mailvar.setCustomValidity('');
	}
	else{
		mailvar.setCustomValidity("Invalid Email");
	}
}