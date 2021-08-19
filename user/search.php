<?php
include_once "session.php";
if(isset($_POST['submit'])){
	$search=$_POST['search'];
	$sql="select * from contact_info where firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR contact LIKE '%$search%' OR city LIKE '%$search%' OR address LIKE '%$search%'";
	$result=mysqli_query($con,$sql);
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
<a href="new_contact.php"><h5 class="pt-3"><i class="fa fa-address-book-o"></i> New Contact</h5></a>
<a href="contact.php" id="button-link"><h5 class="pt-2" id="button-link-heading">&nbsp;&nbsp;<i class="fa fa-th-list"></i> View Contact</h5></a>
<a href="download.php"><h5 class="pt-2"><i class="fa fa-download"></i> Download</h5></a>
</div>
</div>
<div class="col-md-8">
<div id="admin-box">
<div class="row">
<div class="col-md-12 mb-4">
<h4><i class="fa fa-search"></i> Search Result: <?php echo mysqli_num_rows($result);?></h4>
</div>
</div>
<div class="row">
<div class="col-md-12" id="table-area">
<div class="col-md-12">
<?php
if(mysqli_num_rows($result)>0){
?>
<table class="table table-bordered" id="user-table">
<thead>
<tr>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>City</th>
<th>Address</th>
</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['firstname']." ".$row['lastname'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['address'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
<?php
}
else{
	?>
    <h4 class="text-center">No Contact Available</h4>
<?php
}
?>
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
<?php }
else{
header('location:contact.php');	
}
?>