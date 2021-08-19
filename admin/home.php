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
<div id="three-one">
<div class="container">
<div class="row">
<div class="col-md-4">
<div id="admin-box">
<h5><?php echo $admin['name'];?></h5>
<h6 class="pb-3">Admin</h6>
<hr>
<a href="add_user.php"><h5 class="pt-3"><i class="fa fa-user-plus"></i> Add User</h5></a>
<a href="user.php"><h5 class="pt-2"><i class="fa fa-th-list"></i> Register User</h5></a>
<a href="contact.php"><h5 class="pt-2"><i class="fa fa-address-book-o"></i> Contact Info</h5></a>
<a href="download.php"><h5 class="pt-2"><i class="fa fa-download"></i> Download</h5></a>
</div>
</div>
<div class="col-md-8">
<div id="admin-box">
<div class="row">
<?php
$sql="select * from user";
$result=mysqli_query($con,$sql);
?>
<div class="col-md-4 text-center">
<div id="count-box-one">
<h5 class="text-white pt-4">Total User</h5>
<h6 class="text-white"><?php echo mysqli_num_rows($result);?></h6>
</div>
</div>
<?php
$sql="select * from user where status='Accept'";
$result=mysqli_query($con,$sql);
?>
<div class="col-md-4 text-center">
<div id="count-box-two">
<h5 class="text-white pt-4">Accepted Request</h5>
<h6 class="text-white"><?php echo mysqli_num_rows($result);?></h6>
</div>
</div>
<?php
$sql="select * from user where status='Pending'";
$result=mysqli_query($con,$sql);
?>
<div class="col-md-4 text-center">
<div id="count-box-three">
<h5 class="text-white pt-4">Pending Request</h5>
<h6 class="text-white"><?php echo mysqli_num_rows($result);?></h6>
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