<!DOCTYPE html>
<html>
  <head>
    <title>Videos - FenuHealth</title>
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
          <li id="current"><a href="videos.php">Videos</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="docs.php">Docs</a></li>
          <li><a href="buy-now.php">Buy Now</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <div class="container">
      <div class="main">
        <h3 class="text-center">Enda Kenny</h3>

        <div class="text-center" style="margin-bottom: 30px">
        <iframe src="https://www.youtube.com/embed/PJf5LbafV4U?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <h3 class="text-center">J S Bolger</h3>
        
        <div class="text-center" style="margin-bottom: 30px">
          <iframe src="https://www.youtube.com/embed/HouIM1H7H-8" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <h3 class="text-center">Meath Business Awards</h3>
        
        <div class="text-center" style="margin-bottom: 30px">
          <iframe src="https://www.youtube.com/embed/yPsl_yR5MQw" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <h3 class="text-center">"I will continue to use FenuSave on all my horses"</h3>
        <h3 class="text-center">"FenuSave is 100% natural, it can not be but beneficial"</h3>
        <h3 class="text-center">"He is almost looking too good"</h3>
        <h3 class="text-center">"There is a shine on her that you can see your reflection off of her coat"</h3>
        <h3 class="text-center">"She definitely doesn't look as light as when she started on FenuSave"</h3>
      </div>
      <div class="sidebar">
        <?php include('sidebar.php'); ?>
      </div>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
