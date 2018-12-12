<?php
session_start();


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("
		SELECT `title`, `explanation`, `examples`
		FROM `ExpenseTypes` 
		");
$stmt->execute();
// $stmt->fetch();


$images = $pdo->prepare("
		SELECT `largeImage`
		FROM `ExpensesImages` 
		-- WHERE `title` = ?
		");
$images->execute();


// $stmt = $pdo->prepare("
//                             SELECT `title`, `explanation`, `examples`
//                             FROM `ExpenseTypes` 
//                             ");
// $stmt->execute();


?>

<!doctype html>
<html>
<head>
	<title>Main Page</title>
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
<div>
	<h2 class="headings">What are you spending your money on?</h2>
	<p>Whether it's going out with friends, a pick-me-up coffee in the morning, or seeing something in a store that's a must buy, it's easy to spend money without realizing how much you've actually spent. While your morning coffee may only be $2, that can accumulate to $60 a month, and approximately $720 a year! Budgeting will help you take note on how much you're really spending so you can start figuring out how to start saving.</p>
</div>
<!-- <p>Categories of Expenditures</p> -->
<!-- make it vertical -->
<div class="sidenav">
	<a onclick="showExpense('food')">Food</a>
	<a onclick="showExpense('drinks')">Drinks</a>
	<a onclick="showExpense('groceries')">Groceries</a>
	<a onclick="showExpense('transportation')">Transportation</a>
	<a onclick="showExpense('shopping')">Shopping</a>
	<a onclick="showExpense('entertainment')">Entertainment</a>
	<a onclick="showExpense('housing')">Housing</a>
	<a onclick="showExpense('digital')">Digital</a>
	<a onclick="showExpense('health')">Health</a>
	<a onclick="showExpense('miscellaneous')">Miscellaneous</a>

</div>

<div id="demo">
	<div id="food">
		<h2 class="headings">What is Food?</h2>
		<p class="">Food is food. It’s what you eat to provide nutritions for your body to continue functioning.</p>
		<p class="">Examples</p>
		<ul>
			<li>Fast food</li>
			<li>Snacks</li>
			<li>Eating out</li>
		</ul>
		<img src="images/food-big.png" class="bigImageRight">

	</div>
	<div id="drinks">
		<h2 class="headings">What are Drinks?</h2>
		<p class="">Drinks would include any beverage that you consume outside of groceries.</p>
		<p class="">Examples</p>
		<ul>
			<li>Morning coffee</li>
			<li>Afternoon tea</li>
			<li>Cafes</li>
			<li>Fast food beverages</li>
		</ul>
		<img class="bigImageRight" src="images/drinks-big.png">

	</div>
	<div id="groceries">
		<h2 class="headings">What are Groceries?</h2>
		<p class="">Groceries are items purchased as a grocery store to create meals to be consumed. By buying groceries, you have full control on what you consume and will have a better idea of how much money you've used.</p>
		<p class="">Examples</p>
		<ul>
			<li>Dairy</li>
			<li>Vegetables</li>
			<li>Produce</li>
			<li>Seasonings</li>
			<li>Cans of soup</li>
			<li>Any products purchased for future use</li>
		</ul>
		<img src="images/groceries-big.png" class="bigImageRight">

	</div>
	<div id="transportation">
		<h2 class="headings">What is Transportation?</h2>
		<p>Transportation is any expense incurred to go from one location to another. Depending on your resources, this could be your car, or taking public transportation.</p>
		<p>Examples</p>
		<ul>
			<li>Bus fee</li>
			<li>Gas and fuel</li>
			<li>Car insurance</li>
			<li>Parking</li>
		</ul>
		<img src="images/transportation-big.png" class="bigImageRight">

	</div>
	<div id="shopping">
		<h2 class="headings">What is Shopping?</h2>
		<p>Shopping is things you purchase that don't go into the other categories.</p>
		<p>Examples</p>
		<ul>
			<li>Clothing</li>
			<li>Books</li>
			<li>Hobby-oriented items</li>
			<li>Accessories</li>
			<li>Personal care</li>
		</ul>
		<img src="images/shopping-big.png" class="bigImageRight">

	</div>
	<div id="entertainment">
		<h2 class="headings">What is Entertainment?</h2>
		<p>Entertainment are things that are for your own fun.</p>
		<p>Examples</p>
		<ul>
			<li>Electronics</li>
			<li>Game consoles</li>
			<li>Movies</li>
			<li>Music</li>
			<li>Arts</li>
			<li>Magazines</li>
		</ul>
		<img src="images/entertainment-big.png" class="bigImageRight">

	</div>
	<div id="housing">
		<h2 class="headings">What is Housing?</h2>
		<p>If you're still living at home, you likely won't have this expenditure, but once you start living by yourself, you'll start incurring things such as rent.</p>
		<p>Examples</p>
		<ul>
			<li>Rent</li>
			<li>Mortgage</li>
		</ul>
		<img src="images/housing-big.png" class="bigImageRight">

	</div>
	<div id="digital">
		<h2 class="headings">What is Digital?</h2>
		<p>Digital will include everything related to your digital products, like your phone and tv.</p>
		<p>Examples</p>
		<ul>
			<li>Phone plans</li>
			<li>TV plans</li>
			<li>Cellular data</li>
		</ul>
		<img src="images/digital-big.png" class="bigImageRight">

	</div>
	<div id="health">
		<h2 class="headings">What is Health?</h2>
		<p>Health includes anything to take care of yourself. This includes going to yearly checkups and pharmaceutical drugs.</p>
		<p>Examples</p>
		<ul>
			<li>Dentist</li>
			<li>Doctor</li>
			<li>Eye care</li>
			<li>Pharmacy</li>
		</ul>
		<img src="images/medical-big.png" class="bigImageRight">

	</div>
	<div id="miscellaneous">
		<h2 class="headings">What is Miscellaneous?</h2>
		<p>This will include everything else that weren't included in the other categories.</p>
		<p>Examples</p>
		<ul>
			<li>Utilities</li>
			<li>Hydro</li>
			<li>Travelling</li>
			<li>Business fees</li>
		</ul>
		<img src="images/miscellaneous-big.png" class="bigImageRight">

	</div>

</div>
	



<footer>
	budgetbuddy@contact.com
</footer>
 <script src="js/main.js"></script>

</body>
</html>

