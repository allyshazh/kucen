<?php
require "connect.php";

  $sql = "SELECT * FROM booking ORDER BY id DESC limit 1";
  $execute = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="complete.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel = "stylesheet" href = "bookingStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
   </head>


  <nav>
    <div class = "topnav">
        <div class = "logo">
            <img src="Images/catBookingLogo.png" width = "150px" height = "150px"></label>
        </div>

    <!-- Right-sided topnav -->
    <b><a href = "Registeration.html" class = "w3-bar-item ws-button"><i class = "fa fa-user-plus w3-text-white"></i> CREATE ACCOUNT</a>
    <a href = "contact_us.php" class = "w3-bar-item ws-button"><i class = "fa fa-phone w3-text-white"></i> CONTACT US</a>
    <a href = "booking.php" class = "w3-bar-item ws-button"><i class = "fa fa-folder w3-text-white"></i> BOOK APPOINTMENT</a>
    <a href = "LogIn.html" class = "w3-bar-item ws-button"><i class = "fa fa-user-circle w3-text-white"></i> SIGN IN</a>
    <a href = "homePage.html" class = "w3-bar-item ws-button"><i class = "fa fa-home w3-text-white"></i> HOME</a>
    </b>
    </div>
</nav>


<body2>
  <div class="container">
    <div class="title">Booking Complete!</div>
    <p><b>KINDLY SHOW UP WITH THIS PAGE AS PROOF</b></p>
    <p>(screenshot recommended)</p>
    <div class="content">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <?php while ($result = mysqli_fetch_array($execute)) { ?>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Cat's Name</span>
            <?= $result['name'] ?>
          </div>
          <div class="input-box">
            <span class="details">Cat's Age</span>
            <?= $result['age'] ?>
          </div>
          <div class="input-box">
            <span class="details">Remarks</span>
            <?= $result['remark'] ?>
          </div>
          <div class="input-box">
            <span class="details">Phone Number (60+)</span>
            <?= $result['num'] ?>
          </div>
          <div class="input-box">
            <span class="details">Start Date</span>
            <?= $result['dates'] ?>
          </div>
          <div class="input-box">
            <span class="details">End Date</span>
            <?= $result['daten'] ?>
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <?= $result['gender'] ?>
          </div>
          <div class="input-box">
            <span class="details">Service Selection</span>
            <?= $result['service'] ?>
         </div>
         <div class="input-box">
            <span class="details">Booking ID</span>
            <?= $result['id'] ?>
            <?php } ?>
          </div>
      </form>
    </div>
  </div>
</body2>

  <!-- Footer -->
  <footer>

<div class = "footer">
      <div class = "footer-bottom">
      <p style = "text-align: center;">
      <span style = "color: #9b59b6">&copy; 2021</span>
      <span style = "color: #71b7e6"> | KrypTech</span>
      </p>
      </div>
</div>
</footer>
</html>