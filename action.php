<?php
include 'db.php';
session_start();
if (isset($_POST['request'])) {
		$cat =  "SELECT * FROM categories";
		$result = mysqli_query($con,$cat);
		$num = mysqli_num_rows($result);
		echo "
				<ul class='nav nav-stacked nav-pills'>
				<li class='active'><a href='#'><h4>Categories<h4></a></li>
				";
					for ($i=0; $i <$num ; $i++) 
					{ 
							$row = mysqli_fetch_assoc($result);
							echo "<li><a href='#' class='category' cid=".$row['cat_id'].">".$row['cat_title']."</a></li>";
					}
					echo "</ul>";
				}
				if(isset($_POST['brands']))
				{
				
				$cat1 =  "SELECT * FROM brands";
				$result1 = mysqli_query($con,$cat1);
				$num1 = mysqli_num_rows($result1);
				echo "
				<ul class='nav nav-stacked nav-pills'>
				<li class='active'><a href='#'  ><h4>Brands<h4></a></li>
				";
				for ($i=0; $i <$num1 ; $i++) { 
					$row = mysqli_fetch_assoc($result1);
					echo "<li><a href='#' class='brands' brand_id=".$row['brands_id'].">".$row['brands_title']."</a></li>";
				}
				echo "</ul>";
			}
			if(isset($_POST['page']))
			{
				$query = "SELECT *FROM products";
				$result = mysqli_query($con,$query);
				$num_rows =mysqli_num_rows($result);
				$pageno  =  ceil($num_rows/9);
				for ($i=1; $i<=$pageno ; $i++) { 
					echo "
					<li><a href='#' id='page' page = '$i'>$i</a></li>
					";
				}
			}
				if(isset($_POST['product']))
				{
					$limit = 9;
					if(isset($_POST['setPage']))
				{
					$pageno = $_POST['pageno'];
					$start = ($pageno*$limit) - $limit;
				}
				else
				{
					$start = 0;
				}
					$query = "SELECT * FROM products  LIMIT $start, $limit";
					$result = mysqli_query($con,$query);
					while ($row = mysqli_fetch_assoc($result)) {
						$product_id= $row['products_id'];
						$product_cat= $row['products_cat'];
						$product_brand= $row['products_brand'];
						$product_title= $row['products_title'];
						$product_image= $row['products_image'];
						$product_price= $row['products_price'];

						
						echo "
						<div class='col-md-4' col-lg-4>
									<div class='panel panel-info'>
											<div class='panel-heading'>
												$product_title
											</div>
											<div class='panel-body'>
											<img src='images/$product_image' style='width:150px;height:220px'>	
											</div>
											<div class='panel-heading'>
											&#8377;$product_price
											
											<button  id='product_id' pid ='$product_id' style='float:right'  value='AddToCart' class='btn btn-danger btn-xs'>AddToCart</button>
											
											
											</div>
									</div>
								</div>";
					}
				}
				if(isset($_POST['get_selected_cat']))
				{
					$cid = $_POST['cat_id'];
					$query = "SELECT * FROM products WHERE products_cat = $cid";
					$result = mysqli_query($con,$query);
					while ($row = mysqli_fetch_assoc($result)) {
						$product_id= $row['products_id'];
						$product_cat= $row['products_cat'];
						$product_brand= $row['products_brand'];
						$product_title= $row['products_title'];
						$product_image= $row['products_image'];
						$product_price= $row['products_price'];

						
						echo "
						<div class='col-md-4' col-lg-4>
									<div class='panel panel-info'>
											<div class='panel-heading'>
												$product_title
											</div>
											<div class='panel-body'>
											<img src='images/$product_image' style='width:150px;height:220px'>	
											</div>
											<div class='panel-heading'>
											&#8377;$product_price
											
											<button  style='float:right' id='product_id' pid ='$product_id'  type='submit' value='AddToCart' class='btn btn-danger btn-xs'>AddToCart</button>
											
											
											</div>
									</div>
								</div>";
					}

				}	
				if(isset($_POST['get_selected_brand']))
				{
					$bid = $_POST['brand_id'];
					$query = "SELECT * FROM products WHERE products_brand = $bid";
					$result = mysqli_query($con,$query);
					while ($row = mysqli_fetch_assoc($result)) {
						$product_id= $row['products_id'];
						$product_cat= $row['products_cat'];
						$product_brand= $row['products_brand'];
						$product_title= $row['products_title'];
						$product_image= $row['products_image'];
						$product_price= $row['products_price'];

						
						echo "
						<div class='col-md-4' col-lg-4>
									<div class='panel panel-info'>
											<div class='panel-heading'>
												$product_title
											</div>
											<div class='panel-body'>
											<img src='images/$product_image' style='width:150px;height:220px'>	
											</div>
											<div class='panel-heading'>
											&#8377;$product_price
											
											<button  style='float:right' id='product_id' pid ='$product_id' type='submit' value='AddToCart'class='btn btn-danger btn-xs'>AddToCart</button>
											
											
											</div>
									</div>
								</div>";
					}

				}	
			if(isset($_POST['get_searched_item']))
				{
					$search = $_POST['search'];
					$query = "SELECT * FROM products WHERE products_keywords LIKE  '%$search%' ";
					$result = mysqli_query($con,$query);
					$num_rows = mysqli_num_rows($result);
					if($num_rows < 1)
					{
						echo "Sorry,No Result found";
					}
					else
					{
					while ($row = mysqli_fetch_assoc($result)) {
						$product_id= $row['products_id'];
						$product_cat= $row['products_cat'];
						$product_brand= $row['products_brand'];
						$product_title= $row['products_title'];
						$product_image= $row['products_image'];
						$product_price= $row['products_price'];

						
						echo "
						<div class='col-md-4' col-lg-4>
									<div class='panel panel-info'>
											<div class='panel-heading'>
												$product_title
											</div>
											<div class='panel-body'>
											<img src='images/$product_image' style='width:150px;height:220px'>	
											</div>
											<div class='panel-heading'>
											&#8377;$product_price
											
											<button  style='float:right' id='product_id' pid ='$product_id' type='submit'value='AddToCart'class='btn btn-danger btn-xs'>AddToCart</button>
											
											
											</div>
									</div>
								</div>";
					}
				}

				}
				if (isset($_POST['AddCart'])) {
					if(isset($_SESSION['uid']))
					{
						$product_id = $_POST['pid'];
						$user_id = $_SESSION['uid'];
						$query  ="SELECT * FROM cart WHERE p_id = '$product_id' AND user_id  = '$user_id'";
						$result =  mysqli_query($con,$query);
						$num_rows = mysqli_num_rows($result);
							if($num_rows>0)
								{
									echo " <div class='alert alert-success alert-dismissible fade in'>
 								   	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    								  <strong>Product is already added to cart...</strong> 
    								</div>
  									";
  									exit();
								}
								else
								{
					
						$query  ="SELECT * FROM products WHERE products_id = '$product_id'";
						$result =  mysqli_query($con,$query);
						$row = mysqli_fetch_assoc($result);
						$p_title = $row['products_title'];
						$p_image = $row['products_image'];
						$p_price = $row['products_price'];


						$query = "INSERT INTO `cart`( `p_id`, `ip_address`, `user_id`, `product_title`, `products_image`, `qty`, `price`, `total_amount`) VALUES ($product_id,'192',$user_id,'$p_title','$p_image',1,$p_price,$p_price)";
						if(mysqli_query($con,$query))
						{
							echo " <div class='alert alert-success alert-dismissible fade in'>
 								   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    								  Product is added to cart <strong>Successfully...
  									</div>
  								";
  							exit();	

						}
					}
				}
				if(!isset($user_id))
					{
						echo " <div class='alert alert-info alert-dismissible fade in'>
 								   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    								  <strong>Sorry..</strong> Go and  SignUp first then you can add product your
    								  cart
  									</div>
  								";
  							exit();	
					}
					

			}//end of if statement
										
				if(isset($_POST['get_cart_items']) || isset($_POST['show_cart_details']))
				{
					$no = 1;
					$uid = $_SESSION['uid'];
					$query = "SELECT * FROM  cart WHERE user_id = '$uid'";
					$result = mysqli_query($con,$query);
					$amount=0;
					while ($row = mysqli_fetch_assoc($result)) {
						
						$id =$row['p_id'];
						$p_image = $row['products_image'];
						$p_title = $row['product_title'];
						$p_price = $row['price'];
						$total_amount = $row['total_amount'];
						$totl_array = array($total_amount);
						$sum = array_sum($totl_array);
						$amount = $amount + $sum;
						$qty = $row['qty'];
						if(isset($_POST['get_cart_items']))
						{
							echo "
								<div class='row'>
								<div class='col-lg-3'>$no</div>
								<div class='col-lg-3'><img src='images/$p_image' width='50px' height='60px'></div>
								<div class='col-lg-3'>$p_title</div>
								<div class='col-lg-3'>$p_price</div>
								</div>
						";
						$no++;
						}
						if(isset($_POST['show_cart_details']))
						{
							echo "
							<div class='row'>
								<div class='col-md-2'>
									<div class='btn-group'>
										<a href='#' remove_id='$id' class='btn btn-danger remove'><span class='glyphicon glyphicon-trash'></span></a>
										<a href='#'update_id='$id'  class='btn btn-primary update'><span class='glyphicon glyphicon-ok-circle'></span></a>
									</div>
								</div>
								<div class='col-md-2'><img src='images/$p_image' width='60px' height='60px'></div>
								<div class='col-md-2'>$p_title</div>
							<div class='col-md-2'><input type='text' class='form-control qty' pid='$id' id='qty$id' value='$qty' name=''></div>
								
								<div class='col-md-2'><input type='text' class='form-control price' id='price$id' pid='$id' value='$p_price' name='' disabled></div>
								<div class='col-md-2'><input type='text' class='form-control total' pid='$id' id='total$id' value='$total_amount' name='' disabled></div>
							</div>
							";

						}
						
					}//end of while loop
					if(isset($_POST['show_cart_details']))
					{
						echo "
						<div class='pull-right' style='margin-right:8px;'>
							<b>Total &#8377; $amount </b>
							</div><br><br>
						";
						
					}
					echo '
						<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
							  <input type="hidden" name="cmd" value="_cart">
							  <input type="hidden" name="business" value="sonustore123@gmail.com">
							  <input type="hidden" name="upload" value="1"> ';
							  $x = 0;	
							  $uid = $_SESSION['uid'];
							  $query  ="SELECT * FROM cart WHERE user_id = '$uid' ";
							  $result = mysqli_query($con,$query);
							  while ($row = mysqli_fetch_assoc($result)) {
							  	$x++;
							  
							  echo' 
							  <input type="hidden" name="item_name_'.$x.'" value="'.$row['product_title'].'">
							  <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
							  <input type="hidden" name="amount_'.$x.'" value="'.$row['price'].'">
							  <input type="hidden" name="quantity_'.$x.'" value="'.$row['qty'].'">';
							  
							  }
							  echo '
							  <input type="hidden" name="return" value="https://sonukumar9877808072.000webhostapp.com/payment_success.php">
							  <input type="hidden" name="cancel_return" value="https://sonukumar9877808072.000webhostapp.com/profile.php">
							  <input type="hidden" name="currency_code"  value="USD">
							  <input type="hidden" name="custom" value="'.$uid.'">
							  <input type="image" style="float:right;"  name="submit"
							    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
							    alt="PayPal - The safer, easier way to pay online">
						</form>

					';


				}
				if(isset($_POST['remove_from_cart']))
				{
					$pid = $_POST['pid'];
					$uid = $_SESSION['uid'];
					$query = "DELETE FROM  cart WHERE user_id ='$uid' AND p_id ='$pid' ";
					$result  =  mysqli_query($con,$query);
					if($result)
					{
						echo " <div class='alert alert-success alert-dismissible fade in'>
 								   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    								  <strong> Product is removed from cart Continue Shopping...</strong> 
    							</div>
  								";
  							exit();
					}

				}
				if(isset($_POST['update_from_cart']))
				{
					$p_id = $_POST['pid'];
					$uid = $_SESSION['uid'];
					$p_qty = $_POST['p_qty'];
					$p_price  =$_POST['p_price'];
					$p_total   = $_POST['p_total'];
					$query = "UPDATE cart set  qty = '$p_qty', price = '$p_price', total_amount ='$p_total' WHERE user_id = '$uid' AND p_id = '$p_id' ";
					if(mysqli_query($con,$query))
					{
						echo " <div class='alert alert-success alert-dismissible fade in'>
 								   <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    								  <strong> Cart Updated Successfully...</strong> 
    							</div>
  								";
  							exit();
					}

				}
				if (isset($_POST['get_cart_count']) AND isset($_SESSION['uid'])) {
					$query = "SELECT * FROM cart";
					$result = mysqli_query($con,$query);
					$num_rows = mysqli_num_rows($result);
					echo $num_rows;
					# code...
				}

				


?>