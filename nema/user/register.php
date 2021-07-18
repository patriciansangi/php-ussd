register.php
<!DOCTYPE html>
<html>

<?php require('mysqli_connection.php') ?>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

	<?php include 'header.php'; ?>

    <main class="py-4">
        <div class="container">

        	<h2>REGISTER</h2>
        	<hr><br>
            
        	<form method="POST" action="save_user.php">
        		<div class="row">
        			<div class="col-md-6"

        				
        			
                    <label>Name</label>
                        <input type="text" name="person_name" class="form-control" required><br>

                        <label>password</label>
                        <input type="Password" name="password" class="form-control" required><br>

                        <label>email</label>
                        <input type="text" name="email_address" class="form-control" required><br>

                        <label>district</label>
                        <input type="number" name="districts" class="form-control" required><br>

                         <label>Phone Number</label>
                        <input type="text" name="phone_number" placeholder="+25677890737" class="form-control" required><br>

        				<?php 

        				$results = $mysqli_connection->query("SELECT  name FROM districts ORDER BY name ASC");
        				 ?>

        				<label>District</label><br>
        				<select class="form-control" name="id">

        					<?php 

        					foreach ($results as $key => $value) {

	                           
	                           $name = $value["name"];

	                           echo "<option value=$name</option>";

	                        }


        					 ?>
        					 
        				</select>

        				<br>

        				<label>Password</label><br>
        				<input type="password" name="user_password" class="form-control" required>

        				<label>Confirm Password</label><br>
        				<input type="password" name="confirm_user_password" class="form-control" required>

        				<hr>


        				<button type="submit" class="btn btn-success">Register</button>

        			</div>
        		</div>
        	</form>

        </div>
    </main>

</body>
</html>

