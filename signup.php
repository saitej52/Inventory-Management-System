<DOCTYPE html>
	<html>
		<head>
			<title>Sign Up Credentials</title>
			<meta charset="UTF8" description="This shows a signup credentials">
            <link rel="stylesheet" href="css/bootstrap.css"></link>
		</head>
		<body>
			<center>
			<h1> Inventory Management System </h1>
		</center>
		<div align="center">
			<br><br><br><br><br>
			<h1> Sign Up</h1>
			<br><br>
			<img src="user.png" style="width:100px;height:100px;"/>
			<br><br>
			<?php
				$username = $_POST["username"];
				$password = $_POST["password"];
				$cpassword = $_POST["cpassword"];
				$dob = $_POST["dob"];
				$name = $_POST["Name"];
				if($password==$cpassword)
				{
					$conn = mysqli_connect("localhost","root","","inventory");
					$username = $_POST["username"];
					$password = $_POST["password"];
					$dob = $_POST["dob"];
					$name = $_POST["Name"];
					$sec = $_POST["security"];
					mysqli_query($conn,"select * from login where username = '".$username."';");
					$rows = mysqli_affected_rows($conn);
					if($rows!=1)
					{
						$exec = "insert into login values ('".$username."','".$password."','".$dob."','".$name."','".$sec."');";
						mysqli_query($conn,$exec);
						echo("<br> Account created successfully <br>");
					}
					else
					{
						echo("<h3>User Already Exist</h3> <br>");
						echo("<a href='http://localhost/Project/Signup.html'>Create an account again!</a>");
					}
				}
				else
				{
					echo("<br> You have typed wrong password <br>");
					echo("<a href='http://localhost/Project/Signup.html'>Create an account again!</a>");
				}
			
		
			?>
			<br>
			<h7> Have an account! <a href="http://localhost/Project/home.html">Login now! </a></h7>
		</div>
		</body>
	</html>