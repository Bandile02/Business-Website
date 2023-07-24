<script src="https://www.payfast.co.za/onsite/engine.js"></script>
<?php

$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");
session_start();
	if(!isset($_SESSION['loggedin'])){header('Location: sign_in.php');}

	setcookie('cookie', 'value', [
	    'expires' => time() + 86400,
	    'path' => '/',
	    'domain' => 'https://119b7e66cead.ngrok.io',
	    'secure' => true,
	    'httponly' => true,
	    'samesite' => 'None',
	]);

		function dataToString($dataArray) {
		  // Create parameter string
		    $pfOutput = '';
		    foreach( $dataArray as $key => $val ) {
		        if($val !== '') {
		            $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
		        }
		    }
		    // Remove last ampersand
		    return substr( $pfOutput, 0, -1 );
		}

		function generatePaymentIdentifier($pfParamString, $pfProxy = null) {
		    // Use cURL (if available)
		    if( in_array( 'curl', get_loaded_extensions(), true ) ) {
		        // Variable initialization
		        $url = 'https://www.payfast.co.za/onsite/process';

		        // Create default cURL object
		        $ch = curl_init();

		        // Set cURL options - Use curl_setopt for greater PHP compatibility
		        // Base settings
		        curl_setopt( $ch, CURLOPT_USERAGENT, NULL );  // Set user agent
		        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );      // Return output as string rather than outputting it
		        curl_setopt( $ch, CURLOPT_HEADER, false );             // Don't include header in output
		        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 2 );
		        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, true );

		        // Standard settings
		        curl_setopt( $ch, CURLOPT_URL, $url );
		        curl_setopt( $ch, CURLOPT_POST, true );
		        curl_setopt( $ch, CURLOPT_POSTFIELDS, $pfParamString );
		        if( !empty( $pfProxy ) )
		            curl_setopt( $ch, CURLOPT_PROXY, $pfProxy );

		        // Execute cURL
		        $response = curl_exec( $ch );
		        curl_close( $ch );
		        echo $response;
		        $rsp = json_decode($response, true);
		        if ($rsp['uuid']) {
		            return $rsp['uuid'];
		        }
		    }
		    return null;
		}

	function generateSignature($data, $passPhrase) {
	    // Create parameter string
	    $pfOutput = '';
	    foreach( $data as $key => $val ) {
	        if($val !== '') {
	            $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
	        }
	    }
	    // Remove last ampersand
	    $getString = substr( $pfOutput, 0, -1 );
	    if( $passPhrase !== null ) {
	        $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
	    }
	    return md5( $getString );
	}
	
	function popup(int $price, $product,$item_name,$return_ur,$cancel_ur,$notify_ur){
	//UPDATE USER DETAILS
		$cartTotal = $price;
		$product = $product;		
		$server="sql204.epizy.com";
		$username_db="epiz_29709796";
		$password_db="fIxVYVzdv2g";
		$dbname="epiz_29709796_alprize";
		$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");
		$quer = "UPDATE user SET product='{$product}' WHERE id='{$_SESSION['id']}'";
		mysqli_query($db,$quer);
		$passPhrase = 'Alprize_business21';
		$data = array(
		// Merchant details
		'merchant_id' => '18011501',
		'merchant_key' => 'hx4y58k8q08bl',
		'return_url' => $return_ur,
		'cancel_url' => 'https://119b7e66cead.ngrok.io/home_page.php',
		'notify_url' => 'https://119b7e66cead.ngrok.io/notify.php',
		// Buyer details
		'name_first' => $_SESSION['name'],
		'email_address'=> $_SESSION['email'],
		// Transaction details
		'm_payment_id' => $_SESSION['id'], //Unique payment ID to pass through to notify_url
		'amount' => number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' ),
		'item_name' => $item_name
			);
	// Generate signature (see Custom Integration -> Step 2)
		$signature = generateSignature($data, $passPhrase);
		$data["signature"] = $signature;
	// Convert the data array to a string
		$pfParamString = dataToString($data);
	// Generate payment identifier
		$identifier = generatePaymentIdentifier($pfParamString);
		if($identifier!== null){
        echo '<script type="text/javascript">window.payfast_do_onsite_payment({"uuid":"'.$identifier.'"});</script>';
    }
	}

	if(isset($_POST['paynow1'])){
		popup(20.00,'1','Order#01','https://119b7e66cead.ngrok.io/home_typic.php');}
	if(isset($_POST['paynow2'])){
		popup(50.00,'2','Order#02','https://119b7e66cead.ngrok.io/home_pro.php');}
	if(isset($_POST['paynow3'])){
		popup(100.00,'3','Order#03','https://119b7e66cead.ngrok.io/home_premuim.php');}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="https://www.payfast.co.za/onsite/engine.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		
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
				<li class="fa icon-diamond" ><a href="home_page.php">
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
					<h2>Products We Offer</h2>
				</header>
			
			</div>
		</section>


			<section id="one" class="wrapper style1 special">
				<div class="inner">
					
					<article class="feature right">
						<span class="image" ><img src="images/Subscribe1.png" alt="" />
						</span>
						<div class="content">
						<h2>Alprize</h2>
						<p><b>Aprize Typic offers a wide range of store that are well-known.<br></b>
						<i>Are you Tired of going for one store to another just to look for price?</i><br>
						<i>Are you tired of entering a store and not knowing if you have enough cash?</i>
						<h5><i>Don't Worry We Are Here For You</i></h5><br>
						<h3>Alprize Typic Benefits:</h3>
						<li>View Prices In Your Social Media</li>
						<li>Up To A Total of 9 Stores</li>
						<li>Comparison of Prices</li>
						<li>Help You Budget</li>
					</p>
							<ul class="actions">
									<li>
										<form method="POST" action="home_page.php">
										<input type="submit" name="paynow1" class="button alt" value="SUBSCRIBE R20">
										
										</form>
									</li>
							</ul>
						</div>
					</article>

					<article class="feature left">
						<span class="image"><img src="images/Subscribe2.png" alt="" /></span>
						<div class="content">
							<h2>Alprize Pro</h2>
							 <p><b>Aprize Typic offers a wide range of store that are well-known.<br></b>
							<i>Are you Tired of going for one store to another just to look for price?</i><br>
							<i>Are you tired of entering a store and not knowing if you have enough cash?</i>
							<h5><i>Don't Worry We Are Here For You</i></h5><br>                                           
							<h3>Alprize Typic Benefits:</h3>
							<li>View Prices In Your Social Media</li>
							<li>Up To A Total of 24 Stores</li>
							<li>Comparison of Prices</li>
							<li>Help You Budget</li>
							</p>
								<br>
							<ul class="actions">
								<li>
									<form method="POST" action="home_page.php">
									<input type="submit" name="paynow2" class="button alt" value="SUBSCRIBE R50">
									</form>
								</li>
							</ul>
						</div>
					</article>
					
					<article class="feature right">
						<span class="image"><img src="images/Subscribe3.png" alt="" /></span>
						<div class="content">
							<h2>Alprize Premium</h2>
							<p><b>Aprize Typic offers a wide range of store that are well-known.<br></b>
						<i>Are you Tired of going for one store to another just to look for price?</i><br>
						<i>Are you tired of entering a store and not knowing if you have enough cash?</i>
						<h5><i>Don't Worry We Are Here For You</i></h5><br>
						<h3>Alprize Typic Benefits:</h3>
						<li>View Prices In Your Social Media</li>
						<li>Up To A Total of 49 Stores</li>
						<li>Comparison of Prices</li>
						<li>Help You Budget</li>
					</p>
							<ul class="actions">
								<li><form method="POST" action="checkout.php">
									<input type="submit" name="paynow3" class="button alt" value="SUBSCRIBE R100">
									</form>
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
