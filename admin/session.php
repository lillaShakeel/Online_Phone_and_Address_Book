<?php
session_start();
if(!isset($_SESSION['admin'])){
	header('location:index.php');
	
}
$con=mysqli_connect('localhost','root','','online-phone-and-address-book');
$sql="select * from admin where email='".$_SESSION['admin']."'";
$result=mysqli_query($con,$sql);
$admin=mysqli_fetch_array($result);
?>