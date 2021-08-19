<?php
include_once "header.php";
?>
<div id="one">
<div class="container">
<div class="row">
<div class="col-md-8 m-auto">
<div class="card">
<div class="card-body">
<h3 class="text-center py-2">Register</h3>
<form method="post" enctype="multipart/form-data">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label>First Name<i class="text-danger">*</i></label>
<input type="text" name="fname" required class="form-control mb-2">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label>Last Name<i class="text-danger">*</i></label>
<input type="text" name="lname" required class="form-control mb-2">
</div>
</div>
</div>
<div class="form-group">
<label>Contact<i class="text-danger">*</i></label>
<input type="number" pattern="[0-9]{11}" required name="contact" class="form-control mb-2">
</div>
<div class="form-group">
<label>Email<i class="text-danger">*</i></label>
<input type="email" name="email" required class="form-control mb-2">
</div>
<div class="form-group">
<label>Password<i class="text-danger">*</i></label>
<input type="password" name="password" required class="form-control mb-2">
</div>
<div class="form-group">
<label>City<i class="text-danger">*</i></label>
<input type="text" name="city" required class="form-control mb-2">
</div>
<div class="form-group">
<label>Post Code / Zip<i class="text-danger">*</i></label>
<input type="number" name="zip" required class="form-control mb-2">
</div>
<div class="form-group">
<label>Profile Picture<i class="text-danger">*</i></label>
<input type="file" name="img" required class="form-control mb-2">
</div>
<div class="form-group">
<label>Complete Address<i class="text-danger">*</i></label>
<textarea name="address" rows="3" class="form-control mb-2"></textarea>
</div>
<button type="submit" name="submit" class="btn btn-success my-3">Register <i class="fa fa-user-plus"></i></button>
<a href="login.php"><button type="button" class="btn btn-primary my-3 ml-2">Login <i class="fa fa-sign-in"></i></button></a>
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
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	move_uploaded_file($_FILES['img']['tmp_name'],"img/".$_FILES['img']['name']);
	$img=$_FILES['img']['name'];
	$address=$_POST['address'];
	$status="Pending";
	$con=mysqli_connect('localhost','root','','online-phone-and-address-book');
	$sql="select * from user where email='$email'";
	$result=mysqli_query($con,$sql);
	if(mysqli_num_rows($result)>0){
	$sql="insert into user values('','$fname','$lname','$contact','$email','$password','$city','$zip','$img','$address','$status')";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>window.location.href='index.php'
		alert('Account Created Successfully');
		</script>";
		
	}
	else{
		
		echo "<script>window.location.href='index.php'
		alert('Sorry!');
		</script>";
	}
	}
	else{
		echo "<script>alert('This email already exist!');</script>";
		
	}
}
?>