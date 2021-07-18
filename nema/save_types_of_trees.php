save_types_of_trees.php
<?php
require('mysqli_connection.php');

if (!isset($_POST['Tree Name'])) {
	echo "Name is not set";
	exit();
}


$d_name = $_POST['name'];

$sql_connection->query("INSERT INTO tree_types(NAME)VALUES('$d_name')");

header("Location:types of trees.php");