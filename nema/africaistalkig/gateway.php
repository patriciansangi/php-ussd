gateway.php
<?php
require('africaistalking.php');
 
$username   = "sandbox";            
$apikey     = "bbe5dfe87cb8f0398b8b75d4be7ec0364bc779b9c7ac03bcf924d0ffa7177fe6";

$recipients = "+256772890737";

$gateway    = new AfricasTalkingGateway($username, $apikey,"sandbox");

$gateway->sendMessage($recipients, "It has worked now");  

