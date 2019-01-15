<!DOCTYPE html>
<html>
<body>
	<h1>Random number between 1 and 3</h1>
	<?php
		$num = rand(1,3);
		if ($num == 1) {
			echo "ONE";
		} elseif ($num == 2) {
			echo "TWO";
		} else {
			echo "THREE";
		}
		?>

</body>
</html>
