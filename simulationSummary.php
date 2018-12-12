<?php
session_start();
// $income = $_POST['income'];
// $wantToSave = $_POST['wantToSave'];
// $food = $_POST['food'];
// $drinks = $_POST['drinks'];
// $groceries = $_POST['groceries'];
// $transportation = $_POST['transportation'];
// $housing = $_POST['housing'];
// $digital = $_POST['digital'];
// $medical = $_POST['medical'];
// $miscellaneous = $_POST['miscellaneous'];

$number = $_SESSION['number'];


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("
                            SELECT `income`, `wantToSave`, `food`, `drinks`, `groceries`, `transportation`, `shopping`, `entertainment`, `housing`, `digital`, `medical`, `miscellaneous`
                            FROM `TheBudget` WHERE `budgetID` = '$number'
                            ");
$stmt->execute();

$sum = $pdo->prepare("
                            SELECT SUM(`food` + `drinks` + `groceries` + `transportation` + `shopping` + `entertainment` + `housing` + `digital` + `medical` + `miscellaneous`) AS sum
                            FROM `TheBudget` WHERE `budgetID` = '$number'
                            ");
$sum->execute();

$leftover = $pdo->prepare("
                            SELECT SUM(`income` - `wantToSave` - `food` - `drinks` - `groceries` - `transportation` - `shopping` - `entertainment` - `housing` - `digital` - `medical` - `miscellaneous`) AS leftover
                            FROM `TheBudget` WHERE `budgetID` = '$number'
                            ");

$leftover->execute();

// $yourLeftover = (int)$leftover;

// echo($yourLeftover);
?>

<!doctype html>
<html>
<head>
</head>
<body>
<a href="main-page.html"><img src="IMMimages/IMM-logo.jpg" alt="IMM logo" title="logo" width='100'></a>
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


<!-- depending on how much you have leftover, a different message will appear on the right
positive amount: Looks like you still have some leftover income! You can save even more than you thought!
0: Good job! You've figured out where to use all your money!
negative amount: uh oh, you don't have enough income for all your expenditures and save the amount you want. It'd be a good idea to go back to figure where to change things

 -->

<?php while ($row = $stmt->fetch()) { ?>
<p>Your Income</p>
          <p>$<?php echo($row['income']); ?></p>


<p>What you want to Save</p>
          <p>$<?php echo($row['wantToSave']); ?></p>
<?php } ?>

<?php while($row2 = $sum->fetch()){ ?>
<p>Your Expenditures</p>
    <p>$<?php echo($row2['sum']); ?></p>
<?php } ?>

<?php while($row3 = $leftover->fetch()){ ?>
<p>Your Leftover</p>
    <p>$<?php echo($row3['leftover']); ?></p>

<?php
// echo($row3['leftover']);
$test = (int)$row3['leftover'];

if($test > 0){

    echo("Looks like you have some extra cash you haven't put into consideration yet. You can either treat yourself and spend more, or save that money for the future!");
    
}else if($test == 0){

    //<!-- <p>good job</p> -->
    echo("Good job, you've budgeted every cent you have for the month! You know what you're doing.");

}else if($test < 0){

    //<!-- <p>you have no money!</p> -->
    echo("Uh oh, you don't have enough income to save and use that much money. Try adjusting your budget by checking where you think you may be spending too much money.");
}

} ?>



<?php
echo("hi eileen");
?>
  


    <!-- <p>you have extra money</p>     -->



<a href="simulationFullResults.php">See Full Details</a>

<footer>
    budgetbuddy@contact.com
</footer>
    </body>
</html>