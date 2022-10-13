
	$(document).ready(function(){
		load_data(); //The load() method loads data from a server and puts the returned data into the selected element.
		function load_data(query)
		{
			$.ajax({
			url:"dataAccess/searchlive.php",
			method:"POST",
			data:{query:query},
           
			success:function(data)
			{
				$('#result').html(data);
			}
			});
		}
		$('#search').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();
		}
		});
	});
	