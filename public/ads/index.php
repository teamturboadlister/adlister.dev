<?php
   require_once __DIR__ . "../../../bootstrap.php";

   $ads = Ads::all();

   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ads</title>
</head>
<body>
	<h1>full list of items for sale</h1>
	<div>
		<section class="row text-center">
			<?php foreach ($ads as $ad): ?>
				<div class= "col-md-12 panel panel-default">
					<h4>Name: <?= Input::escape($ad->name) ?> </h4>
					<h3>Price: <?= Input::escape($ad->price) ?> </h3>
					<h3>Date Posted: <?= Input::escape($ad->date_posted) ?> </h3>
					<img src=" <?= Input::escape($ad->image) ?> ">
					<h2>Category: <?= Input::escape($ad->category) ?>  (<?= Input::escape($ad->sub_category) ?> )</h2>
				</div>
			<?php endforeach ?>
		</section>
	</div>
</body>
</html>