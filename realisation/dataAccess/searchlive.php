<?php

include '../dataAccess/config.php';
$return = '';
if (isset($_POST["query"])) {

	$search = $_POST['query'];
	$query = "SELECT * FROM promotion WHERE name LIKE '{$search}%' OR id LIKE '{$search}%'"; //if input is set then this query will run ,this percentage symgol represents zero one or multiple characters means(if we type a then any number of characters can occur after a)
	$result = mysqli_query(getConnection(), $query);
	// 	$search = mysqli_real_escape_string(getConnection(), $_POST["query"]);
	// 	$query = "SELECT * FROM promotion
	// 	WHERE name  LIKE '%".$search."%'";}
	// else
	// {
	// 	$query = "SELECT * FROM promotion";
	// }
	// $result = mysqli_query(getConnection(), $query);
	if (mysqli_num_rows($result) > 0) { //number of rows in DB table
?>

		<table class="table mb-4">
			<thead>
				<tr>
					<th scope="col">No.</th>
					<th scope="col">Nom de la promotion</th>

					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($result)) {
				?>
					<tr>
						<th scope="row"><?= $row['id'] ?></th>
						<td><?= $row['name'] ?></td>

						<td style="width:216px">


							<button class="btn btn-danger"> <a href="delete.php?id=<?= $row['id'] ?>">Supprimer</a></button>
							<button class="btn btn-success ms-1"><a href="edit.php?id=<?= $row['id'] ?>">Modifier</a> </button>
						</td>
					</tr>

				<?php } ?>
			</tbody>
		</table>

<?php
	} else {
		echo "<h6 class= 'text-danger text-center mt-3'> no data found </h6>";
	}
}
?>