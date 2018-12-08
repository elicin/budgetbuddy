<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$questionText = $_POST['questionText'];

$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("INSERT INTO `contact` (`contactName`, `contactLastName`, `email`, `interestIndustry`, `interestTechnical`, `interestCareer`, `yourRole`) VALUES ('$contactName', '$contactLastName', '$email', '$interestIndustry', '$interestTechnical', '$interestCareer', '$yourRole'); ");

$stmt->execute();
?>

<!doctype html>
<html>
    <head>
        <title>Thank you</title>
    <meta charset="utf-8" />
        <!-- <link rel="icon" href="IMMimages/favicon.ico" /> -->
</head>
<body>
    <a href="main-page.html"><img src="IMMimages/IMM-logo.jpg" alt="IMM logo" title="logo" width='100'></a>
    <!-- logo leads to main page -->
    <h1>Thank you</h1>
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

        <p>Thank you for your request.</p>
        <a href="main-page.php">Click here to return to the main page</a>
    </body> 
</html>