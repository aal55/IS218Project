function hwValidation() {
    var pass = true;
    var dateformat = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;
    var message = "Warning: ";
    var date = document.getElementById("date");
    var title = document.getElementById("title");
	var description = document.getElementById("description");
	
	if (date.value.match(dateformat)) {
		document.form1.text1.focus();
		var opera1 = inputText.value.split('/');
		var opera2 = inputText.value.split('-');
		lopera1 = opera1.length;
		lopera2 = opera2.length;
		if (lopera1>1) {
			var pdate = inputText.value.split('/');
		} else if (lopera2>1) {
			var pdate = inputText.value.split('-');
		}
		var mm  = parseInt(pdate[0]);
		var dd = parseInt(pdate[1]);
		var yy = parseInt(pdate[2]);
		var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];
		if (mm==1 || mm>2) {
			if (dd>ListofDays[mm-1]) {
				alert('Invalid date format!');
				pass = false;
			}
		}
		if (mm==2) {
			var lyear = false;
			if ( (!(yy % 4) && yy % 100) || !(yy % 400))  {
				lyear = true;
			}
			if ((lyear==false) && (dd>=29)) {
				alert('Invalid date format!');
				pass = false;
			}
			if ((lyear==true) && (dd>29)) {
				alert('Invalid date format!');
				pass = false;
			}
		}
	} else {
		alert("Invalid date format!");
		document.form1.text1.focus();
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