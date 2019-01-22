<!DOCTYPE html>
<html>
<body>
	<form method="get">
	Enter your name <input type="text" name="n"><br>
	<input type="checkbox" name="check1">Football <br>
	<input type="checkbox" name="check2">Tennis <br>
	<input type="checkbox" name="check3">Basketball <br>
	<input type="checkbox" name="check4">Golf <br>
	<input type="submit" name="send">
	</form>
	<h1>Primer PHP</h1>
	<?php

		$name=$_REQUEST['n'];

		if (isset($_REQUEST['check1'])) {
 			echo $name;
 			echo "<br>";
 			echo "You play Football ";
		} elseif (isset($_REQUEST['check2'])) {
			echo $name;
 			echo "<br>";
 			echo "You play Tennis ";
		} elseif (isset($_REQUEST['check3'])) {
			echo $name;
 			echo "<br>";
 			echo "You play Basketball ";
		} else {
			echo $name;
 			echo "<br>";
 			echo "You play Golf ";
		}
	?>
</body>
</html>

