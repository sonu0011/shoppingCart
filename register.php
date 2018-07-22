<?php
include 'db.php';
$first_name =  $_POST['first_name'];
$last_name =  $_POST['last_name'];
$email =  $_POST['email'];
$password =  ($_POST['password']);
$c_password =  ($_POST['confirm_password']);
$contact_number =  $_POST['contact_number'];
$ad1 =  $_POST['Address1'];
$ad2 =  $_POST['Address2'];
$f_name_exp = "/^[A-Za-z]+$/";
$email_expre = "/^[_A-Za-z0-9]+(\.[_A-Za-z0-9])*@[A-Za-z]+(\.[a-z]{2,4})$/";
$contact_exp = "/^[0-9]+$/";
if(empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($c_password) || empty($contact_number) || empty($ad1) || empty($ad2))
{
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Error!</strong> All fields are required
  </div>";
  exit();

}
if(!preg_match($f_name_exp, $first_name) || !preg_match($f_name_exp, $last_name) )
{
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Error!</strong> Enter a valid  Name
  </div>";
  exit();
}

if(!preg_match($email_expre, $email))
{
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Error!</strong> Enter a valid  Email
  </div>";
  exit();

}
if($password != $c_password)
{
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Error!</strong> Confirmation password does not match
  </div>";
  exit();
}
if(!preg_match($contact_exp, $contact_number))
{
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Error!</strong> Enter a valid contact Number	
  </div>";
  exit();

}
if(strlen($contact_number) != 10)
{
	echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Error!</strong> Enter a valid contact Number
  </div>";
  exit();
}

if(!empty($first_name) || !empty($last_name) || !empty($email) || !empty($password) || !empty($c_password) || !empty($contact_number) || !empty($ad1) || !empty($ad2))
{	
	$query = "SELECT * FROM user_info where emai = '$email'";
	$result = mysqli_query($con,$query);
	$row  = mysqli_num_rows($result);
	if($row>0)
	{
		echo " <div class='alert alert-danger alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Oh!</strong> Email Address is already registered, Please try another one 
  </div>";
  exit();
	}
	else
	{
		$query =  "INSERT INTO `user_info`( `first_name`, `last_name`, `emai`, `password`, `mobile`, `address1`, `address2`) VALUES ('$first_name','$last_name','$email','$password','$c_password','$ad1','$ad2')";
		if(mysqli_query($con,$query))
		{
	echo " <div class='alert alert-success alert-dismissible fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Congratulations!</strong> Your Registration is successfull
  </div>";
  exit();
}
}
}


?>