types of trees.php

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NEMA REGISTER</title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

	<?php include 'header.php'; ?>


        <main class="py-4">
            <div class="container">

            	<h2>Types of Trees</h2>
            	<hr>

            	<form method="POST" action="save_types_of_trees.php">

            		<div class="row">
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">

            				<label>Tree Name</label><br>
            				<input type="text" name="Tree Name" class="form-control">
            				<hr>
            				<button type="submit" class="btn btn-success">Save types of trees</button>
            			 
            			</div>
            			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            			 
            			</div>
            		</div>            		

            	</form>

            	<hr>

            	<table class="table">
            		<thead>
            			<th>ID</th> <th>Tree Name</th>
            		</thead>

            		<tbody>
            			 <?php require('save_types_of_trees.php') ?>
            		</tbody>
            	</table>


            </div>
        </main>

    </body>
</html>