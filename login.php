<!DOCTYPE html>
<html>
<head>
	<title> Login Credentials </title>
	<meta charset="UTF8" description="This shows a login credentials">
</head>
<body>
	<?php
		

		$conn = mysqli_connect("localhost","root","","inventory");
		if(!$conn)
		{
			echo("<br> Connection Not Established <br>");
		}
		else
		{
			echo("<br> Connection Established <br>");
		}

		$username = $_POST["username"];
		$password = $_POST["password"];

		mysqli_query($conn,"select * from login where username = '".$username."' and password = '".$password."';");
		$rows = mysqli_affected_rows($conn);
		if($rows==1)
		{
			if($username=="admin")
			{
				echo("<br> Welcome Admin <br>");
			}
			else
			{
				echo("<br> Welcome Customer <br>");
			}
		}
		else
		{
			echo("<br> Account doesn't exist... <br>");
			echo("<a href='file:///C:/Users/sunka/website/signup.html'>Create an account now!</a>");
		}
	?>
</body>

</html>