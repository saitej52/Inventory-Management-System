<?php
    $pname = $_POST["pname"];
    $pid = $_POST["pid"];
    $pman = $_POST["pman"];
    $rack = $_POST["rack"];
    $conn = mysqli_connect("localhost","root","","inventory");
    mysqli_query($conn,"delete from products where pid = '".$pid."' or pname = '".$pname."' or pman = '".$pman."' or rack = ".$rack.";");
    $rows = mysqli_affected_rows($conn);
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
			<h3>Products Deleted Successfully</h3>
			<a href="http://localhost/Project/admin.html"><h7>Administration Activities</h7></a>
			
		</center>

	</body>

</html>');
?>