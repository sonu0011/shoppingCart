<?php
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
			
			<li style="width:300px;top:8px;"><input type="text" id="search" class="form-control"></li>
			<li style="top:8px;left:15px;"><button   id="search_btn" class="btn btn-primary">Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li><a id="cart_container" class="dropdown-toggle" data-toggle="dropdown" href="#"><span  class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge"></span></a>
			<div class="dropdown-menu" style="width:400px;">
				<div class="panel-success">
					<div class="panel-heading">
					<div class="row">
					<div class="col-lg-3">Sr.No</div>
					<div class="col-lg-3">Product Image</div>
					<div class="col-lg-3">Product Name</div>
					<div class="col-lg-3">Price in &#8377;</div>
					</div>
					</div>
					<div class="panel-body">
						<div id="get_cart_items"></div>
					</div>
					<div class="panel-footer">
					</div>
				</div><!--end of panel-->	
			</div><!--end of dropdown-->
			</li>
			<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi, ". $_SESSION['uname']; ?></a>
				<ul class="dropdown-menu">
			    <li><a href="cart.php" style="color: blue"><span   class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
			    <li class="divider"></li>
			    <li ><a href="#" style="color: blue">Change Password</a></li>
			    <li class="divider"></li>
			    <li><a href="logout.php" style="color: blue">LogOut</a></li>
 			 </ul>
			</li>
			</ul><!--end of cart dropdown-->
			</div><!--end of header-->
			</div><!--end of navbar -->
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
						</div>
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
				<div class="row">
					<div class="col-md-12">
						<center>
							<ul class="pagination" id="get_pagination">
							

						</ul>
						</center>

					</div>
				</div>
			</div>
		</body>
</html>		