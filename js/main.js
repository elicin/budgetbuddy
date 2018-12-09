function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}


function showExpense(str){
	// document.getElementById("demo").innerHTML = Date();
	// here, i want it to pull the information from the database
	// var xhttp;    
 //  if (str == "") {
 //    document.getElementById("txtHint").innerHTML = "";
 //    return;
 //  }
 //  xhttp = new XMLHttpRequest();
 //  xhttp.onreadystatechange = function() {
 //    if (this.readyState == 4 && this.status == 200) {
 //      document.getElementById("txtHint").innerHTML = this.responseText;
 //    }
 //  };
 //  xhttp.open("GET", "getcustomer.asp?q="+str, true);
 //  xhttp.send();

if (str == "") {
        document.getElementById("demo").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        }// } else {
        //     // code for IE6, IE5
        //     xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        // }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","spendings.php?q="+str,true);
        xmlhttp.send();
    }




}