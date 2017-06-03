<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome Voter</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="aftlogin.css" />
	</head>
	<body>

		
			<header id="header">
				<nav class="left">
					<a href="ec.html" class="button">About EC </a>
				</nav>
				
				<nav class="right">
					<a href="signout.php" class="button">Sign out</a>
					<?php
						echo "logged in as :".$_COOKIE["name"];
					?>
				</nav>
			</header>

			<section id="banner">
				<div>

					<h1>Indian Democratic System</h1>
					<p>As per the Universal Adult Suffrage, every citizen of or abovve the age of 18 is legally allowed to caste his/her vote in any of the elections conducted by the Election Comiision of India. He or She is required to possess a Voter ID card by the virtue of which their names can be verified from the Voter list of their constituency.</p>
					
				</div>
			</section>


		<ul>
  <li><a href="politicalparties.html">Political Parties</a></li>
  <li><a href="guidelines.html">Guidelines</a></li>
  <li><a href="aboutus.html">About</a></li>
  <li><a href="votenow.php">Vote Now!</a></li> 
</ul>

		
</body>
</html>