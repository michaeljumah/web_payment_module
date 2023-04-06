<?php
// Connect to the MySQL database
$host = 'localhost';
$user = 'username';
$password = 'password';
$database = 'database_name';

$conn = new mysqli($host, $user, $password, $database);

// Select the transaction information from the database
$sql = "SELECT * FROM transaction_info";

$result = $conn->query($sql);

// Output the transaction information in an HTML table
if ($result->num_rows > 0) {
    echo "<table><tr>
	<th>Merchant Request ID</th>
	<th>Checkout Request ID</th>
	<th>Response Code</th>
	<th>Response Description</th>
	<th>Customer Message</th>
	</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
		<td>".$row["merchant_request_id"]."</td>
		<td>".$row["checkout_request_id"]."</td>
		<td>".$row["response_code"]."</td>
		<td>".$row["response_description"]."</td>
		<td>".$row["customer_message"]."</td>
		</tr>";
    }
    echo "</table>";
} else {
    echo "No transactions found";
}

// Close the database connection
$conn->close();
