function hwValidation() {
    var pass = true;
    var message = "Warning: ";
	var description = document.getElementById("description");

	if(description.length > 144) {
        message += "\nMust be less than 144 characters.";
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