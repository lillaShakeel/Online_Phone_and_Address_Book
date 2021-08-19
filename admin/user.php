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
<a href="user.php" id="button-link"><h5 class="pt-2" id="button-link-heading">&nbsp;&nbsp;<i class="fa fa-th-list"></i> Register User</h5></a>
<a href="contact.php"><h5 class="pt-2"><i class="fa fa-address-book-o"></i> Contact Info</h5></a>
<a href="download.php"><h5 class="pt-2"><i class="fa fa-download"></i> Download</h5></a>
</div>
</div>
<div class="col-md-8">
<div id="admin-box">
<div class="row">
<div class="col-md-12 mb-4">
<form method="post" class="form-inline" action="search.php">
     <div class="input-group">
    <input class="form-control" type="text" name="search" required placeholder="Search user...">
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
<th></th>
<th>Name</th>
<th>Contact</th>
<th>Email</th>
<th>Password</th>
<th>City</th>
<th>Zip</th>
<th>Address</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$sql="select * from user";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><img src="../img/<?php echo $row['image'];?>" height="50px" width="50px"></td>
<td><?php echo $row['firstname']." ".$row['lastname'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['zip'];?></td>
<td><?php echo $row['address'];?></td>
<td>
<?php
if($row['status']=="Pending"){
	?>
    <i class="badge badge-pill badge-warning mb-2">Pending</i><br>
    <button class="btn btn-sm btn-success" onClick="accept(<?php echo $row['id'];?>)"><i class="fa fa-user-plus"></i></button>
    <button class="btn btn-sm btn-danger" onClick="reject(<?php echo $row['id'];?>)"><i class="fa fa-user-times"></i></button>
<?php
}
else if($row['status']=="Accept"){
?>
<i class="badge badge-pill badge-success">Accepted</i>
<button class="btn btn-sm btn-danger" onClick="reject(<?php echo $row['id'];?>)"><i class="fa fa-user-times"></i></button>
<?php
}
else{
?>
<i class="badge badge-pill badge-danger">Rejected</i>
 <button class="btn btn-sm btn-success" onClick="accept(<?php echo $row['id'];?>)"><i class="fa fa-user-plus"></i></button>
<?php
}
?>
</td>
<td>
<a href="update_user.php?id=<?php echo $row['id'];?>"><button class="btn btn-success"><i class="fa fa-edit"></i></button></a>
<a href="delete_user.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger ml-2"><i class="fa fa-trash"></i></button></a>
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
<script>
function accept(id){
	if(confirm('Do You want to accept registration request?')==true){
		window.location.href='accept_user.php?id='+id;
	}
	
}
function reject(id){
	if(confirm('Do You want to reject registration request?')==true){
		window.location.href='reject_user.php?id='+id;
	}
	
}

</script>