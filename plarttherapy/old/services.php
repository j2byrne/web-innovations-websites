<html>
	<head>
		<title>Name of Company - Home</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<a href="index.php"><img class="logo" src="img/pl art therapy.png"></a>
			<h1 class="slogan">Art Therapy - When words are not enough</h1>
		</header>
		<nav>
			<img class="menuicon" src="img/menu.png">
			<ul class="navbar">
				<li><a href="home.php">Home</a></li>
				<li><a href="about-me.php">About Me</a></li>
				<li class="current"><a class="current" href="services.php">Services</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact-us.php">Contact Us</a></li>
			</ul>
		</nav>
		<div class="container">
			<?php include 'sidebar.php';?>
			<div class="main border-inner">
				<div class="main-inner">
					<img class="img-side" src="img/pic4.jpg" />
					<p>
						At some point in our lives we all experience challenges and difficulties that can be overwhelming. We may feel stuck, 
						frustrated, confused, afraid. Art therapy can help you to explore the source of your problems and get a deeper understanding of 
						your concerns.
					</p>
					<p>
						I provide short and long term Art Therapy sessions depending on the person's individual needs. I normally start with a group of 
						six sessions and then discuss with the client if there is a need to continue. 
					</p>
					<p>
						Generally, individual sessions take place weekly at the same day and time and last 50 minutes. I work at different locations in 
						Dublin and I will try to find one that will be convenient to you.
					</p>
					<p>
						The standard rate is 60 euro. I can also offer low cost sessions based on the individual's financial circumstances.
					</p>
				</div>
			</div>
			<?php include 'footer.php';?>
		</div>
	</body>
</html>
