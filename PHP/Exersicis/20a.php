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
		
        $nom = $_REQUEST['nom'];
        $sql = "SELECT CURSOS WHERE nombrecurso='$nom'";
        if (mysqli_query($con,$sql)) {
        	mysqli_query("delete from cursos where nombrecurso='$nom'");
        	echo "The course ".$nom."is deleted from table";
        } else {
        	echo "This course doesn't exists!";
        }
		// ..................Finish.......................
		mysqli_close($con);
	?>
</body>