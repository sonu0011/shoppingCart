$(document).ready(function(){
	category();
	alert('dfs');	
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
});