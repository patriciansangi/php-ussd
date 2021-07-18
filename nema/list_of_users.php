list_of_users.php
<!DOCTYPE html>
<html>

<?php require('mysqli_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Users</title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

	<?php include 'header.php'; 

	  $users = $sql_connection->query("SELECT members.ID,members.NAME,members.PHONE_NUMBER,members.EMAIL_ADDRESS,districts.NAME,trees.number_of_trees,tree_types.type_of_trees AS district_name,number_of_trees FROM users,districts WHERE members.DISTRICT_ID = districts.ID");

	?>

    <main class="py-4">
        <div class="container">

        	<h2>List of Users</h2>
        	<hr>

        	<table class="table table-striped table-hover">
        		<thead>
        			<th>ID</th>
        			<th>NAME</th>
        			<th>PHONE</th>
        			<th>EMAIL</th>
        			<th>DISTRICT</th>
        		</thead>

        		<tbody>     			
        			<?php 

        			  foreach ($users as $key => $value) {

        			  	$id = $value["ID"];
        			  	$name = $value["NAME"];
        			  	$phone = $value["PHONE_NUMBER"];
        			  	$email = $value["EMAIL_ADDRESS"];
        			  	$district = $value["district_name"];

        			  	echo "
        			  	<tr>
        			  	  <td> $id</td>  
        			  	  <td>$name</td>  
        			  	  <td>$phone</td>  
        			  	  <td> $email</td>  
        			  	  <td> $district</td>  
        			  	</tr>
        			  	";
        			 
        			  	 
        			  }

        			 ?>
        		</tbody>
        	</table>


        </div>

    </main>
</body>
</html>