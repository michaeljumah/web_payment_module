<?php
// Connect to the MySQL database
session_start();
	include("connection.php");
//<!----	
//$host = 'localhost';
//$user = 'root';
//$password = '';
//$database = 'login_mpay_db';

//$conn = new mysqli($host, $user, $password, $database);
//----->


// Select the transaction information from the database
$sql = "SELECT * FROM dataresponce";

$result = $con->query($sql);

// Output the transaction information in an HTML table
if ($result->num_rows > 0) {
    echo "<table>
	<tr>
	<th>CheckoutRequestID</th>
	<th>Resultcode</th>
	<th>Amount</th>
	<th>MpesaReceiptNumber</th>
	<th>PhoneNumber</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>".$row["CheckoutRequestID"]."</td>
		<td>".$row["Resultcode"]."</td>
		<td>".$row["Amount"]."</td>
		<td>".$row["MpesaReceiptNumber"]."</td>
		<td>".$row["PhoneNumber"]."</td>
		</tr>";
    }
    echo "</table>";
} else {
    echo "No transactions found";
}

// Close the database connection
$con->close();
