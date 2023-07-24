<?php

$server="sql204.epizy.com";
$username_db="epiz_29709796";
$password_db="fIxVYVzdv2g";
$dbname="epiz_29709796_alprize";
$db = mysqli_connect($server,$username_db,$password_db,$dbname) or die("could not connect");
$id=$_SESSION['id'];
$product = '0';
$quer = "UPDATE user SET product='{$product}' WHERE id='{$id}'";
mysqli_query($db,$quer);
header("Location: home_page.php");
?>