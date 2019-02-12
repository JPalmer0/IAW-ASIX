<!DOCTYPE html>
<html>
<body>
	<h1>Password Validation</h1>
	<form method="get">
		Enter your name <input type="text" name="name"><br>
		Enter your password <input type="text" name="pass1"><br>
		Enter your password another time <input type="text" name="pass2"><br>
		<input type="submit" name="send">
	</form>
	<?php

		$pass1 = $_REQUEST["pass1"];
		$pass2 = $_REQUEST["pass2"];

		function Val() {

			if (isset($pass1)) {
				if ($pass1 == $pass2) {
					echo "The entered passwords are equal";
						} else {
					echo "The entered passwords are not equal, re-enter your passwords";
								}
								}
						}

			
		val();
	?>
</body>
</html>

