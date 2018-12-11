<?php

session_start();

$number = $_SESSION['number'];
echo($number);


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

//SELECT income from budget
$stmt = $pdo->prepare("
                            SELECT `income`, `wantToSave`, `food`, `drinks`, `groceries`, `transportation`, `shopping`, `entertainment`, `housing`, `digital`, `medical`, `miscellaneous`
                            FROM `TheBudget` WHERE `budgetID` = '$number'
                            ");
$stmt->execute();

// $imgs = $pdo->("
// 							SELECT `
// 							")


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
	<link rel="stylesheet" type="text/css" href="css/main.css">

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

	<p>Insert your expenditures in the left per month</p> <!--this will disappear when clicked. -->
	
<?php while ($row = $stmt->fetch()) { ?>
	<form action="simulationExpenses-process.php" method="POST">
		
		<p><img src="images/food.png">
			Food $<input type="number" name="food" value="<?php echo($row['food']); ?>"/></p>
		

		<p><img src="images/drinks.png">
			Drinks: $<input type='number' name='drinks' value="<?php echo($row['drinks']); ?>"/></p>
		<?php
			$drinks1 = (int)$row['drinks'];

			if($drinks1 > 0 && $drinks1 <= 200){
				?> 
				<img class="drinks" src="images/drinks1.png" width='50'>
				<?php
			}
			else if($drinks1 > 200){
				?>
				<img src="images/drinks2.png" width='50'>
				<?php
			}
		?>

		<p>Groceries: $<input type='number' name='groceries' value="<?php echo($row['groceries']); ?>"/></p>


		<p>Transportation: $<input type='number' name='transportation' value="<?php echo($row['transportation']); ?>"/></p>
		

		<p>Shopping: $<input type='number' name='shopping' value="<?php echo($row['shopping']); ?>"/></p>
		

		<p>Entertainment: $<input type='number' name='entertainment' value="<?php echo($row['entertainment']); ?>"/></p>
		

		<p>Housing: $<input type='number' name='housing' value="<?php echo($row['housing']); ?>"/></p>
		

		<p>Digital: $<input type='number' name='digital' value="<?php echo($row['digital']); ?>"/></p>
		

		<p>Medical: $<input type='number' name='medical' value="<?php echo($row['medical']); ?>"/></p>
		

		<p>Miscellaneous: $<input type='number' name='miscellaneous' value="<?php echo($row['miscellaneous']); ?>"/></p>

		<input type="submit" />

		<input type="submit" value="See changes" formaction="simulationExpensesChange-process.php" />
<?php 

			$food1 = (int)$row['food'];

			if($food1 > 0 && $food1 <= 200 ){
				// echo("0 to 200");
				?> 
				<img src="images/food1.png" class="foodimg" width='100'>
				<?php
			}
			else if($food1 > 200){
				?>
				<img src="images/food2.png" class="foodimg" width='100'>
				<?php
			}
		?>
<?php } ?>





<footer>
	<p>mybudgetyouth@contact.com</p>
</footer>

 <script src="js/main.js"></script>
</body>
</html>