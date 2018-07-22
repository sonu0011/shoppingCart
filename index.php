<?php
include 'db.php';
session_start();
if(isset($_SESSION['uid']))
{
	header("location:profile.php");
}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="x-UA-compatible" content="IE-7">
		<meta name="viewport"   content="width=device-width, initial-scale=1">
		<title>Home</title>
		<link href="css/bootstrap.css" rel="stylesheet"> 
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="main2.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</head>
		<body>
			<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
			<div class="navbar-header">
				
				<a href="#" class="navbar-brand">Sonu Store</a>
			</div>
			<ul class="nav navbar-nav">
			<li><a href="#"><span class="glyphicon glyphicon-home"></span>Home</a></li>
			<li><a href="#"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			
			<li style="width:300px;top:8px;"><input type="text" id="search" class="form-control"></li>
			<li style="top:8px;left:15px;"><button   id="search_btn" class="btn btn-primary">Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span  class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
			<div class="dropdown-menu" style="width:400px;">
				<div class="panel-success">
					<div class="panel-heading">
					<div class="row">
					<div class="col-lg-3">
					S1.No
					</div>
					<div class="col-lg-3">Product Image</div>
					<div class="col-lg-3">Product Name</div>
					<div class="col-lg-3">Price in $.</div>
					</div>
					</div>
					<div class="panel-body">
					</div>
					<div class="panel-footer">
					</div>
				</div>	
			</div>
			</li>
			
<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>SignIn</a>
				<!--   dropdown-menu class makes ul display none-->
				<div class="dropdown-menu" style="width:300px;">
				<div class="panel-primary">
					<div class="panel-heading">
						LogIn
					</div>
						<div class="panel-heading">
						<label for="login_email" >Email</label>
						</div>
						<div class="panel-heading">
						<input type="Email" class="form-control" id="login_email" name="login_email" required>
					</div>
					<div class="panel-heading">
						<label for="login_pass" >Password</label>
						</div>
						<div class="panel-heading">
						<input type="password" id="login_pass" name="login_pass" class="form-control" required>
					</div>
					<div class="panel-heading">
					<button type="button" class="btn btn-primary ">Forgot Password</button>
					<button type="button" style="float:right;" id="login" class="btn btn-success ">LogIn</button>
					</div>					
					
					
					
				</div>
				</div>
				
				</li>
			<li><a href="user_registration.php"><span class="glyphicon glyphicon-user"></span>SignUp</a></li>
			</div>
			</div>
			<p></br></p>
			<p></br></p>
			<p></br></p>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="col-lg-2">
						<div id="get_cat"></div>
						<div id="get_brands"></div>
					</div>
					<div class="col-lg-8">
						<div class="row">
							<div class="col-md-12" id="cart_info"></div>
						</div
						<div class="panel panel-info">
							<div class="panel-heading">
							Product
							</div>
							<div class="panel-body">
								<div id="get_products"></div>
							</div>
								<div class="panel-footer">
									&copy;2017
								</div>
						</div>
					</div>
					<div class="col-lg-1"></div>
				</div>
			</div>
		</body>
</html>		