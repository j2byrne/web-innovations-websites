<!DOCTYPE html>
<html>
  <head>
    <title>Contact Us - FenuHealth</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </head>
  
  <body>
    <header>
      <img id="logo" src="img/logo.jpg" />
      <nav class="nav-menu">
        <img class="menuButton" src="img/menu.png" alt="button to open menu"/>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="symptoms.php">Symptoms</a></li>
          <li><a href="awards.php">Awards</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="docs.php">Docs</a></li>
          <li><a href="buy-now.php">Buy Now</a></li>
          <li id="current"><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <div class="container">
      <div class="main">
        <div class="column" style="width: 100%">
<?php
if(isset($_POST['submit']))
{
  $to = "Nutrition@fenuhealth.com";

  $subject = $_POST['interest'];

  $message = "Name: " . $_POST['name'] . "\n" . "Email: " . $_POST['email'] . "\n" . "Phone: " . $_POST["phone"] . "\n\n" . "Message: " . $_POST['message'];

  $headers = "From: DO_NOT_REPLY@fenuhealth.com";
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
        <div class="text-center column">
          <p class="para">
            Eoin [Bulk Sales]<br>089 2000 217<br><a href="mailto:Eoin@FenuHealth.com">Eoin@FenuHealth.com</a>
          </p>
          <p class="para">
            Sarah [Bulk Sales]<br>089 2000 218<br><a href="mailto:">Sarah@FenuHealth.com</a>
          </p>
          <p class="para">
            Kate [Co-founder]<br><a href="mailto:Kate@FenuHealth.com">Kate@FenuHealth.com</a>
          </p>
          <p class="para">
            Annie [Co-founder]<br><a href="mailto:Annie@FenuHealth.com">Annie@FenuHealth.com</a>
          </p>
          <p class="para">
            Henrich [European Sales]<br><a href="mailto:Europe@FenuHealth.com">Europe@FenuHealth.com</a>
          </p>
          <p class="para">
            Abdullah [UAE Sales]<br><a href="mailto:UAE@FenuHealth.com">UAE@FenuHealth.com</a>
          </p>
          <p class="para">
            Toni [Secretariat]<br><a href="mailto:Toni@FenuHealth.com">Toni@FenuHealth.com</a>
          </p>
          <p class="para">
            Fiona [Secretariat]<br><a href="mailto:Fiona@FenuHealth.com">Fiona@FenuHealth.com</a>
          </p>
          <p class="para">
            Andrea [Exhibitions]<br><a href="mailto:Nutrition@FenuHealth.com">Nutrition@FenuHealth.com</a>
          </p>
          <p class="para">
            Robert [Logistics]<br><a href="mailto:Logistics@FenuHealth.com">Logistics@FenuHealth.com</a>
          </p>
        </div>
      </div>
      <div class="sidebar">
        <?php include('sidebar.php'); ?>
      </div>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
