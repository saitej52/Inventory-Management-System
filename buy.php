<?php
    $pid = $_POST["pid"];
    $quan = $_POST["quan"];
    $conn = mysqli_connect("localhost","root","","inventory");
if(!$conn)
{
    echo('<DOCTYPE html>
<html>

	<head>
		
		<meta charset="utf8" description="Home page of Project"/>
		<title>Inventory Management System</title>
		
        <link rel="stylesheet" href="css/bootstrap.css"></link>
	</head>

	<body>

		<center>
			<br>
			<br>
			<br>
			<h1>Inventory Management System</h1>
			<br>
			<img src="user.png" style="height:100px;width:100px;">
			<h3>Connection Does not Established!</h3>
			<a href="http://localhost/Project/customer.html"><h7>Customer Activities</h7></a>
			
		</center>

	</body>

</html>');
}
else
{
    mysqli_query($conn,"insert into cart values ('".$pid."',".$quan.");");
    echo('<DOCTYPE html>
<html>

	<head>
		
		<meta charset="utf8" description="Home page of Project"/>
		<title>Inventory Management System</title>
		
        <link rel="stylesheet" href="css/bootstrap.css"></link>
	</head>

	<body>

		<center>
			<br>
			<br>
			<br>
			<h1>Inventory Management System</h1>
			<br>
			<img src="user.png" style="height:100px;width:100px;">
			<h3>Products Added to Cart</h3>
			<a href="http://localhost/Project/customer.html"><h7>Customer Activities</h7></a>
			
		</center>

	</body>

</html>');
}
?>