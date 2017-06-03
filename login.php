<?php

session_start();

if (isset($_COOKIE["name"])) {
	header("location: afterlogin.php");
}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>NOVB-Login </title>
  <link rel="stylesheet" href="ss.css">
</head>

  <body>
<div class="container">
	<section id="content">
		<form  method="POST" action="three.php">
			<h1>Voter Login</h1>
			<div>
				<input type="text" placeholder="Username" required name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" required name="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				
				</div>
		</form>	
	</section>
</div>
</body>
  
 </html>
