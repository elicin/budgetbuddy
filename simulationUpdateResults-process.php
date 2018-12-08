<?php
session_start();
$income = $_POST['income'];
$wantToSave = $_POST['wantToSave'];
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

$number = $_SESSION['number'];

$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 


$stmt = $pdo->prepare("UPDATE `TheBudget` SET 
    `income`='$income',`wantToSave`='$wantToSave', 
    `food`='$food',`drinks`='$drinks',`groceries`='$groceries',`transportation`='$transportation',`shopping`='$shopping',`entertainment`='$entertainment',`housing`='$housing',`digital`='$digital',`medical`='$medical',`miscellaneous`='$miscellaneous' WHERE `budgetID` = '$number'");


$stmt->execute();

echo("youre on update results");
// header("Location: simulationFullResults.php");

?>

