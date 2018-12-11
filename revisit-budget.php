<?php

session_start();

// $number = $_SESSION['number'];
// echo($number);


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//SELECT income from budget
// $stmt = $pdo->prepare("
//                             SELECT `income`, `wantToSave`, `food`, `drinks`, `groceries`, `transportation`, `shopping`, `entertainment`, `housing`, `digital`, `medical`, `miscellaneous`
//                             FROM `TheBudget` WHERE `budgetID` = '$number'
//                             ");
// $stmt->execute();

?>

<!doctype html>
<html>
<head>
	<title>Revisit Budget</title>
	<meta charset="utf-8" />
		<!-- <link rel="icon" href="IMMimages/favicon.ico" /> -->
</head>
<body>
	<a href="main-page.html"><img src="IMMimages/IMM-logo.jpg" alt="IMM logo" title="logo" width='100'></a>
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- logo leads to main page -->
	<h1>Revisit Budget</h1>
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
</nav>

	<form action="revisitbudget-process.php" method="POST">
		Email <input type="email" name="email" />

	<input type="submit" name="go" />



</body>
</html>