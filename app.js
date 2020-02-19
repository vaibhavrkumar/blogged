function emailValidate() {
	var emailForm = document.getElementById("emailform").elements;
    var email = emailForm["emailid"];
    
    var result = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test();
    result.test(email);
    
	if (result != true) {
		alert('Invalid email');
	} else {
		alert('Success');
	}
}
