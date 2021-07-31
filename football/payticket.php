<!DOCTYPE html>
<?php
require 'config.php';
?>
<html> 
	<head>
		<meta charset="utf-8">
		<title>Buy Tickets</title>
		<link rel="stylesheet" type="text/css" href="css/app.css">
	</head>
	<body>

		<span id="app"></span>

		<?php
		   
		   $ticket_id = $_GET['ticket_id'];

    	   $ticket = "SELECT * FROM ticket WHERE ticket_id = $ticket_id";

    	   $records = $dbConnection->query($ticket); 

    	   foreach ($records as $key => $value) {

    		  	$ticket = $value['ticket_id'];
    		  	$name = $value['name'];
    		  	$price = $value['price'];

	        }


    	 ?>

	    <main class="py-4">
	        <div class="container">

	        	<h1>Foootball match (Uganda Cranes Vs. Harampe Stars)</h1><br>
	        	<h4><?php echo $name ?> @ <?php echo $price ?></h4>
	        	<hr>

	        	

	        	<div class="row">
	        		 
	        		 <div class="col-md-6 col-sm-12">

	        		 	<img src="images/airtelmoney(1).jpeg" width="150px" height="150px">

	       

	        		 	<img src="images/credit_card.png" width="150px" height="150px">

	        		 	<hr>

	        		 	<form>
						  <script src="https://checkout.flutterwave.com/v3.js"></script>
						  <label>Name</label>
						  <input type="text" id="name" class="form-control">

						  <input type="hidden" id="ticket_id" value="<?php echo $ticket_id ?>">

						  <input type="hidden" id="amount" value="<?php echo $price ?>">

						  <label>Phone number</label>
						  <input type="text" id="phone_number" class="form-control">

						  <label>Email address</label>
						  <input type="text" id="email_address" class="form-control">

						  <hr>

						  <button type="button" id="make_payment" class="btn btn-success">Pay Now</button>
						</form>

						1. save the data but set it to pending [status]<br>
					    2. launch the payment widget<br>
					    3. After payment return the staus and verify the trasaction<br>
					    4. Send the SMS to the customer<br>
	        		 	
	        		 </div>	        	 
	        		
	        	</div>

	                

	        </div>
	    </main>

	    <script src="js/app.js"></script>

	    <script>  	
           $(document).ready( function(){

           	  $("#make_payment").click(function(){

           	  	$.ajax({

			            type: "POST",

			            url: "initiate_payment.php",

			        data: {  

			          tx_ref: "<?php echo "Football-".time() ?>",

			          ticket_id: $("#ticket_id").val(), 

			          amount: $("#amount").val(),	

			          name: $("#name").val(),	

			          phone_number: $("#phone_number").val(),			            


			        },
			          success: function(tx_ref){

			          	console.log(tx_ref);

			          	makePayment(tx_ref);

			        }
			    });
           	  })
           })


           function makePayment(tx_ref){

           	 FlutterwaveCheckout({
			      public_key: "",
			      tx_ref: tx_ref,
			      amount: $("#amount").val(),
			      currency: "UGX",
			      country: "UG",
			      payment_options: "card,mobilemoneyuganda",
			      redirect_url:  
			        "verifypayment.php",
			      meta: {
			         
			      },
			      customer: {
			        email: $("#email_address").val(),
			        phone_number: $("#phone_number").val(),
			        name: $("#name").val(),
			      },
			      callback: function (data) {
			        console.log(data);
			      },
			      onclose: function() {
			        // close modal
			      },
			      customizations: {
			        title: "Football match (Uganda Cranes Vs. Harampe Stars)",
			        description: "Payment for football match",
			        logo: "https://seeklogo.com/images/U/Uganda_Football_Association-logo-8C610E2BF6-seeklogo.com.png",
			      },
			    });


           }

	    </script>





	</body>
</html>