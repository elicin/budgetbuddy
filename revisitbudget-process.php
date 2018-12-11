<?php
session_start();
$email = $_POST['email'];

// if (isset($_SESSION['logged-in'])) {
// 	// if user is logged in, redirect back to home
// 	if ($_SESSION["logged-in"] == true) {
// 		header("Location: simulationFullResults.php");
// 	}
// }

// check if the inputs are set and not null, else redirect to login form
// if(!empty($_POST['email'])) {
// 	$email = $_POST['email'];
// } else {
// 	header("Location: revisit-budget.php");
// 	echo("You don't have a budget");
// }

$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("
						SELECT `email`
						FROM `User`
						WHERE `email` = '$email' ");
$stmt->execute();

if($row = $stmt->fetch()){
	$_SESSION['logged-in'] = true;
	$_SESSION['email'] = $row['email'];
	$_SESSION['budgetID'] = $row['budgetID'];

	header("Location: simulationFullResults.php");
}
	header("Location: revisit-budget.php");

?>

<!-- i input the email in revisit-budget.php. from there, the process will pull which budgetID coincides with that email, and spit out those values -->