<!DOCTYPE html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h2>Corporate Hospitality<h2>
			<h3> Call Us: 0862414360<h3>
		</header>
		<nav>
			<img class="menuicon" src="img/menu.png">
			<ul class="navbar">
				<li><a href="index.php">Home</a></li>
				<li><a href="price-list.php">Price List</a></li>
				<li><a href="special-offers.php">Special Offers</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<img class="banner" src="img/banner.jpg" oncontextmenu="return false">
		<div class="container">
			<h1 class="title">Corporate Hospitality is based in Meath but offer a nationwide delivery service.</h1>
			<div class="contact-info-div" style="width: 27%; float: left;">
				<p class="contact-info"><span class="green">Address:</span><br>Summerhill,<br>Meath,<br>Ireland.<p>
				<p class="contact-info"><span class="green">Phone:</span><br>0862414360<br>0469558787</p>
				<p class="contact-info"><span class="green">Email:</span><br>hire@corporatehospitality.ie</p>
			</div>
			<div class="contact-us-form" style="width: 70%; float: left;">
				<?php include 'contact-form.php'; ?>
			</div>
		</div>
		<footer>
			<div class="left">
				<p class="contact-info">Address:<br>Summerhill,<br>Meath,<br>Ireland.<p><br><a href="webinnovations.ie">Designed By Web Innovations</a>
			</div>
			<div class="right">
				<div>
					<p class="contact-info">Phone:<br>0862414360<br>0469558787</p>
					<p class="contact-info">Email:<br>hire@corporatehospitality.ie</p>
				</div>
			</div>
		</footer>
	</body>
</html>
