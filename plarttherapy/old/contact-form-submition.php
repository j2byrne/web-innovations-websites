<?php
	$to = "j2byrne@hotmail.com";
	
	$subject = "Enquiry On Website";
	
	$message = "First Name: " . $_POST['firstname'] . "\r\n";
	$message .= "Last Name: " . $_POST['lastname'] . "\r\n";
	$message .= "From: Email: " . $_POST['email'] . "\r\n";
	$message .= "Phone Number: " . $_POST['phone'] . "\r\n";
	$message .= "Enquiry: " . $_POST['other'];
	
	$headers = "From: DO_NOT_REPLY@webinnovations.hol.es";
?>
<html>
	<head>
		<title>Name of Company - Contact Us</title>
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
				<li><a href="services.php">Services</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li class="current"><a class="current" href="contact-us.php">Contact Us</a></li>
			</ul>
		</nav>
		<div class="container">
			<?php include 'sidebar.php';?>
			<div class="main border-inner">
				<div class="main-inner">
					<?php
						if (mail($to, $subject, $message, $headers)) {
								echo '<h3 class="point">We have recieved your enquiry and will get back to you as soon as possible!</h3>';
						} else {
							echo '<h3 class="point">There was an error sending this enquiry please try again!</h3>';
						}
					?>
				<img class="img" src="img/pic6.jpg">
				</div>
			</div>
			<?php include 'footer.php';?>
		</div>
	</body>
</html>