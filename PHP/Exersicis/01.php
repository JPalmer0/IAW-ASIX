<!DOCTYPE html>
<html>
<body>
	<h1>Random</h1>
	<?php
		$num = rand(1,10);
		echo "your random number ";
		echo $num;
		echo "<br>";
		if ($num>=5) {
			echo "you passed the exam";
		} else {
			echo "you failed the exam";
		}
	?>
</body>
</html>

