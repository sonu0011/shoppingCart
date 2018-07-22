<?php
session_start();
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
		<style type="text/css">
			table tr td{padding: 10px;}
		</style>
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
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
						<div class="panel-body">
							<h1>Thank You</h1><hr>
							<hr>
							<p>Hello <?php echo $_SESSION['uname']  ?> Your payment process is successfully completed and your Transaction Id is xxxxx-xxxxx-xxx you can continue shopping</br>
							<a href="index.php" class="btn btn-lg btn-success">Continue Shopping...</a>
							</p>
						</div>
						<div class="panel-footer"></div>
					
				</div>
				<div class="col-md-2">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>