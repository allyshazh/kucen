<?php
require "connect.php";

if (isset($_POST['save'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO contactus (name,email,message) VALUES ('$name', '$email', '$message')";
  $execute = mysqli_query($connect,$sql);

  if ($execute) {
    echo "<script type='text/javascript'>alert('Submission success!')</script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Sorry. Try again!')</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="contact_us.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
    <nav>
        <div class = "topnav">
            <div class = "logo">
                <img src="catBookingLogo.png" width = "150px" height = "150px"></label>

        <!-- Right-sided topnav -->
        <div class = "w3-right w3-hide-small">
        <b><a href = "Registeration.html" class = "w3-bar-item ws-button"><i class = "fa fa-user-plus w3-text-white"></i> CREATE ACCOUNT</a>
          <a href = "contact_us.php" class = "w3-bar-item ws-button"><i class = "fa fa-phone w3-text-white"></i> CONTACT US</a>
          <a href = "booking.php" class = "w3-bar-item ws-button"><i class = "fa fa-folder w3-text-white"></i> BOOK APPOINTMENT</a>
        <a href = "LogIn.html" class = "w3-bar-item ws-button"><i class = "fa fa-user-circle w3-text-white"></i> SIGN IN</a>
        <a href = "homePage.html" class = "w3-bar-item ws-button"><i class = "fa fa-home w3-text-white"></i> HOME</a>
        </b></div>
        </div>
        </div>
 </nav>
 <body2>
   
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Jalan Nuri 6/1, Seksyen 6</div>
          <div class="text-two">40000 Shah Alam, Selangor</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one"><a href="tel:+60355115473">+603 5511 5473</a></div>
        </div>
        <div class="email details">
          <div class="topic">Social Media</div>
          <div class="text-one">Our FB: <a href="https://www.facebook.com/klinikhaiwanshahalam/" target="_blank">/klinikhaiwanshahalam</a></div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any question about us, you can send us message from here. It's our pleasure to help you and your pets.</p>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <div class="input-box">
          <input type="text" name="name" placeholder="Enter your name">
        </div>
        <div class="input-box">
          <input type="text" name="email" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
          <textarea id="message" name="message" placeholder="Tell us something..." ></textarea>
        </div>
        <div class="button">
          <input type="submit" name="save" value="Send Now" >
        </div>
        <div class="map">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32103.427630177175!2d101.48068749313599!3d3.0792730170293896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc52667f31fc29%3A0xf8ef7f1a19060d16!2sJalan%20Nuri%206%2F1%2C%20Seksyen%206%2C%2040000%20Shah%20Alam%2C%20Selangor!5e0!3m2!1sen!2smy!4v1624531845435!5m2!1sen!2smy" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>
      </form>
    </div>
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