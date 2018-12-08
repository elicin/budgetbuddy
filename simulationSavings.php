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
// 							SELECT `wantToSave`
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
	<title>Simulation</title>
	<meta charset="utf-8" />
		<!-- <link rel="icon" href="IMMimages/favicon.ico" /> -->
</head>
<body>
	<a href="main-page.html"><img src="IMMimages/IMM-logo.jpg" alt="IMM logo" title="logo" width='100'></a>
	<!-- logo leads to main page -->
	<h1>Simulation Savings</h1>
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

	<p>How much do you want to save per month?</p>
	<form action="simulationSavings-process.php" method="POST">
		$<input type="number" name="wantToSave" required />
		<br>
			
		<input type="submit" />
	


<footer>
	<p>mybudgetyouth@contact.com</p>
</footer>
</body>
</html>