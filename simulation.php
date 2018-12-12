<?php
session_start();

$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

// //SELECT income from budget
// $stmt = $pdo->prepare("
// 							SELECT `income`
// 							FROM `TheBudget`");
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
	<title>Simulation Income</title>
	<meta charset="utf-8" />
		<!-- <link rel="icon" href="IMMimages/favicon.ico" /> -->
</head>
<body>
	<a href="main-page.html"><img src="images/budgetbuddy-logo.png" title="logo" width='300'></a>
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- logo leads to main page -->
	<!-- <h1>My Money</h1> -->
		<a href="revisit-budget.php" class="revisitBudgetButton">Revisit your Budget</a>
	<nav>
		<div class="menu">
			<ul class="menuUL">
				<li class="menuLI">
					<a href="my-money.html">My Money</a></li>
				<li class="menuLI">
					<a href="savings.html">Savings</a> </li>
				<li class="menuLI">
					<a href="spendings.php">Spending</a> </li>
				<li class="menuLI">
					<a href="about.html">About</a> </li>
				<li class="menuLI">
					<a href="simulation.php">Simulation</a></li>
			</ul>
		</div>
	</nav>

<div class="middleAlign">
	<h2 class="headingsDollar">Insert your Income per month to get started</h2>
	<form action="simulation-process.php" method="POST">
		<p class="dollar">$ <input type="number" class="inputNumbers" style="font-size: 20px;" name="income" required/></p>
		<br>
			
		<input class="simulationButtonSubmit" type="submit" />
	</form>
<div>

<footer>
	budgetbuddy@contact.com
</footer>
</body>
</html>