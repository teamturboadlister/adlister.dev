<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';
?>
<!DOCTYPE html>
<html>
<head>
    <?php require 'views/partials/head.php'; ?>
</head>
<body>
      <?php include 'assets/menu.php';?>

      <!-- menu panel -->
      <div id="content">
         <?php require $mainView; ?>

         <?php include 'assets/footer.php' ?>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/menu.js"></script>
   </body>
</html>
