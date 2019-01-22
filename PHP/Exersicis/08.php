<!DOCTYPE html>
<html>
<body>
	<h1>PHP</h1>
	<form  method="post">
	Enter your name <input type="text" name="n"><br>
	<input type="radio" name="radio" value="x">No Studies <br>
	<input type="radio" name="radio" value="y">Primary School <br>
	<input type="radio" name="radio" value="z">Secondary School <br>
	<input type="radio" name="radio" value="a">University <br>
	<input type="submit" name="SEND"> <br><br>
	</form>
	<?php

		$name=$_REQUEST['n'];

		if ($_REQUEST['radio']=="x"){
			echo $name;
			echo " has no studies";
		} elseif ($_REQUEST['radio']=="y") {
			echo $name;
			echo " has Primary School studies";
		} elseif ($_REQUEST['radio']=="z") {
			echo $name;
			echo " has Secondary School studies";
		} else {
			echo $name;
			echo " has University studies";
		}
		
	?>
</body>
</html>

