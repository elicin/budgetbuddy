<?php

session_start();

$number = $_SESSION['number'];
// echo($number);


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
	<a href="main-page.html"><img src="images/budgetbuddy-logo.png" title="logo" width='300'></a>
	<link rel="stylesheet" type="text/css" href="css/main.css">

	<!-- logo leads to main page -->
	<!-- <h1>My Money</h1> -->
		<a href="revisit-budget.php" class="revisitBudgetButton">Revisit your Budget</a>
	<nav>
		<div class="menu">
			<ul class="menuUL">
				<li class="menuLI">
					<a href="my-money.html">My Money</a></li>
				<li class="menuLI">
					<a href="savings.html">Savings</a> </li>
				<li class="menuLI">
					<a href="spendings.php">Spending</a> </li>
				<li class="menuLI">
					<a href="about.html">About</a> </li>
				<li class="menuLI">
					<a href="simulation.php">Simulation</a></li>
			</ul>
		</div>
	</nav>

	<h2 class="headings">Insert your expenditures in the left per month</h2> <!--this will disappear when clicked. -->
	
<?php while ($row = $stmt->fetch()) { ?>
	<form action="simulationExpenses-process.php" method="POST">
		

	<div class="grid-container">
		<div class=grid-item"><p><img src="images/food.png" width="40">
			Food</p> $ <input type="number" class="inputNumbersExp" style="font-size: 12px;" name="food" value="<?php echo($row['food']); ?>"/></div>
		

		<div class=grid-item"><p><img src="images/drinks.png" width="40">
			Drinks</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='drinks' value="<?php echo($row['drinks']); ?>"/></div>
		

		<div class="grid-item"><p><img src="images/groceries.png" width="40">
		Groceries</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='groceries' value="<?php echo($row['groceries']); ?>"/></div>


		<div class="grid-item"><p><img src="images/transportation.png" width="40">
		Transportation</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='transportation' value="<?php echo($row['transportation']); ?>"/></div>
		

		<div class="grid-item"><p><img src="images/shopping.png" width="40">
		Shopping</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='shopping' value="<?php echo($row['shopping']); ?>"/></div>
		

		<div class="grid-item"><p><img src="images/entertainment.png" width="40">
		Entertainment</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='entertainment' value="<?php echo($row['entertainment']); ?>"/></div>
		

		<div class="grid-item"><p><img src="images/housing.png" width="40">
		Housing</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='housing' value="<?php echo($row['housing']); ?>"/></div>
		

		<div class="grid-item"><p><img src="images/digital.png" width="40">
		Digital</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='digital' value="<?php echo($row['digital']); ?>"/></div>
		

		<div class="grid-item"><p><img src="images/medical.png" width="40">
		Medical</p> $ <input type='number' class="inputNumbersExp" style="font-size: 12px;" name='medical' value="<?php echo($row['medical']); ?>"/></div>
		

		<div class="grid-item"><p><img src="images/miscellaneous.png" width="40">
		Miscellaneous</p> $<input type='number' class="inputNumbersExp" style="font-size: 12px;" name='miscellaneous' value="<?php echo($row['miscellaneous']); ?>"/></div>
</div>
		<input type="submit" class="simulationButtonExpense" />

		<input type="submit" class="simulationButtonChange" value="See changes below" formaction="simulationExpensesChange-process.php" />
<br>

<div id="container">
		<img src="images/skybackground.png" width='100%'>
<?php 

			$food1 = (int)$row['food'];
?><?php
			if($food1 > 0 && $food1 <= 200 ){
				// echo("0 to 200");
				?> 
				<img src="images/food1.png" class="foodimg" width="15%">
				<?php
			}
			else if($food1 > 200){
				?>
				<img src="images/food2.png" class="foodimg" width="25%">
				<?php
			}
	?><?php
			$drinks1 = (int)$row['drinks'];

			if($drinks1 > 0 && $drinks1 <= 200){
				?> 
				<img class="drinksimg" src="images/drinks1.png">
				<?php
			}
			else if($drinks1 > 200){
				?>
				<img class="drinksimg" src="images/drinks2.png">
				<?php
			}

			$groceries1 = (int)$row['groceries'];

			if($groceries1 > 0 && $groceries1 <= 200){
				?> 
				<img class="groceriesimg" src="images/groceries1.png">
				<?php
			}
			else if($groceries1 > 200){
				?>
				<img class="groceriesimg" src="images/groceries2.png">
				<?php
			}
?><div class=transdiv><?php
			$transportation1 = (int)$row['transportation'];

			if($transportation1 > 0 && $transportation1 <= 200){
				?> 
				<img src="images/transportation2.png">
				<?php
			}
			else if($transportation1 > 200){
				?>
				<img src="images/transportation1.png">
				<?php
			}
		?></div>
<?php } ?>
</div>


<style type="text/css"> 
.container { position:relative; }
.imgA1 { position:absolute; top: 0px; left: 0px; z-index: 1; } 
.imgB1 { position:absolute; top: 70px; left: 100px; z-index: 3; } 
</style>

<!-- <div class="container">
<img class="imgA1" src="image1.png">
<img class="imgB1" src="image2.png">
</div>
 -->

 <script src="js/main.js"></script>
</body>
<footer>
	budgetbuddy@contact.com
</footer>
</html>