<!DOCTYPE html>
<html>
<body>
	<h1>Multiplication with FOR, WHILE and DO-WHILE</h1>
	<?php
		echo "for";
		echo "<br>";
		for($n=0;$n<=10;$n++) {
		echo $n*2;
		echo "<br>";
		}

		echo "<br>";
		echo "while";
		echo "<br>";
		$inici = 0;
		$f = 0;
		while ($inici<= 10) {
			echo $f*2;
			$inici++;
			$f++;
			echo "<br>";
		}

		echo "<br>";
		echo "do-while";
		echo "<br>";

		$inici2 = 0;
		$n = 0;
		do {
			echo $n*2;
			$inici2++;
			$n++;
			echo "<br>";
		} while ($inici2<= 10);

	?>
</body>
</html>

