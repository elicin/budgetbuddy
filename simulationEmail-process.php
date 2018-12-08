<?php
session_start();
$food = $_POST['food'];
$drinks = $_POST['drinks'];
$groceries = $_POST['groceries'];
$transportation = $_POST['transportation'];
$shopping = $_POST['shopping'];
$entertainment = $_POST['entertainment'];
$housing = $_POST['housing'];
$digital = $_POST['digital'];
$medical = $_POST['medical'];
$miscellaneous = $_POST['miscellaneous'];

$email = $_POST['email'];


// $number = $pdo->lastInsertId('number'); 
$number = $_SESSION['number'];


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 


$stmt = $pdo->prepare("INSERT INTO `User` (`budgetID`, `email`) VALUES ('$number', '$email'); ");

$stmt->execute();


// $stmt2 = $pdo->prepare("UPDATE `TheBudget` SET `food`='$food',`drinks`='$drinks',`groceries`='$groceries',`transportation`='$transportation',`shopping`='$shopping',`entertainment`='$entertainment',`housing`='$housing',`digital`='$digital',`medical`='$medical',`miscellaneous`='$miscellaneous' WHERE `budgetID` = '$number'");


// $stmt2->execute();


header("Location: thankyou.php");

?>

