<?php
session_start();
// $wantToSave = $_POST['wantToSave'];
$number = $_SESSION['number'];
// echo($food);
// echo($income);
// echo($drinks);

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

<!-- left side: all expenditures
right side: income ,savings, leftover -->

<!-- have to pull icons from database and amounts. echo it -->
<!-- make everything here editable -->

<!-- <p>Food</p>
<p>$<?php echo($row['food']); ?></p>
<p>Drinks</p>
<p>$<?php echo($row['drinks']); ?></p>
<p>Groceries</p>
<p>$<?php echo($row['groceries']); ?></p>
<p>Transportation</p>
<p>$<?php echo($row['transportation']); ?></p>
<p>Shopping</p>
<p>$<?php echo($row['shopping']); ?></p>
<p>Entertainment</p>
<p>$<?php echo($row['entertainment']); ?></p>
<p>Housing</p>
<p>$<?php echo($row['housing']); ?></p>
<p>Digital</p>
<p>$<?php echo($row['digital']); ?></p>
<p>Medical</p>
<p>$<?php echo($row['medical']); ?></p>
<p>Miscellaneous</p>
<p>$<?php echo($row['miscellaneous']); ?></p> -->

<br>
<form action="simulationUpdateResults-process.php" method="POST">


<p>Edit your Budget here</p>

<?php while ($row = $stmt->fetch()) { ?>

<p>Food: $<input type='number' name='food' value="<?php echo($row['food']); ?>"/></p>
<p>Drinks: $<input type='number' name='drinks' value="<?php echo($row['drinks']); ?>"/></p>
<p>Groceries: $<input type='number' name='groceries' value="<?php echo($row['groceries']); ?>"/></p>
<p>Transportation: $<input type='number' name='transportation' value="<?php echo($row['transportation']); ?>"/></p>
<p>Shopping: $<input type='number' name='shopping' value="<?php echo($row['shopping']); ?>"/></p>
<p>Entertainment: $<input type='number' name='entertainment' value="<?php echo($row['entertainment']); ?>"/></p>
<p>Housing: $<input type='number' name='housing' value="<?php echo($row['housing']); ?>"/></p>
<p>Digital: $<input type='number' name='digital' value="<?php echo($row['digital']); ?>"/></p>
<p>Medical: $<input type='number' name='medical' value="<?php echo($row['medical']); ?>"/></p>
<p>Miscellaneous: $<input type='number' name='miscellaneous' value="<?php echo($row['miscellaneous']); ?>"/></p>

<p>Your Income</p>
<p>$<input type='number' name='income' value="<?php echo($row['income']); ?>"/></p>
          <!-- <p>$<?php //echo($row['income']); ?></p> -->

<p>What you want to Save</p>
<p>$<input type='number' name='wantToSave' value="<?php echo($row['wantToSave']); ?>"/></p>
          <!-- <p>$<?php //echo($row['wantToSave']); ?></p> -->
<?php } ?>

<?php while($row2 = $sum->fetch()){ ?>
<p>Your Expenditures</p>
    <p>$<?php echo($row2['sum']); ?></p>
<?php } ?>

<?php while($row3 = $leftover->fetch()){ ?>
<p>Your Leftover</p>
    <p>$<?php echo($row3['leftover']); ?></p>
<?php } ?>

			<input type="submit" value="Recalculate"/>

<!-- <a href="simulationFullResults.php">Save your Information via your Email</a> -->

<form action="simulationEmail-process.php" method="POST">
	<p>Save your Information via your Email</p>
	<input type='text' name='email' />

		<input type="submit" value="Save" formaction="simulationEmail-process.php" />



<!-- can just insert your email here? -->
<!-- need jaimes help with connecting the email here lOL -->
<!-- make it a popup, where you can insert the email there? -->

<footer>
    <p>mybudgetyouth@contact.com</p>
</footer>
    </body>
</html>