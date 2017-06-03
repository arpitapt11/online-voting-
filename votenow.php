<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> Vote now </title>
		<link rel="stylesheet" href="votenow.css" />
	</head>
	<body>
		<header id="header">
				<nav class="left">
					<a href="afterlogin.php" class="button">Back </a>
				</nav>
			</header>
		
				
		<div class="container">       
      <div  class="form">
    		<form id="voted" method="POST" action="votecast.php"> 
    			<p class="contact"><label for="phone">Voter ID number</label></p> 
    			<input id="voterid" name="voterid" placeholder="VoterID number" required="" type="text"> <br>
    			 
    			<p class="name"><label for="name">Constituency</label></p> 
            	<input id="constituency" name="constituency" placeholder="Constituency" maxlength="25" required="" type="text"> <br> 
            	<p class="name"><label for="name">Candidate Name</label></p>
            <input id="name" name="candidate" placeholder="Candidate Name" maxlength="25" required="" type="text"> <br><br>
  			
  			
  			<input class="buttom" name="submit" id="submit" value="VOTE" type="submit"> 	 
  		</form>
					
				</div>
			</div>
			
	</body>
	</html>