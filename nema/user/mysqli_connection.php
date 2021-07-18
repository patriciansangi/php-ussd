
<?php
$mysqli_connection =new mysqli("localhost","root","");
//if ($mysqli_connection->connect_error) {
	//die("connection failed: " .
//$mysqli_connection->connect_error);
//echo "Connected successfully";

$mysqli_connection->query("CREATE DATABASE IF NOT EXISTS nema_register");

mysqli_select_db($mysqli_connection,"nema_register");




$mysqli_connection->query("CREATE TABLE districts(district_id int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(district_id),district_name varchar(20) NOT NULL UNIQUE)");

$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('WAKISO')");
$mysqli_connection->query("DELETE FROM districts where district_id=1"); 


$insert = $mysqli_connection->query("INSERT INTO districts(district_name) VALUES('BUSIA')");
if($insert) echo "inserted successfully"; 
else $mysqli_connection->error;	


$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('KAMPALA')");

$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('LUGAZI')");

$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('NANSANA')");

$mysqli_connection->query("INSERT INTO districts(district_name) VALUES('NABBINGO')");

$delete=$mysqli_connection->query("DELETE FROM districts WHERE district_name = 'WAKISO'");
if($delete) echo "inserted successfully"; 
else $mysqli_connection->error;	




$mysqli_connection->query("CREATE TABLE tree_types(treetype_id int(11) NOT NULL ,PRIMARY KEY(treetype_id),treetype_name varchar(20) NOT NULL UNIQUE)");

$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name) VALUES(40,'muvule')");

$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name) VALUES(41,'mutssssuba')");

$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name) VALUES(42,'musabu')");

$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name) VALUES(43,'musizi')");

$mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name) VALUES(44,'eucaplitus')");

$insert = $mysqli_connection->query("INSERT INTO tree_types(treetype_id,treetype_name) VALUES(42,'musabu')");
if($insert) echo "inserted successfully"; 
else $mysqli_connection->error;	


$mysqli_connection->query("UPDATE  tree_types SET treetype_name='mutuba' WHERE treetype_id=41");




$mysqli_connection->query("CREATE TABLE members(member_id int(11) NOT NULL ,PRIMARY KEY(member_id),member_name varchar(20) NOT NULL UNIQUE,PASSWORD varchar(100) not null,EMAIL_ADDRESS VARCHAR(30) NOT NULL UNIQUE,district_id int(11) NOT NULL, FOREIGN KEY (district_id) REFERENCES districts(district_id))");


$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS,district_id) VALUES(14,'patricia','990','nsangi@theinternshipug.com','7')");

	

$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS,district_id) VALUES(15,'lyn','991','lyn@theinternshipug.com','8')");




$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS,district_id) VALUES(16,'flavia','992','flavai@theinternshipug.com','9')");

 


$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS,district_id) VALUES(17,'ritah','993','ritah@theinternshipug.com','10')");



$insert = $mysqli_connection->query("INSERT INTO members(member_id,member_name,password,EMAIL_ADDRESS,district_id) VALUES(18,'patra','994','patra@theinternshipug.com','11')");



$mysqli_connection->query("CREATE TABLE trees(tree_id int(11) NOT NULL AUTO_INCREMENT,PRIMARY KEY(tree_id),member_id int(11) NOT NULL,foreign key(member_id)REFERENCES members(member_id) ,district_id int(11) NOT NULL, FOREIGN KEY (district_id) REFERENCES districts(district_id),number_of_trees int(50) not null,treetype_id int(11) NOT NULL,FOREIGN KEY (treetype_id) REFERENCES tree_types(treetype_id))");


$delete=$mysqli_connection->query("DELETE FROM districts WHERE district_name = 'WAKISO'");
if($delete) echo "inserted successfully"; 
else $mysqli_connection->error;	


 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(17,10,400,44)");



 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(14,7,600,40)");

 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(15,8,500,41)");

 $mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(16,9,700,42)");
$mysqli_connection->query("INSERT INTO trees(member_id,district_id,number_of_trees,treetype_id) VALUES(18,11,800,43)");






















