<?php
session_start();

$income = $_POST['income'];


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `TheBudget` (`income`) VALUES ('$income'); ");

$stmt->execute();

$number = $pdo->lastInsertId(`budgetID`);
echo($number);

$_SESSION['number'] = $number;

// header(“Location: simulationSavings.php”);

header("Location: simulationSavings.php");


?>