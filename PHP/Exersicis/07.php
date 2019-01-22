<!DOCTYPE html>
<html>
<body>
	<h1>Exersici 7</h1>
	<form  method="get">
	<input type="text" name="n">
	<input type="submit" name="enviar">
	</form>
	<?php
		$name = $_REQUEST['n'];
		echo "Age";
		if(isset($_REQUEST['n'])){
			echo $n;
		}
	?>
</body>
</html>

