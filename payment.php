<?php

$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");
session_start();
?>
<!DOCTYPE HTML>
<html >
	<head style="background-color: aquamarine;">
		<title>Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="assets/js/ie/html5shiv.js"></script>
		<script src="assets/js/ie/jquery.min.js"></script>
    <script src="https://www.payfast.co.za/onsite/engine.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		
	</head>
    <body class="wrapper style2 special">
        <div class="row">

            <div class="inner">
              <div class="container">
                <form action="/action_page.php">
                <center>
                  <div class="major narrow">
          
                    <div>
                      <h2>PAYMENT</h2>
                     
                      <label for="cname" ><p>NAME ON CARD</p></label>
                      <input type="text" id="cname" name="cardname" placeholder="John Sibeko" style="width: 300px;">
                      <br>
                      <label for="ccnum"><p>CARD NUMBER</p></label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" style="width: 300px;">
                      <br>
                      <div class="clearfix">
                      <label for="expmonth"><p>EXP MONTH</p></label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="11" style="width: 300px;">
                      <br>
                      <label for="expyear">EXP YEAR</label>
                      <input type="text" id="expyear" name="expyear" placeholder="2018" style="width: 300px;">
                      </div>
                      <br>
                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352" style="width: 300px;">
                    </div>
                  <br>
                  <input type="submit" value="Continue to checkout" name="paynow" class="btn">
                  <?php include('checkout.php')?>
                </center>
                </form>
              </div>
            </div>
        
          </div>

		<!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

    </body>
</html>