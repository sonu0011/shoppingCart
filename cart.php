<?php
include 'db.php';
session_start();
if(!isset($_SESSION['uid']))
{
	header("location:index.php");
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
		</ul>
		</div>
</div>
		<p></br></p>
		<p></br></p>
		<p></br></p>
		<p></br></p>
		<p></br></p>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div id="get_checkout_cart_message"></div>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-primary">
						<div class="panel-heading">Cart Checkout
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-2"><strong>Action</strong></div>
								<div class="col-md-2"><strong>Product Image</strong></div>
								<div class="col-md-2"><strong>Product Name</strong></div>
								<div class="col-md-2"><strong>Quantity</strong></div>
								<div class="col-md-2"><strong> Product Price</strong></div>
								<div class="col-md-2"><strong>Price in &#8377;</strong></div>
							</div>
							<div id="show_cart_details"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
</body>
</html>
