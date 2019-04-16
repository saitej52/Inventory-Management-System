<!DOCTYPE html>
<html>
    <head>
        <meta description="Adding of Products" charset="UTF-8">
        <title>Add Products</title>
    </head>
    <body>
        <?php
            $pid = $_POST["pid"];
            $pname = $_POST["pname"];
            $pman = $_POST["pman"];
            $price = $_POST["price"];
            $quan = $_POST["quan"];
            $rackid = $_POST["rack"];
            $conn = mysqli_connect("localhost","root","","inventory");
            mysqli_query($conn,"select * from products where pid = '".$pid."';");
					$rows = mysqli_affected_rows($conn);
					if($rows!=1)
					{
						$exec = "insert into products values ('".$pid."','".$pname."','".$pman."',".$price.",".$quan.",'".$rackid."');";
						mysqli_query($conn,$exec);
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
			<h3>Products Added Successfully</h3>
			<a href="http://localhost/Project/admin.html"><h7>Administration Activities</h7></a>
			
		</center>

	</body>

</html>');
                        
					}
					else
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
			<h3>Products ID Already Exist</h3>
			<a href="http://localhost/Project/admin.html"><h7>Administration Activities?</h7></a>
            <br>
            <a href="http://localhost/Project/add.html"><h7>Add Products Again?</h7></a>
			
		</center>

	</body>

</html>');
					}
        ?>
    </body>
</html>