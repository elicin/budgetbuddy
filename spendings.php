<?php
session_start();


$dsn = "mysql:host=localhost;dbname=ngeli_budget;charset=utf8mb4";
$dbusername = "ngeli";
$dbpassword = "j*fWtHY&8q2";

$pdo = new PDO($dsn, $dbusername, $dbpassword); 

$stmt = $pdo->prepare("
		SELECT `title`, `explanation`, `examples`
		FROM `ExpenseTypes` 
		WHERE `title` = '".$q."'
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
<div class="sidenav" onclick="showExpense(this.value)">
	<a value="food">Food</a>
	<a>Drinks</a>
	<a>Groceries</a>
	<a>Transportation</a>
	<a>Shopping</a>
	<a>Entertainment</a>
	<a>Housing</a>
	<a>Digital</a>
	<a>Health</a>
	<a>Miscellaneous</a>

</div>


<div class="main">
	<p>What are you spending your money on?</p>
	<p>Whether it's going out with friends, a pick-me-up coffee in the morning, or seeing something in a store that's a must buy, it's easy to spend money without realizing how much you've actually spent. While your morning coffee may only be $2, that can accumulate to $60 a month, and approximately $720 a year! Budgeting will help you take note on how much you're really spending so you can start figuring out how to start saving.</p>
</div>

<p id="demo">
	<?php
// <?php while($row3 = $leftover->fetch()){ 
while($row = $stmt->fetch()){
	echo($row['title']);
}

?>
</p>


<!-- <ul>
	<li>
		<a href="food.html">Food</a></li>
	<li>
		<a href="drinks.html">Drinks</a></li>
	<li>	
		<a href="groceries.html">Groceries</a></li>
	<li>
		<a href="transportation.html">Transportation</a></li>
	<li>
		<a href="shopping.html">Shopping</a></li>
	<li>
		<a href="entertainment.html">Entertainment</a></li>
	<li>
		<a href="housing.html">Housing</a></li>
	<li>
		<a href="digital.html">Digital</a></li>
	<li>
		<a href="medical.html">Health</a></li>
	<li>
		<a href="misc.html">Miscellaneous</a></li>
</ul> -->
<!-- depending on what you click, ajax auto changes the page to its information
guess i'll need to make another database with all the information in the page -->



<!-- put a side bar that pulls different information from the database based on what button is clicked, or is it better to just html it?-->





<footer>
	<p>mybudgetyouth@contact.com</p>
</footer>
 <script src="js/main.js"></script>

</body>
</html>

