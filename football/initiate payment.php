
  
<?php 
require 'config.php';

$dbConnection->query("CREATE TABLE IF NOT EXISTS payments(id int(11) not null auto_increment, primary key(id), name varchar(30) not null, phone_number varchar(15), tx_ref varchar(50) not null, price double(10,2), plan_id int(11) not null, foreign key(plan_id) references ticket(ticket_id) )  ");
//if($table_string) echo "Table created";
//else 
	//echo $dbConnection->error;


$name = $_POST['name'];
$tx_ref = $_POST['tx_ref'];
$amount = $_POST['amount'];
$phone_number = $_POST['phone_number'];
$status = "Pending";

$check = $dbConnection->query("INSERT INTO payments(name,phone_number,tx_ref,price, plan_id,status)VALUES('$name','$phone_number','$tx_ref','$amount','$plan_id','$status')");

if($check) echo $tx_ref;

