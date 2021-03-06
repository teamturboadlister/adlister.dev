<?php
   require_once __DIR__ . "../../../bootstrap.php";

   session_start();


   function newPost()
   {
   	$name = Input::escape(Input::get("name"));
   	$price = Input::escape(Input::get("price"));
   	$description = Input::escape(Input::get("description"));
   	$pick_up_location = Input::escape(Input::get("pick_up_location"));
   	$category = Input::escape(Input::get("category"));
   	$sub_category = Input::escape(Input::get("sub_category"));
   	$image = Input::escape(Input::get("handle"));


	if(!is_numeric($price)) {
		echo "Price must be numeric!";
		return;
	}


   	//info pulled from somewhere else
   	$user_id = "1";
   	// $username = "Finn Mertens";
   	$date_posted = date("Y-m-d");


	$newPost = new Ads();
	$newPost->user_id = $user_id;
	$newPost->username = $username;
	$newPost->name = $name;
	$newPost->price = $price;
	$newPost->date_posted = $date_posted;
	$newPost->description = $description;
	$newPost->availability_status = "available";
	$newPost->pick_up_location = $pick_up_location;
	$newPost->category = $category;
	$newPost->sub_category = $sub_category;
	$newPost->image = $image;
	$newPost->insertAd();


   var_dump($image);

   }
   newPost();

   ?>
<!DOCTYPE html>
<html>

<head>
	<title>Create Listing</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <!--Filestack API in HTML file -->
    <script type="text/javascript" src="https://static.filestackapi.com/v3/filestack.js"></script>
</head>
<body>
<?php include_once '../assets/menu.php'; ?>
<div id="content">
	<div class="menu-trigger"></div>
	<?php include '../assets/header.php' ?>
	<div class="container">
		<h1>Create an ad</h1>
		<div class= "col-md-6 col-md-offset-3">
			<h3>Posting as <?= "placeholder" ?>. </h3>
		    <!-- filestack button -->
		    <div class="form-group">
		    	<input type="button" class="btn" value="Upload Image" id="pickWatermark" >
		    </div>
			<form method="POST" action="" id="newPost" enctype="multipart/form-data">
				<div class="name">
					<label for="name">Name:</label>
					<input type="text" name="name"></input>
				</div>
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" name="price"></input>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<br>
					<textarea name="description" cols="40" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="pick_up_location">Pick Up Location:</label>
					<input type="text" name="pick_up_location"></input>
				</div>
				<div class="form-group">
					<label for="category">Category:</label>
					<input type="text" name="category"></input>
				</div>
				<div class="form-group">
					<label for="sub_category">Sub-Category:</label>
					<input type="text" name="sub_category"></input>
				</div>
						
			<div class="row">
			        <div class="col-sm-6">
		                <button type="submit" class="btn btn-primary">Submit changes</button>
		            </div>
		 	  	</div>
		    </form>
		</div>
		
	</div>
</div>
	<!-- jquery cdn -->
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script>
        var client = filestack.init("A4e3fBA8JTkOq2h4hG7NDz");
        //Filestack API method 'pick()' that opens the file picker
        document.getElementById("pickWatermark").addEventListener("click", pickMark);
        function pickMark() {
        	console.log("Picking Watermark");
        	client.pick({
        		accept: 'image/*',
        		fromSources:
        		['local_file_system', 'facebook', 'googledrive', 'dropbox', 'imagesearch', 'webcam',],
        		maxFiles: 1,
        	}).then(function(result){
        		console.log(JSON.stringify(result));
        		var handle = result.filesUploaded[0].handle;
        		console.log(handle);	

        		var htmlString = "<input type='hidden' value='"+handle+"' name='handle'></input>";
        		$("#newPost").append(htmlString);
        	});
        }


      </script>
      <script type="text/javascript" src="../js/main.js"></script>
      <script type="text/javascript" src="../js/menu.js"></script>
   </body>
</html>
