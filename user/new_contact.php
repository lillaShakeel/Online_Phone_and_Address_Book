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
    <a class="navbar-brand mr-5" href="home.php">
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
        <?php echo $user['firstname']." ".$user['lastname'];?>
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
<h5><?php echo $user['firstname']." ".$user['lastname'];?></h5>
<h6 class="pb-3">User</h6>
<hr>
<a href="new_contact.php" id="button-link"><h5 class="pt-3" id="button-link-heading">&nbsp;&nbsp;<i class="fa fa-address-book-o"></i> New Contact</h5></a>
<a href="contact.php"><h5 class="pt-2"><i class="fa fa-th-list"></i> View Contact</h5></a>
<a href="download.php"><h5 class="pt-2"><i class="fa fa-download"></i> Download</h5></a>
</div>
</div>
<div class="col-md-8">
<div id="admin-box">
<div class="row">
<div class="col-md-12 mb-4">
<h4 class="text-center pb-3">New Contact</h4>
<form method="post">
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
<label>City<i class="text-danger">*</i></label>
<input type="text" name="city" required class="form-control mb-2">
</div>
<div class="form-group">
<label>Complete Address<i class="text-danger">*</i></label>
<textarea name="address" rows="3" class="form-control mb-2"></textarea>
</div>
<button type="submit" name="submit" class="btn btn-success mt-3">Submit <i class=" fa fa-address-book-o"></i></button>
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
	$city=$_POST['city'];
	$address=$_POST['address'];
	$user_id=$user['id'];
	$sql="insert into contact_info values('','$user_id','$fname','$lname','$contact','$email','$city','$address')";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "<script>window.location.href='contact.php'
		alert('Data insert successfully');
		</script>";
		
	}
	else{
		
		echo "<script>window.location.href='contact.php'
		alert('Sorry!');
		</script>";
	}
}
?>