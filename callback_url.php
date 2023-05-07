<?php
session_start();
	include("connection.php");
	
	
 		header("Content-Type: application/json");

     $response = '{
         "ResultCode": 0, 
         "ResultDesc": "Confirmation Received Successfully"
     }';
 
     // DATA
     $mpesaResponse = file_get_contents('php://input');
 
     // log the response
     $logFile = "M_PESAConfirmationResponse.json";
 
     // write to file
     $log = fopen($logFile, "a");
 
     fwrite($log, $mpesaResponse);
     fclose($log); 
	 
	 //processing the Mpesa json response
	 $mpesaResponse = file_get_contents('M_PESAConfirmationResponse.json');
	 $callbackContent = json_decode($mpesaResponse, true);
	 
	 $Resultcode = $callbackContent->Body->stkCallback->ResultCode;
	 $CheckoutRequestID = $callbackContent->stkCallback->CheckoutRequestID;
	 $Amount = $callbackContent->Body->stkCallback->Item[0]->Value;
	 $MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
	 $PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;
     $formatedPhone = str_replace("254", "0" , $PhoneNumber);
	 if ($ResultCode == 0){
		 
	//connect DataBase
     $con = mysqli_connect("localhost","root","","login_mpay_db");
	 
	 //check connection
	 if ($con->connect_error){
		die("<h1>Connection failed:</h1>" . $con->connect_error);		
	 } else {
		 $sql = "INSERT INTO 'dataresponce' (CheckoutRequestID, Resultcode, Amount, MpesaReceiptNumber, PhoneNumber)
		 VALUES ('$CheckoutRequestID','$Resultcode','$Amount','$MpesaReceiptNumber','$PhoneNumber')";
		 
		 if ($con->query($sql) === TRUE)
		 {
			 echo "Record inserted successfully";
			 }
			 else {
				 echo "Error inserting record: " . $con->error;
				 }
// Close the database connection
$con->close();
	    } 
        }
echo $response;