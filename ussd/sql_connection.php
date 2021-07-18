sql_connection.php
<?php

$sqliCon= new mysqli("localhost","root","");

//if ($sqliCon->connect_error) {
	//die("connection failed: " .
//}
//connect_error);

//echo "Connected successfully";


$sqliCon->query("CREATE DATABASE IF NOT EXISTS ussd");

mysqli_select_db($sqliCon, "ussd");

$sqliCon->query("CREATE TABLE IF NOT EXISTS members(id int( 11) not null auto_increment, PRIMARY KEY(id), phone_number varchar(20) not null unique, name varchar(50) not null)");


$sqliCon->query("CREATE TABLE IF NOT EXISTS sugarcanes(id int( 11) not null auto_increment, PRIMARY KEY(id), member_id int(11) not null, number_of_sugarcanes int(11) not null, FOREIGN KEY(member_id) REFERENCES members(id))");
