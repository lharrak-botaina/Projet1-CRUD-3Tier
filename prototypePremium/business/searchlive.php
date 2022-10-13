<?php
include '../dataAccess/config.php';
$return = '';
if(isset($_POST["query"]))

{

    $search = $_POST['query'];
    $query = "SELECT * FROM promotion WHERE name LIKE '{$search}%' OR id LIKE '{$search}%'";//if input is set then this query will run ,this percentage symgol represents zero one or multiple characters means(if we type a then any number of characters can occur after a)
    $result= mysqli_query(getConnection(),$query);
// 	$search = mysqli_real_escape_string(getConnection(), $_POST["query"]);
// 	$query = "SELECT * FROM promotion
// 	WHERE name  LIKE '%".$search."%'";}
// else
// {
// 	$query = "SELECT * FROM promotion";
// }
// $result = mysqli_query(getConnection(), $query);
if(mysqli_num_rows($result) > 0)
{
	$return .='
        <div class="table-responsive">
        <table class="table table bordered">
        <tr>
            
            <th>Promotion</th>
        </tr>';
	while($row1 = mysqli_fetch_array($result))
	{
		$return .= '
		<tr>
		
		<td>'.$row1["name"].'</td>
		</tr>';
	}
	echo $return;
}
else{

	echo 'No results ';
}
}
?>