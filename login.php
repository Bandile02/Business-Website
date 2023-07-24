
<!DOCTYPE HTML>
<html >
	<head>
		<title>Retrospect by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<script src="assets/js/ie/jquery.min.js"></script>
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<div class="test">
            <a href="index.php"><center><h2>Login</h2></center></a>
        </div>     
	</head>
    <body class="wrapper style2 special">
        <div class="test">
            <div class="inner">
                <div class="container">
                <form action="" method="post">
                    <div class="imgcontainer">
                   </div>
                    <br>
                    <div class="container">
                      <label for="username"><b>Username</b></label>
                      <br>
                      <input type="text" placeholder="Enter Username" name="username" id="username" required>
                        <br>
                      <label for="password"><b>Password</b></label>
                      <br>
                      <input type="password" placeholder="Enter Password" name="password" id="password" required>
                        <br>
                      <button type="submit" name="login">
                      <?php include('logged.php')?>Login</button>
                      <br>
                    </div>
                    <br>
                    <div class="container">
                      <span class="password">Forgot <a href="forgot.php">password?</a></span>
                    </div>
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