
  <?php
require 'config.php';

require 'AfricasTalkingGateway.php';

$status = $_GET['status'];

$tx_ref = $_GET['tx_ref'];

$readPayment = $dbConnection->query("SELECT * FROM payments WHERE tx_ref = '$tx_ref'");

$results = $readPayment->fetch_assoc();

$phone_number = $results['phone_number'];

$name = $results['name'];

$seatNumber = "VIP-05";

if($status == "successful"){

	$dbConnection->query("UPDATE payments SET status='$status' WHERE tx_ref='$tx_ref' ");

	$message = "Hello ".$name." Thank you for paying for the football match, your seat number is ".$seatNumber.", The match is on 1st May 2021 at 4:00pm";	

	$apikey     = "bbe5dfe87cb8f0398b8b75d4be7ec0364bc779b9c7ac03bcf924d0ffa7177fe6";	

	$gateway    = new AfricasTalkingGateway("patriciansangi", $apikey,);

	$gateway->sendMessage($phone_number, $message);

	header("Location:thank_you.php?message='Thank you for paying'");

}else{

	header("Location:thank_you.php?message='You payment failed' ");

}

