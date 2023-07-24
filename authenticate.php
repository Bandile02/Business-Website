<?php
//connect to db

$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");
//register users
if(isset($_POST['password1']) and isset($_POST['password2'])){

$password1 = mysqli_real_escape_string($db,$_POST['password1']);
$password2 = mysqli_real_escape_string($db,$_POST['password2']);
if($password1 != $password2){echo "Passwords do not match";};
};
if(isset($_POST['username']) and isset($_POST['password1'])){
	$username = mysqli_real_escape_string($db,$_POST['username']);
	$password = mysqli_real_escape_string($db,$_POST['password1']);
	$passcode = md5($password);

	$sql="SELECT * FROM user WHERE username='$username' and password='$passcode'";
	$result=mysqli_query($db,$sql);

	if(mysqli_num_rows($result) === 1){
		$row=mysqli_fetch_assoc($result);
		print_r($username);
	}
}
?>