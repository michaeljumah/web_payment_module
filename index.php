<?php
session_start();
	include("connection.php");
	include("function.php");
	
	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
<title>M-PAY</title>
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<style type="text/css">
	
	#button_pay{
		padding: 10px;
		width: 70px;
		color:white;
		background-color: green;
		border: none;
		margin: auto;
		text-align: center
		}
	#text_pay{
		height: 20px;
		border-radius: 5px;
		padding: 5px;
		border: solid thick green;
		background-color: white;
		width: 200px;
		}
	#box_pay{
		background-color: #eaedf4;//#90EE90;
		border: solid thick green;
		margin: auto;
		width: 200px;
		padding: 100px;
	}
	.mpesa {
        background-color: green !important;
		padding: 15px;
		width: 70px;
		margin: auto;
	}
	
</style>
<a href="logout.php">Logout</a>


<br>
hello, <?php echo $user_data['user_name']; ?>
<h1 align="center";>M-PAY</h1>
<div id="box_pay">
		
		<form action="stkpay.php" method="post">
			<img src="images/M-PESA_LOGO.png" align:"center" class="mr-3" height="75" /><br><br>
			Amount:<input id="text_pay" type="number" name="amount" placeholder="Enter Amount" required><br><br>
			Phone Number:<input id="text_pay" type="number" name="phone" placeholder="Phone Number" required><br><br>
			<input id="button_pay" type="submit" value="PAY"><br><br>
			
			<a href="otherpayment.php">Use other payment methods?</a>
		</form>
	</div>
</body>
</html>