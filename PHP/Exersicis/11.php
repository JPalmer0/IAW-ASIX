<!DOCTYPE html>
<html>
<body>
	<h1>Text Areas </h1>
	<form method="get">
		Enter your name: <textarea name="ta1" cols="100" rows="10">
			En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
		</textarea>
		
		<input type="submit" name="send">
	</form>
	<?php
		$ta1=$_REQUEST['ta1'];
		echo $ta1;
		
	?>
</body>
</html>

