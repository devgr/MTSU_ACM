/* This function checks the validity of passwords.  Since we are */
/* CS students and not script-kiddie newb wannabe casuals, we    */
/* can respect the importance of having secure passwords. A pass */
/* is valid if it contains 1 upper case character, 1 lower case  */
/* character, 1 integer, and is 8 characters long.               */
function checkpass(passvar){
	var valid = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

	if (passvar.value.match(valid)){
		passvar.setCustomValidity('');
	}
	else{
		passvar.setCustomValidity("Passwords must be at least eight characters long, contain one number, and contain one uppercase and lowercase character.");
	}
}

/* This function checks the confirm password field against the   */
/* initial password field.  If they match, the field can be      */
/* considered valid.                                             */
function confirmpass(passvar){
	var email1 = document.getElementById("password").value;
	var email2 = document.getElementById("confirmpassword").value;

	if (email1 == email2){
		passvar.setCustomValidity('');
	}
	else{
		passvar.setCustomValidity("Passwords do not match");
	}
}

/* This function checks the confirm email field against the      */
/* initial email field.  If they match, the field can be         */
/* considered valid.                                             */
function confirmemail(mailvar){
	var firstEmail = document.getElementById("email").value;
	var secondEmail = mailvar.value;

	if (firstEmail == secondEmail){
		mailvar.setCustomValidity('');
	}
	else{
		mailvar.setCustomValidity("Email does not match");
	}
}

/* This function checks the validity of the email provided by the*/
/* the user.  I googled searched the regex.  If you believe you  */
/* have better regex, or wish to change the regex to match only  */
/* mtmail emails, feel free to change it, but please make sure   */
/* you check your work before submitting your final copy to for  */
/* production.                                                   */
function checkemail(mailvar){
	var theEM = mailvar.value;

	if(/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(theEM)){
		mailvar.setCustomValidity('');
	}
	else{
		mailvar.setCustomValidity("Invalid Email");
	}
}