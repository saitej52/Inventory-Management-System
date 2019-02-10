<DOCTYPE html>
	<html>
		<head>
			<title>Sign Up Credentials</title>
			<meta charset="UTF8" description="This shows a signup credentials">
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
				$address = $_POST["address"];
				$pincode = $_POST["pincode"];
				$cpassword = $_POST["cpassword"];

				if($password==$cpassword)
				{
					$conn = mysqli_connect("localhost","root","","inventory");
					$username = $_POST["username"];
					$password = $_POST["password"];
					$address = $_POST["address"];
					$pincode = $_POST["pincode"];
					$phone = $_POST["phone"];
					mysqli_query($conn,"select * from login where username = '".$username."';");
					$rows = mysqli_affected_rows($conn);
					if($rows!=1)
					{
						mysqli_query($conn,"insert into login values ('".$username."','".$password."','".$address."','".$pincode."','".$phone."');");
						echo("<br> Account created successfully <br>");
					}
					else
					{
						echo("<br> User Already Exist <br>");
						echo("<a href='file:///C:/Users/sunka/website/signup.html'>Create an account again!</a>");
					}
				}
				else
				{
					echo("<br> You have typed wrong password <br>");
					echo("<a href='file:///C:/Users/sunka/website/signup.html'>Create an account again!</a>");
				}
			
		
			?>
			<br>
			<h7> Have an account! <a href="file:///C:/Users/sunka/website/cover.html">Login now! </a></h7>
		</div>
		</body>
	</html>