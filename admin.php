<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8" description="This was an validation of buttons">
		<title>Administration</title>
		<style>

		</style>
	</head>
	<body>
		<?php
			if(isset($_POST["add"]))
			{
				header('location:add.html');
                
			}
			if(isset($_POST["view"]))
			{
				header('location:view.php');
			}
			if(isset($_POST["del"]))
			{
				header('location:del.html');
			}
			if(isset($_POST["in"]))
			{
				header('location:in.php');
			}
            if(isset($_POST["search"]))
			{
				header('location:search.html');
			}
		?>
	</body>
</html>