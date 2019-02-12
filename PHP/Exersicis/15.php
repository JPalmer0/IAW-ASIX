<!DOCTYPE html>
<html>
<body>
	<h1></h1>
	<form method="get">
		Username <input type="text" name="username"><br>
		Password <input type="text" name="password"><br>
		<input type="submit" name="send">
	</form>
	<?php

		$username=$_REQUEST["username"];
		$password=$_REQUEST["password"];

		
		$user = array('username' => 'joan' , );


	?>
</body>
</html>

