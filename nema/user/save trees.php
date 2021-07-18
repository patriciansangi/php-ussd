save trees.php
<?php
require('mysqli_connection.php');

$results = $mysqli_connection->query("SELECT number_of_trees FROM trees ORDER BY ID ASC");

foreach ($results as $key => $value) {

	
	$name = $value["NAME"];

	echo "
	<tr> 
	   <td> $id </td>
	   <td> $name </td>
	</tr>
	";
	 
}
//header("Location:trees.php");