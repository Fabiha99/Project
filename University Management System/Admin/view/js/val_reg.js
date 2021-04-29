function getElement(id){
	return document.getElementById(id);
}

function validate(){
	var hasErr = false;
	var e_name = getElement("name");
	var e_uname = getElement("uname");
	var e_pass  = getElement("pass");
	var e_cpass = getElement("cpass");
	var e_email = getElement("email");
	
	var nameErr = getElement("nameErr");
	var unameErr = getElement("unameErr");
	var passErr  = getElement("passErr");
	var cpassErr = getElement("cpassErr");
	var emailErr = getElement("emailErr");

	//Full Name
	if(e_name.value == ""){
		hasErr= true;
		nameErr.innerHTML = "Full name Required";
		nameErr.style.color = "blue";
		e_name.focus();
		return !hasErr;
	}
	else {
			nameErr.innerHTML = "";
	}
	
	//Username
	if(e_uname.value == ""){
		hasErr= true;
		unameErr.innerHTML = "Username Required";
		unameErr.style.color = "blue";
		e_uname.focus();
		return !hasErr;
	}
	else {
			unameErr.innerHTML = "";
	}

	//Password
	if(e_pass.value == ""){
		hasErr= true;
		passErr.innerHTML = "Password Required";
		passErr.style.color = "blue";
		passErr.focus();
		return !hasErr;
	}
	else {
			passErr.innerHTML = "";
	}
	
	//Confirm Password
	if(e_cpass.value == ""){
		hasErr= true;
		cpassErr.innerHTML = "Confirm your Password";
		cpassErr.style.color = "blue";
		e_cpass.focus();
		return !hasErr;
	}
	else {
			cpassErr.innerHTML = "";
	}
	
	//Email
	if(e_email.value == ""){
		hasErr= true;
		emailErr.innerHTML = "Please give your email";
		emailErr.style.color = "blue";
		e_email.focus();
		return !hasErr;
	}
	else {
			emailErr.innerHTML = "";
	}

	return !hasErr;
	
}

function refresh(){
	var nameErr = getElement("nameErr");
	var unameErr = getElement("unameErr");
	var passErr  = getElement("passErr");
	var cpassErr = getElement("cpassErr");
	var emailErr = getElement("emailErr");
	
	
	nameErr.innerHTML = "";
	unameErr.innerHTML = "";
	passErr.innerHTML = "";
	cpassErr.innerHTML = "";
	emailErr.innerHTML = "";
	
}

function myFunction3() {
  document.getElementById("nameErr").style.visibility = "hidden";
  document.getElementById("unameErr").style.visibility = "hidden";
  document.getElementById("passErr").style.visibility = "hidden";
  document.getElementById("cpassErr").style.visibility = "hidden";
  document.getElementById("emailErr").style.visibility = "hidden";
}