<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Initializing variables
$username  ="";
$email     ="";
$errors    = array();
//connect to db

$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");

if(isset($_POST['login']) and isset($_POST['password'])){
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password']);
	$passcode = md5($password);

	$sql="SELECT * FROM user WHERE username='$username' and password='$passcode'";
	$result=mysqli_query($db,$sql);

	if(mysqli_num_rows($result) === 1){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['loggedin']  = 1;
		$_SESSION['name']      = $row['name'];
		$_SESSION['username']  = $row['username'];
		$_SESSION['email']     = $row['email'];
		$_SESSION['id']        = $row['id'];
		$_SESSION['product']   = $row['product'];

		if($row['product']=='0'){header("location: home_page.php");}
		if($row['product']=='1'){header("location: home_typic.php");}
		if($row['product']=='2'){header("location: home_pro.php");}
		if($row['product']=='3'){header("location: home_premuim.php");}
	}
}

?>