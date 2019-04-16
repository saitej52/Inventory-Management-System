


	<head>
		
		<meta charset="utf8" description="Home page of Project"/>
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
			<h3>Forgot Password</h3>
			
            <?php
		
		/*$conn = mysqli_connect("localhost","root","","inventory");
		if(!$conn)
		{
			echo("<br> Connection Not Established <br>");
		}
		else
		{
		
		$username = $_POST["user"];
		$sec = $_POST["sec"];
		$dob = $_POST["dob"];
        $result = mysqli_query($conn,"SELECT password,security,dob FROM login WHERE username='$username';");
        $aff = mysqli_affected_rows($conn);
        if($aff>0)
        {
        echo("Credentials Verified");
        while($row= mysqli_fetch_assoc($result))
        {
            if($row['security']==$sec)
            {
                if($row['dob']==$dob)
                {
                    echo("Your Account Password is <b>".$row['password']."</b>");       
                }
            }
        }
        }
        else
        {
            echo("Credentials Not Verified");
        }
?>*/



    $conn = mysqli_connect("localhost","root","","inventory");
        $username = $_POST["user"];
		$sec = $_POST["sec"];
		$dob = $_POST["dob"];
        $result = mysqli_query($conn,"SELECT password,security,dob FROM login WHERE username='$username';");    
        $aff = mysqli_affected_rows($conn);
        if($aff>0)
        {
        echo("Credentials Verified");
        while($row= mysqli_fetch_assoc($result))
        {
            if($row['security']==$sec)
            {
                if($row['dob']==$dob)
                {
                    echo("Your Account Password is <b>".$row['password']."</b>");       
                }
            }
        }
        }
        else
        {
            echo("Credentials Not Verified");
        }
    
?>
			<br>
			<h7><a href="http://localhost/Project/home.html">Login Now!</a></h7>
		</center>

	</body>

</html>