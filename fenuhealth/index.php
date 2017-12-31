<!DOCTYPE html>
<html>
  <head>
    <title>Home - FenuHealth</title>
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
          <li id="current"><a href="index.php">Home</a></li>
          <li><a href="products.php">Products</a></li>
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
        <div class="text-center" style="margin-bottom: 30px">
          <iframe src="https://www.youtube.com/embed/tKnrTPOFXV8" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="text-center" style="margin-bottom: 30px">
          <iframe src="https://www.youtube.com/embed/06tiSK4XqlM" frameborder="0" allowfullscreen></iframe>
        </div>

        <h3 class="text-center">Annie and Kate Madden are the dynamic duo of teenage sisters who founded FenuHealth.</h3>
        <p class="para">
          It all began in 2015 when sisters Kate and Annie Madden, then aged 14 and 13 respectively, worked together on a winning project for the BT Young Scientist. Within a couple of months, and with support from Meath County Council, Horse Racing Ireland, Enterprise Ireland, Local Enterprise Offices of Dublin &amp; Meath and BT, they attended Equitana, the world's biggest equestrian trade fair, in Germany, where they introduced their branded feed utilising their own specially blended formula.
        </p>

        <img src="img/anniekate.jpg" class="img" />

        <p class="para">
          Annie recalls: <em>"At Equitana, we established some key contacts and we got the opportunity to meet distributors from around the world. On the first day, people were not taking us seriously because of our age but by the third day, they were lining up to talk to us about the product."</em>
        </p>

        <h3 class="text-center"><strong>FenuHealth in figures...</strong></h3>
        <p class="para text-center">
          2 Sisters<br>4 Continents<br>5 Royal Families as customers<br>8 Products<br>8 on our team [excluding us]<br>14 countries<br>50% of Foals have Gastric Ulcers<br>70% of Sport Horses have Gastric Ulcers<br>90% of Race Horses have Gastric Ulcers<br>92% Re-order Rate<br>100% Natural<br>250,000 Social Media Followers
        </p>

        <img src="img/fenusave-stand.jpg" class="img" />

        <h3 class="text-center">Acid test</h3>
        <p class="para">
          Kate explains where she and Annie saw the market opportunity: “Humans only produce acid when we eat. Horses’ stomachs produce acid all the time. Gastric ulcers are an almost universal problem affecting racehorses, sport horses and ponies in the field. It’s estimated that 90% of racehorses have gastric ulcers.
        </p>

        <p class="para">
          "Our product, which is 100% natural sticks to the stomach lining and forms an extra protective layer. One of our product’s biggest advantages is that because it is categorised as a feedstuff, it can be fed to a racehorse right up to, and on, the day of a race."
        </p>

        <p class="para">
          With a 92% re-order rate from our current customer base, we're confident that you too will be happy with our FenuHealth product range.
        </p>
      </div>
      <div class="sidebar">
        <?php include('sidebar.php'); ?>
      </div>
    </div>

    <?php include('footer.php'); ?>
  </body>
</html>
