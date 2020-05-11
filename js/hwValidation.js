function hwValidation() {
    var pass = true;
    var dateformat = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;
    var message = "Warning: ";
    var date = document.getElementById("date");
    var title = document.getElementById("title");
	var description = document.getElementById("description");
	
	if(date.value === "") {
        message += "\nPlease enter a date.";
        date.style.borderColor = "red";
        pass = false;
    }
	if(title.value === "") {
        message += "\nPlease enter a title.";
        date.style.borderColor = "red";
        pass = false;
    }
	if(description.value === "" || description.length > 144) {
        message += "\nPlease enter a description no longer than 144 characters.";
        date.style.borderColor = "red";
        pass = false;
    }
	if(pass) {
		submitEdits();
    }
    else {
        alert(message);
    }
}
function submitEdits() {
    document.getElementById("edit").submit();
}