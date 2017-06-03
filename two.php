<?php 
session_start();
include 'one.php';

$name=$_POST["name"];
$email=$_POST["email"];
$username=$_POST["username"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$BirthMonth=$_POST["BirthMonth"];
$BirthDay=$_POST["BirthDay"];
$BirthYear=$_POST["BirthYear"];
$birthday=$BirthMonth.$BirthDay.$BirthYear;
$gender=$_POST["gender"];
$aadhar=$_POST["aadhar"];

if($password===$repassword)
{
	$sql="INSERT INTO voterlist VALUES ('$name','$email','$username','$password','$birthday','$gender','$aadhar')";
	$conn->query($sql) or die ("Error occured");
	header("LOCATION:login.php");

}
?>