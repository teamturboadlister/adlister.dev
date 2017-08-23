<?php
   require_once __DIR__ . "../../../bootstrap.php";

   	$ads = Ads::all();

   	$page=Input::escape(Input::get("page", 1));
	$recordsPerPage = Input::escape(Input::get("recordsPerPage", 4));

	$adPage = Ads::paginate($page, $recordsPerPage);


   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ads</title>
</head>
<body>
	<h1>full list of items for sale</h1>
	<div class="row">
		<a class="col-lg-4 btn btn-secondary" href="?page=<?=$page?>&recordsPerPage=4">4 Per Page</a>
		<a class="col-lg-4 btn btn-secondary" href="?page=1&recordsPerPage=10">10 Per Page</a>
		<a class="col-lg-4 btn btn-secondary" href="?page=1&recordsPerPage=12">12 Per Page</a>
		
	</div>
	<div>
		<section class="row text-center">
			<?php foreach ($ads as $ad): ?>
				<div class= "col-md-12 panel panel-default">
					<h2>Name: <?= Input::escape($ad->name) ?> </h2>
					<h3>Price: <?= Input::escape($ad->price) ?> </h3>
					<h3>Date Posted: <?= Input::escape($ad->date_posted) ?> </h3>
					<img src=" <?= Input::escape($ad->image) ?> ">
					<h2>Category: <?= Input::escape($ad->category) ?>  (<?= Input::escape($ad->sub_category) ?> )</h2>
				</div>

			<?php endforeach ?>
		</section>
		<section>
			<form method="GET" action="" class="pagination">
				<button class="btn btn-default" <?php if ($page == 1) {?> style="display:none;" <?php }else {?> style="display:initial;" <?php } ?> name="page" value=<?= $page - 1 ?> >previous</button>
				<button class="btn btn-default" <?php if ($page == 15) {?> style="display:none;" <?php }else {?> style="display:initial;" <?php } ?> name="page" value=<?= $page + 1 ?> >next</button>
			</form>
		</section>
	</div>
</body>
</html>