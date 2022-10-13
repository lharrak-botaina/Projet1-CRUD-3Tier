<?php
    include ("business/PromotionBusiness.php");
    $promotionBLL= new PromotionBLL();
    $data = $promotionBLL->GetAllPromotions();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <title>promotion manager</title>
</head>
<body>

    <div>
    <div class="container-fluid">       
    <div class="content-wrapper">
        <div class="container">
            
            <div class="row">
            <div class="col-xs-12">
                <input type="text" name="search" id="search" placeholder="Search" class="form-control" />
                <div id="result"></div>
            </div>
            </div>	
        </div>
    </div>
        <a href="add.php">add Promotion </a>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>action </th>
            </tr>
            <?php
                    foreach($data as $value){
            ?>

            <tr>
                <td><?= $value->getId() ?></td>
                <td><?= $value->getName() ?></td>
               
                <td>
                    <a href="edit.php?id=<?php echo $value->getId() ?>">update</a>
                    <a href="delete.php?id=<?php echo $value->getId() ?>">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
        
    </div>




</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
	<script>
	$(document).ready(function(){
		load_data(); //The load() method loads data from a server and puts the returned data into the selected element.
		function load_data(query)
		{
			$.ajax({
			url:"business/searchlive.php",
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
	</script>
</head>
<body>

</div>

















