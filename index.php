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
	#text{
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 300px;
		}
	#button{
		padding: 10px;
		width: 100px;
		color:white;
		background-color: lightblue;
		border: none;
		}
		
	#box{
		background-color: green;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
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
		background-color: #90EE90;
		margin: auto;
		width: 200px;
		padding: 100px;
	}
</style>
<a href="logout.php">Logout</a>


<br>
hello, <?php echo $user_data['user_name']; ?>
<h1 align="center";>M-PAY</h1>
<div id="box_pay">
		
		<form method="post">
			<div style="font-size: 15px;margin: 10px; color: while;">M-PESA</div>
			Amount:<input id="text_pay" type="text_pay" name="user_name"><br><br>
			<input id="button_pay" type="submit" value="M-PAY"><br><br>
			
			<a href="otherpayment.php">Use other payment methods?</a>
		</form>
	</div>
</body>
</html>