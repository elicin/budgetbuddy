<?php
session_start();
$wantToSave = $_POST['wantToSave'];
$number = $_SESSION['number'];
echo($number);
echo($wantToSave);


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("UPDATE `TheBudget` SET `wantToSave`='$wantToSave'
	WHERE `budgetID` = '$number'");


// UPDATE `TheBudget` SET `budgetID`=[value-1],`income`=[value-2],`wantToSave`=[value-3],`food`=[value-4],`drinks`=[value-5],`groceries`=[value-6],`transportation`=[value-7],`housing`=[value-8],`digital`=[value-9],`medical`=[value-10],`miscellaneous`=[value-11] WHERE 1


// $stmt = $pdo->prepare("UPDATE `TheBudget` (`wantToSave`) 
// 	VALUES ('$wantToSave')
// 	WHERE `BudgetId` = $number; ");

$stmt->execute();


header("Location: simulationExpenses.php");

?>