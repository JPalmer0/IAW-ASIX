	<!DOCTYPE html>
<html>
<body>
	<h1>Information of a Boxer Sportsman</h1>
	<?php
		$name = "Joan";
		$age = "20 years";
		$weight = "68,50";
		$category = "League 4";
		$champion = "No"
	?>

	<table border="1">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Weight</th>
			<th>Category</th>
			<th>Champion</th>
		</tr>
		<tr>
			<td>
				<?php 
				echo $name;
				?>
			</td>
			<td>
				<?php
				echo $age;
				?>
			</td>
			<td>
				<?php
				echo $weight;
				?>
			</td>
			<td>
				<?php
				echo $category;
				?>
			</td>
			<td>
				<?php
				echo $champion;
				?>
			</td>
		 </tr>
	</table>
</body>
</html>

