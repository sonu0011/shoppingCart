<?php
$host= "localhost";
$username = "id4644207_sonukumar";
$password="KUMAR111@@@";
$dbname="id4644207_sonustore";
$con = mysqli_connect($host,$username,$password);
$result =  mysqli_select_db($con,$dbname);
if(!$result)
{
	die("error");
}


?>