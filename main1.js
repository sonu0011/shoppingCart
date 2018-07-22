$(document).ready(function(){
	category();	
	brands();
	products();
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
		$('body').delegate('#product_id', 'click', function(event) {
			event.preventDefault();
			console.log("dsafs");
		});	
	});
			

