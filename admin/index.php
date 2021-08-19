<?php
session_start();
if(isset($_SESSION['admin'])){
	header('location:home.php');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Address Book</title>
<meta name="viewport" content="device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div id="one">
<div class="container">
<div class="row">
<div class="col-md-6 m-auto">
<h3 class="text-center pb-4">ONLINE PHONE AND ADDRESS BOOK</h3>
<div class="card">
<div class="card-body">
<h3 class="text-center py-2">Admin Login</h3>
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
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con=mysqli_connect('localhost','root','','online-phone-and-address-book');
	$sql="select * from admin where email='$email' AND password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if($row){
		$_SESSION['admin']=$row['email'];
		header('location:home.php');	
	}
	else{
		echo "<script>alert('Invalid email or password!');</script>";	
	}
}
?>