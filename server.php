<?php
session_start();
//Initializing variables
$username="";
$email="";
$errors = array();
//connect to db
$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");
//register users
if(isset($_POST['username'])||isset($_POST['email'])||isset($_POST['password1'])||isset($_POST['password2'])){
$username = mysqli_real_escape_string($db,$_POST['username']);
$name = mysqli_real_escape_string($db,$_POST['name']);
$email = mysqli_real_escape_string($db,$_POST['email']);
$password1 = mysqli_real_escape_string($db,$_POST['password1']);
$password2 = mysqli_real_escape_string($db,$_POST['password2']);
};
//form validation
if(empty($username)){array_push($errors,"Username is required");};
if(empty($email)){array_push($errors,"Email is required");};
if(empty($password1)){array_push($errors,"Password is required");};
if(isset($_POST['password1'])||isset($_POST['password2'])){
if($password1 != $password2){array_push($errors,"Passwords do not match");};
};

//check db if user already exit
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email ='$email' ";//LIMIT 1";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);
if($user){
	if($user['username'] === $username){array_push($errors,"User already exits");};
	if($user['email'] === $email){array_push($errors,"Email already exits");};
};
//register user if no error
if(count($errors) == 0){
	$password = md5($password1); // THis encrypt the password
	$query = "INSERT INTO user(name,username,email,password,product) VALUES ('$name','$username','$email','$password',0)";
	mysqli_query($db,$query);
	$_SESSION['username'] = $username;
	$_SESSION['success'] = "You are now logged in";
	header("location: login.php");
};
?>