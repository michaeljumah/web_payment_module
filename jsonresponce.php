<?php
// Parse the response JSON
$response = json_decode($responseJson, true);

// Extract the relevant information
$merchantRequestID = $response['MerchantRequestID'];
$checkoutRequestID = $response['CheckoutRequestID'];
$responseCode = $response['ResponseCode'];
$responseDescription = $response['ResponseDescription'];
$customerMessage = $response['CustomerMessage'];

// Connect to the MySQL database
$host = 'localhost';
$user = 'username';
$password = 'password';
$database = 'database_name';

$conn = new mysqli($host, $user, $password, $database);

// Insert the information into the database
$sql = "INSERT INTO transaction_info (merchant_request_id, checkout_request_id, response_code, response_description, customer_message) VALUES ('$merchantRequestID', '$checkoutRequestID', '$responseCode', '$responseDescription', '$customerMessage')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error inserting record: " . $conn->error;
}

// Close the database connection
$conn->close();
