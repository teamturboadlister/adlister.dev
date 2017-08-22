
<!DOCTYPE html>
<html>
   <head>
      <title>Login Page</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/menu.css">
      <link rel="stylesheet" href="css/main.css">
      <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
   </head>
   <body>
      <?php include 'assets/menu.php';?>
      <!-- menu panel -->
      <div id="content">
         <div class="menu-trigger"></div>
         <?php include 'assets/header.php'; ?>
         <div class="container center-div">
            <h1> Iron List Account Settings </h1>
            <h2> Welcome <?=  $user->name ?></h2>
            <div class="container">
               <h4> User Id <?=$user->user_id; ?></h4>
               <h4> User Name <?=$user->username; ?></h4>
               <h4>Email <?=$user->email; ?></h4>
              <div> class="col-sm-8 text center">
                   <?php if($user->id == Auth::id()) : ?>
               </div>
                <?php endif; ?>
                  <br>
                  <div class = "row">
                        <?php foreach($items->attributes as $key => $item) : ?>
                        <div class="col-md-4">
                            <h4 class="text-center"><?= $item['description']; ?></h4>
                        <img src="<?= $item['image_url']; ?>" class="img-responsive center-block">
                    </div>
                    <div class="row">
                <?php endforeach; ?>
            </div>
            <?php if($user->id == Auth::id()) : ?>
                <div class="row text-center">
                    <a class="btn-btn-primary" href="/edit.php" > Edit Account </a>
                    <div>
                        <a class="btn-btn-primary" href="/../ads/create.php"> Post An Ad </a>
                    </div>
                    <div>
                        <a class="btn-btn-primary" href="/../ads/edit.php"> Edit Ad </a>
                    <div>
                        <a class="btn-btn-primary" href="/show.php"> Show All Ads </a>
                    </div>
            <?php endif; ?>
                      <br>
                  <button type ='submit' name='logout'>Logout</button>
               </form>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/menu.js"></script>
      </script>
   </body>
</html>
