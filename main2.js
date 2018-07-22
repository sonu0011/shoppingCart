$(document).ready(function(){
	category();	
	brands();
	products();
	show_cart_details();
	function category()
	{
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {request:1},
			success:function(feedback)
			{
				$('#get_cat').html(feedback);
			}

		})
		
	}
	function brands()
	{
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {brands:1},
			success:function(feedback)
			{
				$('#get_brands').html(feedback);
			}
			
		})
		
	}
	function products()
	{
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {product:1},
			success:function(feedback)
			{
				$('#get_products').html(feedback);
			}
			
		})
		
	}
	$("body").delegate('.category', 'click', function(event) {
		event.preventDefault();
		var cid = $(this).attr('cid');
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {get_selected_cat:1,cat_id:cid},
			success:function(feedback)
			{
				$('#get_products').html(feedback);
			}
			
		})
	});
	$("body").delegate('.brands', 'click', function(event) {
		event.preventDefault();
		var bid = $(this).attr('brand_id');
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {get_selected_brand:1,brand_id:bid},
			success:function(feedback)
			{
				$('#get_products').html(feedback);
			}
			
		})
	});
	$("#search_btn").click(function() {
		var keywords = $('#search').val();
		if(keywords != "")
		{
			$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {get_searched_item:1,search:keywords},
			success:function(feedback)
			{
				$('#get_products').html(feedback);
			}
			
		})
		}
	});
	$('#register').click(function()
	 {
	 		$.ajax({
			url: 'register.php',
			type: 'POST',
			data: $("form").serialize(),
			success:function(feedback)
			{
				$('#get_error').html(feedback);
				//alert(feedback);
			}

	});
	});
	$('#login').click(function(event) {
			var email  = $('#login_email').val();
			var pass = $('#login_pass').val();
			$.ajax({
			url: 'login.php',
			type: 'POST',
			data: {LoginUser:1,l_email:email,l_pass:pass},
			success:function(feedback)
			{
				if(feedback = "userfound")
				{
					window.location.href = "profile.php";
				}
				
			}	
	});
	});
	cart_count();
		$('body').delegate('#product_id', 'click', function(event) {
			event.preventDefault();
			var p_id = $(this).attr('pid');
			$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {AddCart:1,pid:p_id},
			success:function(feedback)
			{
				$("#cart_info").html(feedback);
				cart_count();
				
			}	
	});
			
		});	
		
		$("#cart_container").click(function(event) {
			$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {get_cart_items:1},
			success:function(feedback)
			{
				$("#get_cart_items").html(feedback);

				
			}	
	});
		});
		function show_cart_details() {
			$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {show_cart_details:1},
			success:function(feedback)
			{
				$("#show_cart_details").html(feedback);
				
			}	
		});
	}
	$("body").delegate('.qty', 'keyup', function(event) {
		var p_id = $(this).attr('pid');
		var qty = $("#qty"+p_id).val();
		var price = $("#price"+p_id).val();
		var total  = price * qty;
		$("#total"+p_id).val(total);
	});
	$("body").delegate('.remove', 'click', function(event) {
		event.preventDefault();
		var p_id = $(this).attr('remove_id');
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {remove_from_cart:1,pid:p_id},
			success:function(feedback)
			{
				$("#get_checkout_cart_message").html(feedback);
				show_cart_details();
				
			}


			
	});
		});
	$("body").delegate('.update', 'click', function(event) {
		event.preventDefault();
		var p_id = $(this).attr('update_id');
		var qty = $("#qty"+p_id).val();
		var price = $("#price"+p_id).val();
		var total = $("#total"+p_id).val();
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {update_from_cart:1,pid:p_id,p_qty:qty,p_price:price,p_total:total},
			success:function(feedback)
			{
				$("#get_checkout_cart_message").html(feedback);
				show_cart_details();
				
			}
		});
		
});
	page();
	function page() {
		
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {page:1},
			success:function(feedback)
			{
				$("#get_pagination").html(feedback);
				
			}
		});

	}
	$("body").delegate('#page', 'click', function(event) {
	event.preventDefault();
	var id  = $(this).attr('page');
	$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {setPage:1,product:1,pageno:id},
			success:function(feedback)
			{
				$("#get_products").html(feedback);
				
			}
		});
	
	});
	cart_count();
	function cart_count(argument) {
		$.ajax({
			url: 'action.php',
			type: 'POST',
			data: {get_cart_count:1},
			success:function(feedback)
			{
				$(".badge").html(feedback);
				
			}
		});	
	}
	});
			

