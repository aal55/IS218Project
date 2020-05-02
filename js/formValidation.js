function loginValidation() {
    var pass = true;
    var emailCheck = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var message = "Warning: ";
    var email = document.getElementById("email");
    var password = document.getElementById("pwd");
    if(email.value === "") {
        message += "\nPlease enter your username.";
        email.style.borderColor = "red";
        pass = false;
    }
    if(password.value === "") {
        message += "\nPlease enter your password.";
        password.style.borderColor = "red";
        pass = false;
    }
    if(!email.value.match(emailCheck) && email.value !== "") {
        message += "\nPlease enter a valid email.";
        password.style.borderColor = "red";
        pass = false;
    }
    if(pass) {
        loginSubmission();
    }
    else {
        alert(message);
    }
}

function loginSubmission() {
    document.getElementById("login-form").submit();
}