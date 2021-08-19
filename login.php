<?php
include_once "header.php";
session_start();
if(isset($_SESSION['user'])){
	header('location:user/home.php');
}
?>
<div id="one">
<div class="container">
<div class="row">
<div class="col-md-6 m-auto">
<div class="card">
<div class="card-body">
<h3 class="text-center py-2">Login</h3>
<form method="post">
<div class="form-group">
<label>Email<i class="text-danger">*</i></label>
<input type="email" name="email" required class="form-control mb-2">
</div>
<div class="form-group">
<label>Password<i class="text-danger">*</i></label>
<input type="password" name="password" required class="form-control mb-2">
</div>
<button type="submit" name="submit" class="btn btn-success my-3">Login <i class="fa fa-sign-in"></i></button>
<a href="register.php"><button type="button" class="btn btn-primary my-3 ml-2">Register <i class="fa fa-user-plus"></i></button></a>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="footer">
<div class="container">
<div class="row">
<div class="col-md-12">
<h4 class="text-white text-center py-4">&copy Copyright all right Reserved BSCS</h4>
</div>
</div>
</div>
</div>
<?php
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','','online-phone-and-address-book');
	$sql="select * from user where email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row){
		if($row['status']=='Pending'){
			echo "<script>alert('Your account is not approved!');</script>";
		}
		else if($row['status']=='Reject'){
			echo "<script>alert('Your registration request is rejected!');</script>";
		}
		else{
		$_SESSION['user']=$row['email'];
		header('location:user/home.php');
		}
	}
	else{
		echo "<script>alert('Invalid email or password!');</script>";	
	}
}
?>