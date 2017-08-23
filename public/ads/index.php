<?php
require_once __DIR__ . "../../../bootstrap.php";



?>

<!DOCTYPE html>
<html>
<head>
	<title>Category Index</title>
</head>
<body>
	<h1>full list of items for sale</h1>
	<div>
		<section class="row text-center">
			<?php foreach ($ads as $ad): ?>
				<div class= "col-md-12 panel panel-default">
					<h4>Name:</h4>
					<h3>Price:</h3>
					<h3>Date Posted:</h3>
					<img src="">
					<h2>Category: ()</h2>
				</div>
			<?php endforeach ?>
		</section>
	</div>
</body>
</html>
