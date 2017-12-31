<!DOCTYPE html>
<html>
  <head>
    <title>Products - FenuHealth</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="products.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    
    <style>
      .twitter-timeline {
        height: 120px !important;
      }
    
      @media screen and (max-width: 870px) {
        .twitter-timeline {
          height: 400px !important;
        }
      }
    </style>
  </head>
  
  <body>
    <header>
      <img id="logo" src="img/logo.jpg" />
      <nav class="nav-menu">
        <img class="menuButton" src="img/menu.png" alt="button to open menu"/>
        <ul id="menu">
          <li><a href="index.php">Home</a></li>
          <li id="current"><a href="products.php">Products</a></li>
          <li><a href="symptoms.php">Symptoms</a></li>
          <li><a href="awards.php">Awards</a></li>
          <li><a href="videos.php">Videos</a></li>
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="docs.php">Docs</a></li>
          <li><a href="buy-now.php">Buy Now</a></li>
          <li><a href="contact-us.php">Contact Us</a></li>
        </ul>
      </nav>
    </header>

    <div class="container">
      <div class="main">  
        <nav class="nav-products">
          <ul>
            <li style="background-color: rgb(23, 127, 67)" onclick="productData(0)">FenuSave</li>
            <li style="background-color: rgb(195, 38, 47)" onclick="productData(1)">FenuCare</li>
            <li style="background-color: rgb(42, 45, 130)" onclick="productData(2)">FenuFeast</li>
            <li style="background-color: rgb(186, 148, 119)" onclick="productData(3)">FenuCamel</li>
            <li style="background-color: rgb(251, 120, 44)" onclick="productData(4)">FenuJoint</li>
            <li style="background-color: rgb(19, 127, 182)" onclick="productData(5)">FenuCalm</li>
            <li style="background-color: black" onclick="productData(6)">FenuLyte</li>
            <li style="background-color: purple" onclick="productData(7)">FenuFoal</li>
          </ul>
        </nav>
        
        <div id="product-div">
          <!-- Javascript -->
          <p>There was an error loading the product data</p>
        </div>
        
        <script>productData(0)</script>
      </div>
      <div class="sidebar">
        <?php include('sidebar.php'); ?>
      </div>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
