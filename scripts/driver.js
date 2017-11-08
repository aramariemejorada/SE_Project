function confirm(){
	var text ="";
	var pin = prompt("Please enter pin for validation", text);

	if (pin==="1234") {
		alert("Thank you. Data saved.");
	}else{
		alert("Error. Wrong pin.");
	}
}