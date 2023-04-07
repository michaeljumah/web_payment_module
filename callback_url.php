<?php
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
	 $callbackContent = json_decode($mpesaResponse);
	 
	 $Ressultcode = $callbackContent->Body->stkCallback->ResultCode;
	 $CheckoutRequestID = $callbackContent->stkCallback->CheckoutRequestID;
	 $Amount = $callbackContent->Body->stkCallback->Item[0]->Value;
	 $MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
	 $PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Va
     $formatedPhone = str_replace("254", "0" , $PhoneNumber);
	 if (ResultCode == 0){
		 
	//connect DataBase
     $conn = mysqli_connect("localhost","root","","login_mpay_db");
	 
	 //check connection
	 if ($conn->connect_error){
		die("<h1>Connection failed:</h1>" . $conn->connect_error);		
	 } else {
		 
		 $insert = $conn->query("INSERT INTO dataResponce(CheckoutRequestID,ResultCode,amount,MpesaReceiptNumber,PhoneNumber)");
		 $conn = null;
	    }
	    }
	 
	 
     echo $response;