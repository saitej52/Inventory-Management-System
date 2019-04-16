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
        mysqli_query($conn,"delete from cart");
		mysqli_query($conn,"select * from login where username = '".$username."' and password = '".$password."';");
		$rows = mysqli_affected_rows($conn);
		if($rows==1)
		{
			if($username=="admin@email.com")
			{
				header('location:admin.html');
			}
			else
			{
				header('location:customer.html');
			}
		}
		else
		{
			header('location:noacc.html');
		}
	?>
</body>

</html>