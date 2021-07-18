trees.php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trees</title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

	<?php include 'header.php'; ?>


        <main class="py-4">
            <div class="container">

            	<h2>Trees</h2>
            	<hr>

            	<form method="POST" action="save trees.php">

            		<div class="row">
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

            				<label>Number of trees</label><br>
            				<input type="number" name="number_of_trees" class="form-control">
            				<hr>
            				<button type="submit" class="btn btn-success">Save trees</button>
            			 
            			</div>
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            			 
            			</div>
            		</div>            		

            	</form>

            	<hr>

            	<table class="table">
            		<thead>

            		<th>ID</th>
            			 <th>number_of_trees</th>
            		</thead>

            		<tbody>
            			 <?php require('save trees.php') ?>
            		</tbody>
            	</table>


            </div>
        </main>

    </body>
</html>