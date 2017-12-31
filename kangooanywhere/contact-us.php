<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us - Team Kangoo Anywhere</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="slideshow.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <style>
      .mySlides {display:none}
      .w3-left, .w3-right, .w3-badge {cursor:pointer}
      .w3-badge {height:13px;width:13px;padding:0}
    </style>
  </head>
  <body>
    <header>
      <img id="logo" src="img/logo.png" />
      <nav>
        <img class="menuButton" src="img/menu.png" alt="button to open menu"/>
        <ul id="menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="about-the-rally.html">About The Rally</a></li>
          <li><a href="our-car.html">Our Car</a></li>
          <li><a href="charities.html">Charities</a></li>
          <li><a href="sponsors.html">Sponsors</a></li>
          <li><a id="current" href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>
    <hr />

    <div class="container">
<?php
if(isset($_POST['submit']))
{
  $to = "Kangooanywhere@gmail.com";

  $subject = $_POST['interest'];

  $message = "Name: " . $_POST['name'] . "\n" . "Email: " . $_POST['email'] . "\n" . "Phone: " . $_POST["phone"] . "\n\n" . "Message: " . $_POST['message'];

  $headers = "From: DO_NOT_REPLY@kangooanywhere.com";
  mail($to,$subject,$message,$headers);
  echo '<p class="para">Thank you for contacting us, we will get back to you as soon as possible</p>';
}
else
{
  echo '
    <form class="contact-form" action="#" method="post">
      <h2 class="title">Contact Form</h2>
      <input type="text" name="name" placeholder="Name">
      <input type="text" name="email" placeholder="Email">
      <input type="text" name="phone" placeholder="Phone Number">
      <textarea name="message" placeholder="What is your question?" rows="20"></textarea>
      <input type="submit" name="submit" value="Submit">
    </form>
  ';
}
?>
    </div>
    <div class="bottom"></div>
    <footer>
      <div>
        <a href="https://www.facebook.com/TeamKangooAnywhere/" target="_blank"><img id="facebook" src="img/facebook.png" /></a>
        <a href="https://twitter.com/KangooAnywhere" target="_blank"><img id="twitter" src="img/twitter.png" /></a>
      </div>
    </footer>
  </body>
</html>
