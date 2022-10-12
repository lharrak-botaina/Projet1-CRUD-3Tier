<?php
    include ("business/PromoBusiness.php");
    $promoBLL= new PromoBLL();
    $data = $promoBLL->GetAllPromos();
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
        <input type="text" id="live_search" placeholder="Search">
        <div id="searchResult"></div>
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
<script type="text/javascript">
    $(document).ready(function () {
        //when user type any value then that value will be stored in a var
        $("#live_search").keyup(function () {
            var input = $(this).val();
            //if this input not empty then using ajax method 
            if(input!=""){
                $.ajax({
                    url:"business/liveSearch.php",
                    method:"POST",
                    data:{input:input},


                    success:function(data){
                        $('#searchResult').html(data);
                    }
                });
            }else{
                $('#searchResult').css("display","none");
            }
        });
        
    })
</script>






<!-- <script>
    https://www.webslesson.info/2016/03/ajax-live-data-search-using-jquery-php-mysql.html
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"business/liveSearch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#searchResult').html(data);
   }
  });
 }
 $('#live_search').keyup(function(){
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
</script> -->






















