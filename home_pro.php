<?php

$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");
session_start();
if(!isset($_SESSION['loggedin'])){header('Location: sign_in.php');}
?>
<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="assets/js/ie/jquery.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="index.php">Nontsiba Enterprise</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav" >
				<ul class="links">
					<li ><a href="index.php">Home</a></li>	
					<li ><a href="test.php">Log Out</a></li>
					<li ><a href="about.php">About Us</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<li class="fa icon-diamond" ><a href="home_1.php">
					<img id="logoSize" src="images/Pro.png"/>
				</a></li>
				<h2>Welcome <?php echo($_SESSION['name']);?></h2>
				<p>We Are Committed To Excellence</p>
				<ul class="actions">
					<li></li>
				</ul>
			</section>

			
		<!-- One -->
		
		<section id="three" class="wrapper style3 special">
			<div class="inner">
				<header class="major narrow	">
					<h2>Your Subscription</h2>
				</header>
			
			</div>
		</section>
			<section id="one" class="wrapper style1 special">
				<div class="inner">
					<article class="feature right">
						<span class="image" ><img src="images/Subscribed2.png" alt="" />
						</span>
						<div class="content">
					    <h2>Alprize Pro</h2>
						<p><b>You are currently subscribed to Alprize Pro Account<br></b>

						<h3>Your Account Offers:</h3>
						<li>Display Of Prices On Social Media</li>
						<li>Unlimited Access To Prices</li>
						<li>Comparison Of Prices</li>
						<li>A Total Of 24 Stores</li>
					</p>
							<ul class="actions">
									<li>
										<a href="unsubscribe.php" class="button alt">UNSUBSCRIBE</a>	
									</li>
							</ul>
						</div>
					</article>
					</div>
			</section>

			<section id="banner">
				<div class="inner">
					<header class="major narrow	">
					<h2>OTHER PRODUCTS</h2>
					<p>AWAITING YOU</p>
					</header>
				</div>
			</section>

			<section id="one" class="wrapper style1 special">
				<div class="inner">
						<article class="feature left">
						<span class="image"><img src="images/Subscribe1.png" alt="" /></span>
						<div class="content">
							<div class='blur'>
							<p>Alprize Typic</p>
							 <p>Aprize Typic offers a wide range of store that are well-known.<br>
							<i>Are you Tired of going for one store to another just to look for price?</i><br>
							<i>Are you tired of entering a store and not knowing if you have enough cash?</i>
							<p><i>Don't Worry We Are Here For You</i></p><br>
							<p>Alprize Typic Benefits:</p>
							<li>View Prices In Your Social Media</li>
							<li>Up To A Total of 9 Stores</li>
							<li>Comparison of Prices</li>
							<li>Help You Budget</li>
							</p></div>
								<br>
							<ul class="actions">
								<li>
									<a href="pro1.php" class="button alt" name="paynow">DOWNGRADE R 19,97</a>
								</li>
							</ul>
						</div>
					</article>
					
					<article class="feature left">
						<span class="image"><img src="images/Subscribe3.png" alt="" /></span>
						<div class="content">
							<div class="blur">
							<p>Alprize Premium</p>
							<p>Aprize Premium offers a wide range of store that are well-known.<br>
						Are you Tired of going for one store to another just to look for price?<br>
						Are you tired of entering a store and not knowing if you have enough cash?
						<p>Don't Worry We Are Here For You</p><br>
						<p>Alprize Premium Benefits:</p>
						<li>View Prices In Your Social Media</li>
						<li>Up To A Total of 49 Stores</li>
						<li>Comparison of Prices</li>
						<li>Help You Budget</li>
					</p></div>
							<ul class="actions">
								<li>
									<a href="pro3.php" class="button alt" name="paynow">UPGRADE R 99,97</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		

		<!-- Three -->
			<section id="banner">
				<div class="inner">
					<header class="major narrow	">
						<h2>Opening Hours</h2>
						<p>08:00 AM TO 16:00 PM</p>
					</header>
					<ul class="actions">
						<li><a href="mailto:nontsibaenterprise@gmail.com" class="button big alt">Get In Touch</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="Four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>Send Us A Message And We Will Get Back To You</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><a href="mailto:nontsibaenterprise@gmail.com"><input type="submit" class="special" value="Submit" /></a></li>
						
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="https://m.facebook.com/Nontsiba/" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="https://www.instagram.com/nontsiba/?hl=en" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
					
					</ul>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>