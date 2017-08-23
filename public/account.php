
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
                  <br>
                  <!-- <div class = "row">
                        <?php //foreach($ads->attributes as $key => $ad) : ?>
                        <div class="col-md-4">
                            <h4 class="text-center"><?= //$ad['description']; ?></h4>
                        <img src="<?= //$ad['image_url']; ?>" class="img-responsive center-block">
                    </div>
                    <div class="row">
                <?php //endforeach; ?>
            </div> -->
                <div class="row text-center">
                    <a class="btn-btn-primary" href="views/edit.php" > Edit Account </a>
                    <div>
                        <a class="btn-btn-primary" href="/../ads/create.php"> Post An Ad </a>
                    </div>
                    <div>
                        <a class="btn-btn-primary" href="/../ads/ads.php"> My Ads</a>
                    </div>
                    <div>
                        <a class="btn-btn-primary" href="/../ads/edit.php"> Edit Ad </a>
                    <div>
                        <a class="btn-btn-primary" href="ads/show.php"> Show All Ads </a>
                    </div>
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
