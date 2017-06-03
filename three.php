<?php
session_start();
include 'one.php';
$username=$_POST["username"];
$password=$_POST["password"];

$sql="SELECT username,password from voterlist where username='$username'";
$result=$conn->query($sql);

if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc())
	{
		if($row["password"]===$password)
		{
			setcookie("name",$username,time()+86400*30,"/");
			header("LOCATION:afterlogin.php");
		}
		else
		{
			echo "Incorrect details";
		}
	}
}