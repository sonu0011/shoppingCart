<?php
session_start();
include 'db.php';
if(isset($_POST['LoginUser']))
				{
					$email =  mysqli_real_escape_string($con,$_POST['l_email']);
					$pass = mysqli_real_escape_string($con,$_POST['l_pass']);
					$query = "SELECT * FROM user_info WHERE emai = '$email' AND password = '$pass'";
					$result = mysqli_query($con,$query);
					$num_rows = mysqli_num_rows($result);
					if($num_rows ==1 )
					{
						$row =  mysqli_fetch_assoc($result);
						$_SESSION['uid'] = $row['user_id'];
						$_SESSION['uname'] = $row['first_name'];
						echo "userfound";
					}
				}
	
?>