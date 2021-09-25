<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Task</title>
	<link rel="stylesheet" type="text/css" href="style.css?v3" />
</head>
<body>
	<?php require('./header.html'); ?>

	<main>
		<?php
			foreach ($content as $value) {
				echo $value;
			}
		?>
	</main>

	<?php require('./footer.html'); ?>
</body>
</html>