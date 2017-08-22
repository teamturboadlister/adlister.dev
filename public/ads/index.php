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
					<h4><?= Ads::all($singleAd->id) ?>
					<h4><?= Ads::all($singleAd->user_id) ?>
					<h4><?= Ads::all($singleAd->username) ?>
					<h4><?= Ads::all($singleAd->date_posted) ?>
					<h4><?= Ads::all($singleAd->category) ?>
					<h4><?= Ads::all($singleAd->price) ?>
					<h4><?= Ads::all($singleAd->description) ?>
					<h4><?= Ads::all($singleAd->availability_status) ?>
					<h4><?= Ads::all($singleAd->pick_up_location) ?>
					<h4><?= Ads::all($singleAd->location_city) ?>
					<!-- <h4><?= Ads::all($singleAd->image) ?> -->
				</div>
			<?php endforeach ?>
		</section>
	</div>
</body>
</html>
