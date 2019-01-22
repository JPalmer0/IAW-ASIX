<!DOCTYPE html>
<html>
<body>
	<h1>Salary Comparation</h1>
	<form method="post">
		Enter your name <input type="text" name="name"><br>
		<select name="salary">
			<option value="sel1">1-1000€</option>
			<option value="sel2">1001-3000€</option>
			<option value="sel3">+3000€</option>
		</select>
		<input type="submit" name="send">
	</form>
	<?php
		$name=$_REQUEST["name"];
		
		if (isset($_REQUEST['salary'])) {

			if ($_REQUEST['salary']=='sel1') {
				echo $name;
				echo "<br>";
				echo "your salary is around 1-1000€ and you don't pay taxes";
			} elseif ($_REQUEST['salary']=='sel2') {
				echo $name;
				echo "<br>";
				echo "your salary is around 1001-3000€ and you don't pay taxes";
			} else {
				echo $name;
				echo "<br>";
				echo "your salary more than 3000€ and you pay taxes";
			}
		}
		
	?>
</body>
</html>

