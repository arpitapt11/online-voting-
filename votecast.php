<?php 
session_start();
include 'onee.php';

$voterid=$_POST["voterid"];
$constituency=$_POST["constituency"];
$candidate=$_POST["candidate"];




	$sql="INSERT INTO voted VALUES ('$voterid','$constituency','$candidate')";
	$conn->query($sql) or die ("Error occured");
	header("LOCATION:thankyou.html");
	?>