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
		padding: 70px;
	}
	.mpesa {
        background-color: green !important;
		padding: 15px;
		width: 50px;
		margin: auto;
	}
	
</style>

<br>
<i><b>Hello, <?php echo $user_data['user_name']; ?></b></i>
<div class="mpesa"><span>M-PAY</span></div>
<div id="box_pay">

		<form action="./stkpay.php" method="POST" style="
			padding-top: 0px;
			padding-bottom: 10px;
			margin-bottom: 30px;
			border-bottom-width: 20px;
			width: 200px;
			height: 200px;
			padding-right: 20px;
			border-right-width: 10px">
			<img src="images/M-PESA_LOGO.png" align:"center" class="mr-3" height="40" /><br><br>
			Amount:<input id="text_pay" type="number" name="amount" placeholder="Enter Amount" required><br><br>
			Phone Number:<input id="text_pay" type="number" name="phone" placeholder="Phone Number" required><br><br>
			<button id="button_pay" type="submit" name="submit" value="submit">PAY</button><br><br>
			<a href="otherpayment.php">Use other payment methods?</a><br><br>
			
		</form>
	</div>
<a href="record.php" ><button class="btn btn-link btn-floating mx-1">RECORDS</button></a><br><br>
<button><a href="logout.php"><b><i>Logout</i></b></a></button>
</body>
</html>