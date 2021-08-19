<?php
include_once "session.php";
$id=$_REQUEST['id'];
$sql="delete from contact_info where user_id='$id'";
$result=mysqli_query($con,$sql);
$sql="delete from user where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>window.location.href='user.php'
	alert('User Data deleted successfully');</script>";
	
}
else{
	echo "<script>window.location.href='user.php'
	alert('Sorry');</script>";
	
}
?>