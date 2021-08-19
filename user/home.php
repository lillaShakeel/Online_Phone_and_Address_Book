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
<div id="three-one">
<div class="container">
<div class="row">
<div class="col-md-4">
<div id="admin-box">
<h5><?php echo $user['firstname']." ".$user['lastname'];?></h5>
<h6 class="pb-3">User</h6>
<hr>
<a href="new_contact.php"><h5 class="pt-3"><i class="fa fa-address-book-o"></i> New Contact</h5></a>
<a href="contact.php"><h5 class="pt-2"><i class="fa fa-th-list"></i> View Contact</h5></a>
<a href="download.php"><h5 class="pt-2"><i class="fa fa-download"></i> Download</h5></a>
</div>
</div>
<div class="col-md-8">
<div id="admin-box">
<div class="row">
<div class="col-md-12">
<h4 class="text-center"><i class="fa fa-desktop fa-3x"></i></h4>
<h6 class="text-center">Welcome on Board</h6>
<h3 class="text-center"><?php echo $user['firstname']." ".$user['lastname'];?></h3>
</div>
</div>
</div>
</div>


</div>
</div>
</div>
</body>
</html>