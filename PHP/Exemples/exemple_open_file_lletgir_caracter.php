<html>
<body>
	<h1>File Read By Character</h1>
	<?php

		$file=fopen("welcome.txt","r") or exit ("Unable to
		open file!");

		
		while(!feof($file))
		{
		echo fgetc($file). "<br>";
		}
		fclose($file);
	?>
</body>
</html> 