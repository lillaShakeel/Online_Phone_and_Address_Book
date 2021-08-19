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
<a href="add_user.php"><h5 class="pt-3"><i class="fa fa-user-plus"></i> Add User</h5></a>
<a href="user.php"><h5 class="pt-2"><i class="fa fa-th-list"></i> Register User</h5></a>
<a href="contact.php" id="button-link"><h5 class="pt-2" id="button-link-heading">&nbsp;&nbsp;<i class="fa fa-address-book-o"></i> Contact Info</h5></a>
<a href="download.php"><h5 class="pt-2"><i class="fa fa-download"></i> Download</h5></a>
</div>
</div>
<div class="col-md-8">
<div id="admin-box">
<div class="row">
<div class="col-md-12 mb-4">
<form method="post" class="form-inline" action="search_contact.php">
     <div class="input-group">
    <input class="form-control" type="text" name="search" required placeholder="Search contact...">
    <div class="input-group-append">
    <button type="submit" class="input-group-text" name="submit">Search</button>
    </div>
    </div>
  </form>
</div>
</div>
<div class="row">
<div class="col-md-12" id="table-area">
<div class="col-md-12">
<table class="table table-bordered" id="user-table">
<thead>
<tr>
<th>Sr #</th>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>City</th>
<th>Address</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$i=1;
$sql="select * from contact_info";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $i++;?></td>
<td><?php echo $row['firstname']." ".$row['lastname'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['address'];?></td>
<td>
<a href="delete_contact.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger ml-2"><i class="fa fa-trash"></i></button></a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
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
