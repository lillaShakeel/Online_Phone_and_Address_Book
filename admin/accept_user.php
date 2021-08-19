<?php
include_once "session.php";
$id=$_REQUEST['id'];
$status="Accept";
$sql="update user set status='$status' where id='$id'";
$result=mysqli_query($con,$sql);
if($result){
	echo "<script>window.location.href='user.php'
	alert('Registration request accepted');</script>";
	
}
else{
	echo "<script>window.location.href='user.php'
	alert('Sorry');</script>";
	
}
?>