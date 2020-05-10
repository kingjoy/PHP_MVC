<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Title</title>
	</head>
	<body>
		<?php
		require_once("includes/person.inc.php");


			$pet = new Pet();

			echo $pet->owner();
		?>
	</body>
</html>