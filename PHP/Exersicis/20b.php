<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		// Create connection  (server, user, pass, db)
		$con=mysqli_connect("localhost","root","","base1");
		// Check connection
		if (mysqli_connect_errno($con)) {
			echo "Failed to connect to MySQL: ".mysqli_connect_error();
		}
		else {
			echo "<p>OK: Connected to database.</p>";
		}
		// Operate over database
		// ...............Do something....................
		
        $sql = "DELETE FROM CURSOS";
        mysqli_query($con,$sql);
        echo "All row deletes";
		// ..................Finish.......................
		mysqli_close($con);
	?>
</body>