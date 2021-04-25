const docForm = document.getElementById("theForm");
const btnSubmit = document.getElementById("submit");
const inputUserName = document.getElementById("username");
const inputPassword = document.getElementById("password");
const inputItem1Count = document.getElementById("itemCount1");
const inputItem2Count = document.getElementById("itemCount2");
const inputItem3Count = document.getElementById("itemCount3");
const inputShipOpt1 = document.getElementById("ship1");
const inputShipOpt2 = document.getElementById("ship2");
const inputShipOpt3 = document.getElementById("ship3");
const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

docForm.addEventListener("submit", runValidation, true);
function runValidation(e) {
	if (!formValidation()){
		e.preventDefault();
	}
}

function formValidation() {
	let errMsg = "";
	if (inputItem1Count.value == '' || inputItem1Count.value < 0){
		errMsg = errMsg + "Invalid Quantity for Item 1\n";
	}
	if (inputItem2Count.value == '' || inputItem2Count.value < 0){
		errMsg = errMsg + "Invalid Quantity for Item 2\n";
	}
	if (inputItem3Count.value == '' || inputItem3Count.value < 0){
		errMsg = errMsg + "Invalid Quantity for Item 3\n";
	}
	if (inputShipOpt1.checked == false && inputShipOpt2.checked == false && inputShipOpt3.checked == false){
		errMsg = errMsg + "No shipping option selected\n";
	}
	if (!(re.test(inputUserName.value))){
		errMsg = errMsg + "Username is not a valid Email Address\n";
	}
	if (inputPassword.value == ''){
		errMsg = errMsg + "Password in Empty\n";
	}
	if (errMsg != "") {
		alert(errMsg);
		return false;
	} else {
		return true;
	}
}