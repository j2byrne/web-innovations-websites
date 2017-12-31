<html>
	<head>
		<title>PL Art Therapy - Home</title>
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
			<a href="home.php"><img class="logo2" src="img/logo2.jpg"></a>
			<a href="home.php"><img class="logo" src="img/pl art therapy.png"></a>
		</header>
		<nav>
			<img class="menuicon" src="img/menu.png">
			<ul class="navbar">
				<li><a href="home.php">Home</a></li>
				<li><a href="about-me.php">About Me</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li class="current"><a class="current" href="contact-us.php">Contact</a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="sidebar height">
				<div class="sidebar-inner">
					<img class="logo-sidebar" src="img/logo.jpg" />
					<img class="img-sidebar" src="img/pic2.jpg" />
				</div>
			</div>
			<div class="main border-inner height">
				<div class="main-inner">
					<img class="hide-desktop" src="img/pic1.jpg" />
					<p>
						<ul id="ul-contact">
							<li>Fill out the contact form below and I will try to reply within 24 hours.</li>
							<li>An Appointment will be made for the first session. At this first session we will discuss your concerns and reasons for
							needing Art Therapy and see if we can work together.</li>
						</ul>
					<p>
						<form class="contact-form" action="contact-form-submition.php" method="post">
							<h2 class="contact-form-heading">Contact Form</h2>
							<input class="contact-input" type="text" name="firstname" placeholder="First Name">
							<input class="contact-input" type="text" name="lastname" placeholder="Last Name">
							<input class="contact-input" type="text" name="email" placeholder="Email">
							<input class="contact-input" type="text" name="phone" placeholder="Phone Number">
							<textarea class="contact-textarea" name="other" placeholder="Any Other Information?" rows="7"></textarea>
							<input class="contact-submit" type="submit" value="Submit">
						</form>
					</p>
				</div>
			</div>
			<?php include 'footer.php';?>
		</div>
	</body>
</html>