<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Address Book</title>
<meta name="viewport" content="device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light shadow">
	<div class="container">
    <a class="navbar-brand mr-5" href="index.php">
    <img src="img/logo.png">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
   </ul>
     <ul class="navbar-nav">
      <li class="nav-item">
      
     <form method="post" class="form-inline" action="search.php">
     <div class="input-group">
    <input class="form-control" type="text" name="search" required placeholder="Search contact...">
    <div class="input-group-append">
    <button type="submit" class="input-group-text" name="submit">Search</button>
    </div>
    </div>
  </form>
  </li>  
    </ul>
  <ul class="navbar-nav ml-auto">
  <li class="nav-item">
        <a class="nav-link" href="login.php">Login / Register</a>
      </li>
      </ul>    
   

    </div>


    </div>
</nav>
</body>
</html>