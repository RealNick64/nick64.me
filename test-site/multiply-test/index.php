<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Nick64</title>
	<link href="styles/style.css" rel="stylesheet">
  </head>
  
  <body>
	<h1> Multiply Test </h1>
	
	<table style="width:100%">
		<tbody>
			<tr>
				<th>
					<a href="/index.php">Home</a>
				</th>
				<th>
					<a href="/about-me/index.php">About Me</a>
				</th>
				<th>Projects</th>
				<th>Contacts</th>
			</tr>
		</tbody>
	</table>
	
	<br>
	
	<form action="index.php" method="get">
		Number 1: <input type="text" name="term1">
		Number 2: <input type="text" name="term2">
		<input type="submit">
	</form>
	<br>
	<?php 
	
	$term1 = (int)$_GET["term1"];
	$term2 = (int)$_GET["term2"];
	$text = $term1 * $term2;

	echo $text;
	
	?>
	
	
  </body>
</html>
