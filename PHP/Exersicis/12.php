<!DOCTYPE html>
<html>
<body>
	<h1>Day of the week</h1>
	<?php
		$day = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');

		$dia = date("w");
		echo $day[$dia];

	?>
</body>
</html>

