ussd.php
<?php
header("Content-type:text/plane");

require('AfricasTalkingGateway.php');

require('sql_connection.php');

$phone_number = $_POST['phoneNumber'];

$textFromUser = $_POST['text'];

$sessionID = $_POST['sessionId'];

$serviceCode = $_POST['serviceCode'];

if(empty($textFromUser)){

	$textFromUser = "0";

}else{

	$textFromUser = "0*".$textFromUser;

}

$inputArray = explode("*", $textFromUser);

$level = count($inputArray);

switch ($level) {

	case 1:

		$response = "CON Welcome to sugarcane farms Uganda ";

	    $response .= "\n 1. Register";

	    $response .= "\n 2. Add sugarcanes";

	    echo $response;

		break;

	case 2:		// text = 0*1  OR  0*2 

		 if($inputArray[1]   ==  1) {//he wants to register// 

		 	echo "CON What is is your name?";



		 }elseif ($inputArray[1] == 2) {//he wants to add a tree

		 	$checkmembers = $sqliCon->query("SELECT * FROM members WHERE phone_number = '$phone_number' ");

		 	if($checkmembers->num_rows == 0) 

		 		echo "END User with phone_number $phone_number has no account";

		 	else{

		 		while ($results = $checkmembers->fetch_assoc()) {

		 			echo "CON ".$results['name']."\n Enter the number of sugarcanes";

		 		}

		 	}
				
					  

		 
		 }else{

		 	echo "END Invalid option";

		 }
		  
		break;

	case 3: 

	     if($inputArray[1]   ==  1) {//he wants to register// // 0*1*Charles

		 	$user_name = $inputArray[2];

		 	$saveUser = $sqliCon->query("INSERT INTO members(phone_number,name)VALUES('$phone_number','$user_name')");

		 	if($saveUser){

		 		$message = "Hello ".$user_name." Thank you for registering with Sugarcane farms Uganda";		        
				$apikey     = "bbe5dfe87cb8f0398b8b75d4be7ec0364bc779b9c7ac03bcf924d0ffa7177fe6";			 
				$gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");

				$gateway->sendMessage($phone_number, $message); 

				echo "END Thank you for registering"; 

		 	}else{

		 		echo "END Failed to register ".$sqliCon->error;

		 	}


		 }elseif ($inputArray[1] == 2) {//he wants to add a tree// // 0*2*7837

		 	$number_of_trees = $inputArray[2];

		 	$checkmembers = $sqliCon->query("SELECT id,name FROM members WHERE phone_number = '$phone_number'");

		 	if($checkmembers->num_rows == 1){
		 
		 	while ($rows = $checkmembers->fetch_assoc()) {

		 		$member_id = $rows['id'];

		 	    $member_name = $rows['name'];

		 	    $sqliCon->query("INSERT INTO trees(member_id,number_of_trees)VALUES('$member_id','$number_of_trees')");

		 	    $message = "Hello $member_name, Thank you for conserving the climate. You have recorded $number_of_sugarcanes sugarcane(s)";
			    $apikey     = "bbe5dfe87cb8f0398b8b75d4be7ec0364bc779b9c7ac03bcf924d0ffa7177fe6";			 
			    $gateway    = new AfricasTalkingGateway("sandbox", $apikey,"sandbox");
			    $gateway->sendMessage($phone_number, $message);
		 	    echo "END $message";
		 		 
		 	}

		 }else{

		 	echo "END No user found";

		 }
	 
	}  

	 
		break;
	
	default:

		echo"The option selected is not valid";

		break;
}




// Welcome message 

// Choose an option 

//   1. Register 
//   2. Add a tree 
 

// 1.  WHat is your name?
//     send them sms that they have registered 

// 2.  Check id they have registered 
//     Enter number of of trees 
//      Send a thank you message


