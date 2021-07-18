districts.php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Districts</title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

	<?php include 'header.php'; ?>


        <main class="py-4">
            <div class="container">

            	<h2>Districts</h2>
            	<hr>

            	<form method="POST" action="save districts.php">

            		<div class="row">
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

            				<label>Name</label><br>
            				<input type="text" name="district_name" class="form-control">
            				<hr>
            				<button type="submit" class="btn btn-success">Save district</button>
            			 
            			</div>
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            			 
            			</div>
            		</div>            		

            	</form>

            	<hr>

            	<table class="table">
            		<thead>
            			<th>ID</th> <th>Name</th>
            		</thead>

            		<tbody>
            			 <?php require('save districts.php') ?>
            		</tbody>
            	</table>


            </div>
        </main>

    </body>
</html>