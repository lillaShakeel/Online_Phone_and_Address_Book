<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:../index.php');
	
}
$con=mysqli_connect('localhost','root','','online-phone-and-address-book');
$sql="select * from user where email='".$_SESSION['user']."'";
$result=mysqli_query($con,$sql);
$user=mysqli_fetch_array($result);
?>