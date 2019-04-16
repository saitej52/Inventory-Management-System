<DOCTYPE html>
<html>

	<head>
		
		<meta charset="utf8" description="Add Products"/>
		<title>Inventory Management System</title>
		
		<style>
			body
			{
				color:black;
				font:sans-serif;
				background: white;
			}
			input[type="text"],input[type="password"],input[type="email"],input[type="date"]
			{
				text-align:center;
				border-radius:20px;
				height:30px;
				width:200px;
				border-color:#451963;
				background:none;
				transition:250ms;
			}
			input[type="submit"]
			{
				text-align:center;
				border-radius:20px;
				height:30px;
				width:100px;
				border-color:#451963;
				transition:250ms;
			}
			input[type="text"]:focus,input[type="password"]:focus
			{
				width:250px;
				height:35px;
			}
			input[type="submit"]:hover
			{
				width:110px;
				border-color:#1D1DC2;
				color:white;
				background-color:blueviolet;
			}
		</style>
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
			<h3>Invoices Generated!</h3>
            <br><br>
			<?php
                $conn = mysqli_connect("localhost","root","","inventory");
                $result = mysqli_query($conn,"select * from invoice;");
                $affected = mysqli_affected_rows($conn);
                if($affected==0)
                {
                    echo("<h5>No Items Purchased by Customers!</h5>");
                }
            else{
                $sum = 0;
                echo("<table border=1>
                    <th>
                    <td><center><h5>Name</h5></center></td>
                    <td><h5><center>Address</h5></center></td>
                    <td><h5><center>Price</center></h5></td>
                    </th>
                ");
                while($row= mysqli_fetch_assoc($result))
                {
                    echo("<tr>");
                    echo("<td></td>");
                    echo("<td><center>".$row["Name"]."</center></td>");
                    echo("<td><center>".$row["Address"]."</center></td>");
                    echo("<td><center>".$row["Price"]."$</center></td>");
                    $sum=$sum+$row["Price"];
                    echo("</tr>");
                }
                echo("</table>");
                echo("<br><br><b><h7>Grand Total Business Revenue: ".$sum."$</h7></b>");
            echo("<br><br>");
            }
            ?>
            
			<h7>Change Operations? <a href="http://localhost/Project/admin.html">Administrator Activities</a></h7>
		</center>

	</body>

</html>