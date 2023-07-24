<?php


$db = mysqli_connect('localhost','root','','practice') or die("could not connect");

session_start();


if(!isset($_SESSION['loggedin'])){
	//header('Location: index.php');
}

print_r($_POST['pro1']);
if(isset($_POST['pro1'])){
$id=$_SESSION['id'];
$product='1';
$_SESSION['product']=$product;
$quer = "UPDATE `user` SET `product`='$product' WHERE '$id'";
mysqli_query($db,$quer);
print_r($_SESSION['product']);
}

if(isset($_POST['pro2'])){
$id=$_SESSION['id'];
$product='2';
$_SESSION['product']=$product;
$quer = "UPDATE user SET product='$product' WHERE id='$id'";
mysqli_query($db,$quer);
}

if(isset($_POST['pro3'])){
$id=$_SESSION['id'];
$product='3';
$_SESSION['product']=$product;
$quer = "UPDATE user SET product='$product' WHERE id='$id'";
mysqli_query($db,$quer);
}
?>