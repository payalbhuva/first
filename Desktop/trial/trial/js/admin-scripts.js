// function is used for city form validation
function validateCollege(){
var college_name = document.forms["frmCollege"]["college_name"].value;
var address = document.forms["frmCollege"]["address"].value;
	if(college_name == ""){
	    document.getElementById("msg-container").innerHTML="Please enter College Name";
		document.getElementById('college_name').focus();
		return false;
	}
	
	if(address == ""){
	    document.getElementById("msg-container").innerHTML="Please enter Address for College";
		document.getElementById('address').focus();
		return false;
	}
}
// function is used for address form validation
function validateAddressBook(){
var fName = document.forms["frmAddress"]["fName"].value;
var lName = document.forms["frmAddress"]["lName"].value;
var street = document.forms["frmAddress"]["street"].value;
var zipCode = document.forms["frmAddress"]["zipCode"].value;
var city = document.forms["frmAddress"]["city"].value;
	if(fName == ""){
			document.getElementById("msg-container").innerHTML="Please enter First Name";
			document.getElementById('fName').focus();
			return false;
	}
	
	if(lName == ""){
			document.getElementById("msg-container").innerHTML="Please enter Last Name";
			document.getElementById('lName').focus();
			return false;
	}
	if(street == ""){
			document.getElementById("msg-container").innerHTML="Please enter value for street";
			document.getElementById('street').focus();
			return false;
	}
	if(zipCode == ""){
			document.getElementById("msg-container").innerHTML="Please enter zip code";
			document.getElementById('zipCode').focus();
			return false;
	}
	if(city == ""){
			document.getElementById("msg-container").innerHTML="Please select City";
			return false;
	}

}