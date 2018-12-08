<!doctype html>
<html>
<head>
	<title>Main Page</title>
	<meta charset="utf-8" />
		<!-- <link rel="icon" href="IMMimages/favicon.ico" /> -->
</head>
<body>
	<a href="main-page.html"><img src="IMMimages/IMM-logo.jpg" alt="IMM logo" title="logo" width='100'></a>
	<!-- logo leads to main page -->
	<h1>Contact Us</h1>
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

	<form action="contact-process.php" method="POST">
		First Name:<input type="text" name="contactName" required/>
		<br>
		Last Name:<input type="text" name="contactLastName" required/>
		<br>
		Email:<input type="text" name="email" required/>
		<br>
		Question: <textarea name="questionText" cols="50" row="5" required> </textarea>
			
		<input type="submit" />

	<p></p>
	<p></p>



<footer>
	<p>mybudgetyouth@contact.com</p>
</footer>
</body>
</html>

<!-- <?php } ?> -->