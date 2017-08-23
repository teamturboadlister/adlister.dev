<?php
   require_once __DIR__ . "../../../bootstrap.php";

   $ads = Ads::all();

   ?>
<!DOCTYPE html>
<html>
<head>
  <head>
  			<meta charset="utf-8">
        <title>Ads</title>
  		<link rel="stylesheet" type="text/css" href="../css/menu.css">
  		<link rel="stylesheet" type="text/css" href="../css/main.css">
  		<link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">


</head>
<body>
	<?php include '../assets/menu.php';?>
	      <!-- menu panel -->
	      <div id="content">
	         <div class="menu-trigger"></div>
	         <!-- header panel -->
	         <?php include '../assets/header.php';?>
	         <!-- Content panel -->

	         <div class="container center-div">
	<div class="container">
	<h1>full list of items for sale</h1>
	<div>
    <div class="row">
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
  </div>
            <?php include '../assets/footer.php' ?>

         <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
         <script type="text/javascript" src="../js/main.js"></script>
         <script type="text/javascript" src="../js/menu.js"></script>
      </body>
</html>
