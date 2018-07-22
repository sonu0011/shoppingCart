<?php
include 'db.php';
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-UA-compatible" content="IE-7">
		<meta name="viewport"   content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link href="css/bootstrap.css" rel="stylesheet"> 
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="main1.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
		<body>
			<br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-primary">
					<div class="panel-heading">
						SignUp For Free
					</div>
					<div class="row">
						<div class="col-md-12" id="get_error"></div>
					</div>
					<div class="panel-body">
						<form method="post" action="user_registration.php">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="first_name">First Name</label>
										<input type="text" id="first_name" name="first_name" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="last_name">Last Name</label>
										<input type="text" id="last_name" name="last_name" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="email">Email</label>
						<input type="Email" id="email" name="email" class="form-control">
							</div>
						<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="form-control">
					</div>
					<div class="form-group">
						<label for="confirm_password">Confirm Password</label>
						<input type="password" name="confirm_password" id="confirm_password" class="form-control">
					</div>
					<div class="form-group">
						<label for="contact_number">Conatact Number</label>
						<input type="text" maxlength="10"  name="contact_number" id="contact_number"  class="form-control">
					</div>
					<div class="form-group">
						<label for="Address1">Address1</label>
						<input type="text" name="Address1" id="Address1" class="form-control">
					</div>
					<div class="form-group">
						<label for="Address2">Address2</label>
						<input type="text" name="Address2" id="Address2" class="form-control">
					</div>		
					<input type="button" value="SignUp"  id="register" name="signup" class="pull-right btn btn-danger">	
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>