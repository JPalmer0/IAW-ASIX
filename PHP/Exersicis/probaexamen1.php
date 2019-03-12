<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// Create connection  (server, user, pass, db)
		$con=mysqli_connect("localhost","root","","futbol");
		// Check connection
		if (mysqli_connect_errno($con)) {
			echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}
		else {
			echo "<p>OK: Connected to database.</p>";
		}
		// Operate over database
		// ...............Do something....................
		
        
		// ..................Finish.......................
		mysqli_close($con);
	?>
</body>