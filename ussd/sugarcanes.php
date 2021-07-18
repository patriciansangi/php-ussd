sugarcanes.php
<?php 
require('sql_connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

	<?php

	  $records = $sqliCon->query("SELECT phone_number, name, number_of_sugarcanes FROM members,sugarcanes WHERE sugarcanes.member_id = members.id");

	 ?>

	<div class="container">

		<h2>Sugarcane consumption</h2>
		<hr>
		<table class="table">

			<thead>
				<th>Phone Number</th> <th>Name</th> <th>Sum sugarcanes</th>
			</thead>

			<tbody>
				 <?php

				   if($records){

				   	 foreach ($records as $key => $value) {

				   	 	$phone = $value["phone_number"];
				   	 	$name = $value["name"];
				   	 	$total = $value["number_of_sugarcanes"];
				   	 	 echo "
				   	 	 <tr> 
				   	 	    <td>$phone </td>
				   	 	    <td>$name </td>
				   	 	    <td>$total </td>
 
				   	 	  </tr>
				   	 	 ";
				   	 }




				   }else{
				   	echo "Bad queery: ".$sqliCon->error;
				   } 


				  ?>
			</tbody>


		</table>
	</div>



</body>
</html>