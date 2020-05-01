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

function signUpValidation() {
    var pass = true;
    var emailCheck = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var message = "Fields Needed: ";
    var email = document.getElementById("newemail");
    var password = document.getElementById("newpwd");
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var college = document.getElementById("college");
    var major = document.getElementById("major");
    if(email.value === "") {
        message += "\nUsername";
        email.style.borderColor = "red";
        pass = false;
    }
    if(password.value === "") {
        message += " \nPassword";
        password.style.borderColor = "red";
        pass = false;
    }
    if(fname.value === "") {
        message += " \nFirst Name";
        fname.style.borderColor = "red";
        pass = false;
    }
    if(lname.value === "") {
        message += " \nLast Name";
        lname.style.borderColor = "red";
        pass = false;
    }
    if(college.value === "") {
        message += " \nCollege";
        college.style.borderColor = "red";
        pass = false;
    }
    if(major.value === "") {
        message += " \nMajor";
        major.style.borderColor = "red";
        pass = false;
    }
    if(!email.value.match(emailCheck) && email.value !== "") {
        message += "\nPlease enter a valid email.";
        password.style.borderColor = "red";
        pass = false;
    }
    if(pass) {
        signUpSubmission();
    }
    else {
        alert(message);
    }
}

function loginSubmission() {
    document.getElementById("login-form").submit();
    alert("Success!");
}
function signUpSubmission() {
    document.getElementById("signup-form").submit();
    alert("Success!");
}