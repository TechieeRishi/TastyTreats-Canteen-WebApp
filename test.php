<?php 

$hostname = "localhost";
$database = "sitedata";
$username = "root";
$password = "";

$con=mysqli_connect($hostname,$username,$password,$database);

$result = mysqli_query($con,"SELECT * FROM `products` WHERE `id` = '1' ");
$row = mysqli_fetch_array($result);

?>