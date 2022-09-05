<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <!--Bootstrap icons CDN-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/main.css">
    
     <script src="js/main.js" defer></script>
    
    <title>Welcome to Rick's Cafe</title>
  </head>
  <body>
    
      <nav > 
        <div class="container">
          <ul class="nav justify-content-end"> 
              <li><a class="nav-link" href="index.php">Home</a></li>
              <li><a class="nav-link" href="reserve.php">Reserve a Table</a></li>
              <li><a class="nav-link" href="review.php">Change Reservation</a></li>
              <li><a class="nav-link" href="cancel.php">Cancel</a></li>
          </ul>
        </div><!--end container-->
      </nav>

    