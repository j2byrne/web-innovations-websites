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
				<li class="current"><a class="current" href="about-me.php">About Me</a></li>
				<li><a href="services.php">Services</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact-us.php">Contact Us</a></li>
			</ul>
		</nav>
		<div class="container">
			<?php include 'sidebar.php';?>
			<div class="main border-inner">
				<div class="main-inner">
					<img class="img" src="img/pic3.jpg" style="height: 350px;"/>
					<p>
						I am a qualified Art Therapist with a Master Degree in Art Therapy from CIT Crawford College of Art and Design.
					</p>
					<p>
						I have experience with children and adults in a variety of settings. I have planned and conducted Art Therapy sessions for 
						clients dealing with bereavement, with mental health issues, eating disorders, learning and physical disabilities, sexual abuse 
						and in education. I am a member of the Irish Association of Creative Arts Therapists (IACAT) and I follow its professional and 
						ethical guidelines.
					</p> 
					<p>
						My approach to therapy is humanistic and non-directive. I value the uniqueness of each client and tailor my approach to meet 
						the client’s needs. I provide a safe and confidential environment in which clients can work creatively and explore their 
						feelings and concerns. 
					</p>
				</div>
			</div>
			<?php include 'footer.php';?>
		</div>
	</body>
</html>
