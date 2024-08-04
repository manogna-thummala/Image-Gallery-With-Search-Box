<?php
session_start();
if (!isset($_SESSION["admin"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
      <div class="search-box">
        <i class="bx bx-search"></i>
        <input type="text" placeholder="Search a movie" />
      </div>

      <div class="images">
        <div class="image-box" data-name="spiderman">
          <img src="images/spiderman.jpg" alt="" />
          <h6>spiderman</h6>
        </div>
        <div class="image-box" data-name="joker">
          <img src="images/joker.jpg" alt="" />
          <h6>joker</h6>
        </div>
        <div class="image-box" data-name="ironman">
          <img src="images/ironman.jpg" alt="" />
          <h6>ironman</h6>
        </div>
        <div class="image-box" data-name="passenger">
          <img src="images/passenger.jpg" alt="" />
          <h6>passenger</h6>
        </div>
        <div class="image-box" data-name="space">
          <img src="images/space.jpg" alt="" />
          <h6>the space</h6>
        </div>
        <div class="image-box" data-name="spiderman">
          <img src="images/spiderman2.jpg" alt="" />
          <h6>spiderman 2</h6>
        </div>
        <div class="image-box" data-name="universe">
          <img src="images/universe.jpg" alt="" />
          <h6>the universe</h6>
        </div>
        <div class="image-box" data-name="spiderman">
          <img src="images/spiderman3.jpg" alt="" />
          <h6>spiderman 3</h6>
        </div>
        <div class="image-box" data-name="holiday">
          <img src="images/holiday.jpg" alt="" />
          <h6>holiday</h6>
        </div>
        <div class="image-box" data-name="ironman">
          <img src="images/ironman2.jpg" alt="" />
          <h6>ironman 2</h6>
        </div>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>