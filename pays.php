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
			<h3>Invoice</h3>
            
            <br><br>
			<?php
            
            if(isset($_POST["confirm"])){
                $conn = mysqli_connect("localhost","root","","inventory");
                $name = $_POST["name"];
                $address = $_POST["address"];
                echo('<h5>
                Name:  '.$name.'
                <br><br>
                Address:  '.$address.'
                <br><br>
                
            </h5>');
                $result = mysqli_query($conn,"select * from cart;");
                $affected = mysqli_affected_rows($conn);
                if($affected==0)
                {
                    echo("<h5>No Items in Cart!</h5>");
                }
            else{
                $sum=0;
                
                echo("<table border=1>
                    <th>
                    <td><h5>Product ID</h5></td>
                    <td><h5>Product Name</h5></td>
                    <td><h5>Quantity</h5></td>
                    <td><h5>Unit Price</h5><td>
                    <td><h5>Total</h5></td>
                    </th>
                ");
                while($row= mysqli_fetch_assoc($result))
                {
                    $rows = mysqli_fetch_assoc(mysqli_query($conn,"select pname,price from products where pid = '".$row["pid"]."';"));
                    echo("<tr>
                        <td></td>");
                    echo("<td><center>".$row["pid"]."</center></td>");
                    echo("<td><center>".$rows["pname"]."</center></td>");
                    echo("<td><center>".$row["quan"]."</center></td>");
                    $rin = mysqli_fetch_assoc(mysqli_query($conn,"select quan from products where pid = '".$row["pid"]."';"));
        
                    $valu = $rin["quan"]-$row["quan"];
                    
                    if($valu<0)
                    {
                        $val = $rin["quan"]+$row["quan"];
                        header('location:caution.php');
                    }
                    else if($valu==0)
                    {
                        mysqli_query($conn,"delete from products where pid = '".$row["pid"]."';");
                    }
                    else{
                    mysqli_query($conn,"UPDATE products SET quan = ".(int)$valu." where pid = '".$row["pid"]."';");
    
                    echo("<td><center>".$rows["price"]."</center></td>");
                    $tot = $rows["price"]*$row["quan"];
                    $sum=$sum+$tot;
                    echo("<td><center>$</center></td>");
                    echo("<td><center>".$tot."</center></td>");
                    echo("</tr>");}
                }
                echo("</table>");
            echo("<br><br><b><h7>Grand Total : ".$sum."$</h7></b>");
            echo("<br><br>");
            mysqli_query($conn,"insert into invoice values ('".$name."','".$address."','".$sum."');");    
            mysqli_query($conn,"delete from cart;");
            echo('
                <input type="submit" value="Print" name="print"><br><br>');
            
            }
                
            }
            if(isset($_POST["change"]))
            {
                header('location:customer.html');
            }
            ?>
            
			<h7>Change Operations? <a href="http://localhost/Project/customer.html">Customer Activities</a></h7>
		</center>

	</body>

</html>