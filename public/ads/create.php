<?php
require_once __DIR__ . "../../../bootstrap.php";

session_start();

if(isset($_POST["insert"]))
{
	$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$query = "INSERT INTO image_testing VALUES ('$file')";
}


function newPost()
{
	$name = Input::escape(Input::get("name"));
	$category = Input::escape(Input::get("category"));
	$sub_category = Input::escape(Input::get("sub_category"));
	$price = Input::escape(Input::get("price"));
	$description = Input::escape(Input::get("description"));
	$pick_up_location = Input::escape(Input::get("pick_up_location"));
	$location_city = Input::escape(Input::get("location_city"));
	$image = Input::escape(Input::get("image"));

	if(!is_numeric($price)) {
		echo "Price must be numeric!";
		return;
	}

	//info pulled from somewhere else
	$user_id = "1";
	$username = "Finn Mertens";
	$date_posted = date("Y-m-d");

	$newPost = new Ads();
	$newPost->user_id = $user_id;
	$newPost->username = $username;
	$newPost->date_posted = $date_posted;
	$newPost->name = $name;
	$newPost->category = $category;
	$newPost->sub_category = $sub_category;
	$newPost->price = $price;
	$newPost->description = $description;
	$newPost->availability_status = "available";
	$newPost->pick_up_location = $pick_up_location;
	$newPost->location_city = $location_city;
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
			<form method="POST" action="" enctype="multipart/form-data">
				<div class="name">
					<label for="name">Name:</label>
					<input type="text" name="name"></input>
				</div>
				<div class="form-group">
					<label for="category">Category:</label>
					<input type="text" name="category"></input>
				</div>
				<div class="form-group">
					<label for="sub_category">Sub-Category:</label>
					<input type="text" name="sub_category"></input>
				</div>
				<div class="form-group">
					<label for="price">Price:</label>
					<input type="text" name="price"></input>
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea name="description" cols="40" rows="4"></textarea>
				</div>
				<div class="form-group">
					<label for="pick_up_location">Pick Up Location:</label>
					<input type="text" name="pick_up_location"></input>
				</div>
				<div class="form-group">
					<label for="location_city">Location City:</label>
					<input type="text" name="location_city"></input>
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" id="image" name="image"></input>	
				</div>
				<div class="row">
			        <div class="col-sm-6">
		                <button type="submit" name="insert" id="insert" class="btn btn-primary">Submit changes</button>
		            </div>
		 	  	</div>
		    </form>
		</div>
		
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<!-- filestack api -->
	<!-- <script src="https://static.filestackapi.com/v3/filestack.js"></script> -->
	<!-- link to custom js using filestack-->
	<script type="text/javascript" src="../filestack.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	<script type="text/javascript" src="../js/menu.js"></script>
</body>
</html>
<script>
$(document).ready(function(){
	$('#insert').click(function(){
		var image_name = $("#image").val();
		if (image_name == "") 
		{
			alert("Please upload an image.");
			return false; 
		}
		else 
		{
			var extension = $("#image").val().split('.').pop().toLowerCase();
			if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
			{
				alert("Invalid image file.");
				$("#image").val("");
				return false;
			}
		}
	});
});
</script>