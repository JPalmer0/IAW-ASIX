<html>
<body>
	<h1>File Open</h1>
	<?php

		$file=fopen("welcome.txt","r") or exit ("Unable to
		open file!");

		$line = 1;
		while(!feof($file))
		{
		echo $line.": "	;
		echo fgets($file). "<br>";
		$line++;
		}
		fclose($file);
	?>
</body>
</html> 