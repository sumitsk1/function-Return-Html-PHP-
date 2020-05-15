<?php require_once('include.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Function Return Html</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
		h1{
			color: yellow;
			padding-left:22px;
			padding-right:22px;
		}
		.badge{
			border-radius: 50%;
		}
	</style>
</head>
<body>
	<div class="container">
	<?php 
		for($i=1;$i<=10;$i++){
										
			echo TestBlockHTML($i);	

		}

	 ?>
	</div>
</body>
</html>