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
	<a href="main-page.html"><img src="IMMimages/IMM-logo.jpg" alt="IMM logo" title="logo" width='100'></a>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!-- logo leads to main page -->
	<p>Budgeting Main Page<p>
	<nav>
		<a href="revisit-budget.php">Revisit your Budget</a>
	<ul>
		<li>
			<a href="my-money.html">My Money</a></li>
		<li>
			<a href="savings.html">Savings</a> </li>
		<li>
			<a href="spendings.html">Spending</a> </li>
		<li>
			<a href="contact-form.php">Contact Form</a> </li>
		<li>
			<a href="about.html">About</a> </li>
		<li>
			<a href="simulation.php">Simulation</a></li>
	</ul>

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


<div class="main">
	<p>What are you spending your money on?</p>
	<p>Whether it's going out with friends, a pick-me-up coffee in the morning, or seeing something in a store that's a must buy, it's easy to spend money without realizing how much you've actually spent. While your morning coffee may only be $2, that can accumulate to $60 a month, and approximately $720 a year! Budgeting will help you take note on how much you're really spending so you can start figuring out how to start saving.</p>
</div>

<div id="demo">
	<div id="food">
		<p>What is Food?</p>
		<p class="">Food is food. It’s what you eat to provide nutritions for your body to continue functioning.</p>
		<p class="">Examples</p>
		<ul>
			<li>Fast food</li>
			<li>Snacks</li>
			<li>Eating out</li>
		</ul>
		<img src="images/food-big.png">

	</div>
	<div id="drinks">
		<p class="">What are Drinks?</p>
		<p class="">Drinks would include any beverage that you consume outside of groceries.</p>
		<p class="">Examples</p>
		<ul>
			<li>Morning coffee</li>
			<li>Afternoon tea</li>
			<li>Cafes</li>
			<li>Fast food beverages</li>
		</ul>
		<img src="images/drinks-big.png">

	</div>
	<div id="groceries">
		<p class="">What are Groceries?</p>
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
		<img src="images/groceries-big.png">

	</div>
	<div id="transportation">
		<p>What is Transportation?</p>
		<p>Transportation is any expense incurred to go from one location to another. Depending on your resources, this could be your car, or taking public transportation.</p>
		<p>Examples</p>
		<ul>
			<li>Bus fee</li>
			<li>Gas and fuel</li>
			<li>Car insurance</li>
			<li>Parking</li>
		</ul>
		<img src="images/transportation-big.png">

	</div>
	<div id="shopping">
		<p>What is Shopping?</p>
		<p>Shopping is things you purchase that don't go into the other categories.</p>
		<p>Examples</p>
		<ul>
			<li>Clothing</li>
			<li>Books</li>
			<li>Hobby-oriented items</li>
			<li>Accessories</li>
			<li>Personal care</li>
		</ul>
		<img src="images/shopping-big.png">

	</div>
	<div id="entertainment">
		<p>What is Entertainment?</p>
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
		<img src="images/entertainment-big.png">

	</div>
	<div id="housing">
		<p>What is Housing?</p>
		<p>If you're still living at home, you likely won't have this expenditure, but once you start living by yourself, you'll start incurring things such as rent.</p>
		<p>Examples</p>
		<ul>
			<li>Rent</li>
			<li>Mortgage</li>
			<li></li>
		</ul>
		<img src="images/housing-big.png">

	</div>
	<div id="digital">
		<p>What is Digital?</p>
		<p>Digital will include everything related to your digital products, like your phone and tv.</p>
		<p>Examples</p>
		<ul>
			<li>Phone plans</li>
			<li>TV plans</li>
			<li>Cellular data</li>
		</ul>
		<img src="images/digital-big.png">

	</div>
	<div id="health">
		<p>What is Health?</p>
		<p>Health includes anything to take care of yourself. This includes going to yearly checkups and pharmaceutical drugs.</p>
		<p>Examples</p>
		<ul>
			<li>Dentist</li>
			<li>Doctor</li>
			<li>Eye care</li>
			<li>Pharmacy</li>
		</ul>
		<img src="images/medical-big.png">

	</div>
	<div id="miscellaneous">
		<p>What is Miscellaneous?</p>
		<p>This will include everything else that weren't included in the other categories.</p>
		<p>Examples</p>
		<ul>
			<li>Utilities</li>
			<li>Hydro</li>
			<li>Travelling</li>
			<li>Business fees</li>
		</ul>
		<img src="images/miscellaneous-big.png">

	</div>

</div>
	



<footer>
	<p>mybudgetyouth@contact.com</p>
</footer>
 <script src="js/main.js"></script>

</body>
</html>

