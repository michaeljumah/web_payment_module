<?php
session_start();
	include("connection.php");
	include("function.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//SOMETHING WAS POSTED
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			
			$result = mysqli_query($con,$query);
			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("location: index.php");
						die;
					}
				}
			}
			echo "invalid user name or password";
		}else
		{
			echo "invalid username or password";
		}
	}




?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
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
		background-color: green;
		border: none;
		
		}
		
	#box{
		background-color: #eaedf4;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	.mpesa {
        background-color: #eaedf4 !important;
		padding: 15px;
		width: 70px;
		margin: auto;
	}
	</style>
	<div id="box">
		
		<form method="post">
			<div class="mpesa"><span><b><h2> Login </h2></b></span></div>
			username:<input id="text" type="text" name="user_name" placeholder="Username" required><br><br>
			password:<input id="text" type="password" name="password" placeholder="Password" required><br><br>
			<input id="button" type="submit" value="Login"><br><br>
			
			<a href="signup.php">Click to Signup</a>
		</form>
	</div>
	
</body>
</html>