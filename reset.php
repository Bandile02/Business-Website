<?
session_start();

$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");

if(!isset($_GET["code"])){
  exit("Can't find page");
}

$code = $_GET["code"];
$sq0="SELECT * FROM reset WHERE code='$code'";
$p_result=mysqli_query($db,$sq0);

if(mysqli_num_rows($p_result)===0){
  exit("Can't find page");
}
if(isset($_POST["psw1"]) and isset($_POST["psw2"])){
  $psw1=md5($_POST["psw1"]);
  $psw2=md5($_POST["psw2"]);
  if($psw1==$psw2){
    $p_row=mysqli_fetch_array($p_result);
    $p_email=$p_row["email"];
    $quer = "UPDATE user SET password='{$psw2}' WHERE email='{$p_email}'";
    mysqli_query($db,$quer);
    if($quer){
      $quer = "DELETE From reset WHERE code='{$code}'";
      mysqli_query($db,$quer);
      exit("PASSWORD UPDATE")
    }
  }else{
    echo "PASSWORD DO NOT MATCH";
  }
}
?>
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
            <center><h2> New Password</h2></center>
        </div>     
	</head>
    <body class="wrapper style2 special">
        <div class="test">
            <div class="inner">
                <div class="container">
                  <br>
                  <p>
                    Please enter your new password.
                  </p>
                    <form action="" method="post">
                    <div class="imgcontainer">
                   </div>
                    <div class="container">
                      <br>
                      <input type="password" placeholder="Enter Password" name="psw1" id="email" required>
                        <br>

                      <br>
                      <input type="password" placeholder="Confirm Password" name="psw2" id="email" required>
                      <br><br>
                     <center>
                      <button type="submit" name="recover">Recover Password</button></center>
                      <br>
                    </div>
                    <br>
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