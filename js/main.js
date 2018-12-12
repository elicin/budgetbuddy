// function myFunction() {
//     var popup = document.getElementById("myPopup");
//     popup.classList.toggle("show");
// }


function showExpense(str){
	document.getElementById("demo").style.display = "block";
	document.getElementById("drinks").style.display = "none";
	document.getElementById("food").style.display = "none";
	document.getElementById("groceries").style.display = "none";
	document.getElementById("transportation").style.display = "none";
	document.getElementById("shopping").style.display = "none";
	document.getElementById("entertainment").style.display = "none";
	document.getElementById("housing").style.display = "none";
	document.getElementById("digital").style.display = "none";
	document.getElementById("health").style.display = "none";
	document.getElementById("miscellaneous").style.display = "none";

	// console.log(str);
	if (str == "food"){
		document.getElementById("food").style.display = "block";
	}
	if (str == "drinks"){
		document.getElementById("drinks").style.display = "block";
	}
	if (str == "groceries"){
		document.getElementById("groceries").style.display = "block";
	}
	if (str == "transportation"){
		document.getElementById("transportation").style.display = "block";
	}
	if (str == "shopping"){
		document.getElementById("shopping").style.display = "block";
	}
	if (str == "entertainment"){
		document.getElementById("entertainment").style.display = "block";
	}
	if (str == "housing"){
		document.getElementById("housing").style.display = "block";
	}
	if (str == "digital"){
		document.getElementById("digital").style.display = "block";
	}
	if (str == "health"){
		document.getElementById("health").style.display = "block";
	}
	if (str == "miscellaneous"){
		document.getElementById("miscellaneous").style.display = "block";
	}

}



