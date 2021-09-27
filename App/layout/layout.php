<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home Task</title>
	<link rel="stylesheet" type="text/css" href="style.css?v3" />
</head>
<body>
	<?php require('App/view/header.html'); ?>

	<main>
		<?php
			foreach ($content as $value) {
				echo $value;
			}
		?>
	</main>

	<?php require('App/view/footer.html'); ?>
</body>
</html>