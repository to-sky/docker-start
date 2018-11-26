<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hi from Docker</title>
</head>
<body>
	<?php echo '<h1 style="text-align:center;color:#007bff">Hello from Docker<br> It\'s php script!</h1>'; ?>
</body>
</html>

<?php
	try {
		$db = new PDO('mysql:host=localhost;dbname=docker', 'root', 'secret');

		print_r($db);
	} catch(PDOException $e) {
		echo 'Error!: '. $e->getMessage() . '<br>';
	}

	



