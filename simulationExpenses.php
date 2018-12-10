<?php

session_start();

$number = $_SESSION['number'];
echo($number);


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//SELECT income from budget
// $stmt = $pdo->prepare("
// 						SELECT `food`, `drinks`, `groceries`, `transportation`, `housing`, `digital`, `medical`, `miscellaneous`
// 						FROM `TheBudget`");
// $stmt->execute();


// // SELECT all the dietary images
// $stmt1 = $pdo->prepare("
//                         SELECT `greyImage`, `value`, `code`, `type`
//                         FROM `dietallergyvalue`
//                         WHERE `dietallergyvalue`.`type` = 'D'");
// $stmt1->execute();

// // SELECT all the allergy images
// $stmt2 = $pdo->prepare("
//                         SELECT `greyImage`, `value`, `code`, `type`
//                         FROM `dietallergyvalue`
//                         WHERE `dietallergyvalue`.`type` = 'A'");
// $stmt2->execute();

?>


<!doctype html>
<html>
<head>
	<title>Simulation</title>
	<meta charset="utf-8" />
		<!-- <link rel="icon" href="IMMimages/favicon.ico" /> -->
</head>
<body>
	<a href="main-page.html"><img src="IMMimages/IMM-logo.jpg" alt="IMM logo" title="logo" width='100'></a>
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- logo leads to main page -->
	<h1>Simulation Expenses</h1>
	<nav>
		<a href="revisit-budget.php">Revisit your Budget</a>

	<ul>
		<li>
			<a href="my-money.html">My Money</a></li>
		<li>
			<a href="savings.html">Savings</a> </li>
		<li>
			<a href="spendings.php">Spending</a> </li>
		<li>
			<a href="contact-form.php">Contact Form</a> </li>
		<li>
			<a href="about.html">About</a> </li>
		<li>
			<a href="simulation.php">Simulation</a></li>
	</ul>

	<p>Insert your expenditures in the left per month</p> <!--this will disappear when clicked. -->
	<form action="simulationExpenses-process.php" method="POST">
		<!-- when you click the image, a popup pops out where you insertted the amount + a link to the article page -->
		<div class="popup" onclick="myFunction()">Food $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
			<input type="number" name="food" />
		<div class="popup" onclick="myFunction()">Drinks $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
			<input type="number" name="drinks" />

		<div class="popup" onclick="myFunction()">Groceries $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="groceries" />

		<div class="popup" onclick="myFunction()">Transportation $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="transportation" />

		<div class="popup" onclick="myFunction()">Shopping $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="shopping" />

		<div class="popup" onclick="myFunction()">Entertainment $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="entertainment" />

		<div class="popup" onclick="myFunction()">Housing $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="housing" />

		<div class="popup" onclick="myFunction()">Digital $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="digital" />

		<div class="popup" onclick="myFunction()">Medical $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="medical" />

		<div class="popup" onclick="myFunction()">Miscellaneous $
		 <!-- instead of 'Food', it'll be a logo to click on -->
			<span class="popuptext" id="myPopup"><a href="spendings.php" target="_blank">Click for an explanation</a>
			</span>
		</div>
		<input type="number" name="miscellaneous" />
		<br>
			
		<input type="submit" />
	


<footer>
	<p>mybudgetyouth@contact.com</p>
</footer>

 <script src="js/main.js"></script>
</body>
</html>