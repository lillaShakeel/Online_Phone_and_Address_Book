<?php
include_once "session.php";
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
<nav class="navbar navbar-expand-lg navbar-light shadow">
	<div class="container">
    <a class="navbar-brand mr-5" href="index.php">
    <img src="../img/logo.png">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   </ul>
  <ul class="navbar-nav ml-auto">
  <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="link" href="#" id="navbardrop" data-toggle="dropdown">
        <?php echo $admin['name'];?>
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="logout.php">Logout</a>
      </div>
    </li>
      </ul>    
    </div>
    </div>
</nav>
<div id="three">
<div class="container">
<div class="row">
<div class="col-md-4">
<div id="admin-box">
<h5><?php echo $admin['name'];?></h5>
<h6 class="pb-3">Admin</h6>
<hr>
<a href="add_user.php" id="button-link"><h5 class="pt-3" id="button-link-heading">&nbsp;&nbsp;<i class="fa fa-user-plus"></i> Add User</h5></a>
<a href="user.php"><h5 class="pt-2"><i class="fa fa-th-list"></i> Register User</h5></a>
<a href="contact.php"><h5 class="pt-2"><i class="fa fa-address-book-o"></i> Contact Info</h5></a>
<a href="download.php"><h5 class="pt-2"><i class="fa fa-download"></i> Download</h5></a>
</div>
</div>
<div class="col-md-8">
<div id="admin-box">
<div class="row">
<div class="col-md-12 mb-4">
<h4 class="text-center pb-3">Add User</h4>
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
<button type="submit" name="submit" class="btn btn-success mt-3">Register <i class=" fa fa-user-plus"></i></button>
</form>

</div>
</div>
<div class="row">
<div class="col-md-12" id="table-area">
<div class="col-md-12">

</div>
</div>
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
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$address=$_POST['address'];
	move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
	$img=$_FILES['img']['name'];
	$status="Pending";
	$sql="insert into user values('','$fname','$lname','$contact','$email','$password','$city','$zip','$img','$address','$status')";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>window.location.href='user.php'
		alert('Data insert successfully');
		</script>";
		
	}
	else{
		
		echo "<script>window.location.href='user.php'
		alert('Sorry!');
		</script>";
	}
}
?>