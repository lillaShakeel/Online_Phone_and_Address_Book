<?php
include_once "header.php";
?>
<link rel="stylesheet" type="text/css" href="css/style.css">
<div id="two">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Attention! </strong>We will show you limited contact information. If you want to view the complete information of any contact then register into the system and login and view the contact and address of any user and you can also manage you address book.
</div>
<h2 class="text-center">Address Book</h2>
</div>
</div>
<div class="row">
<div class="col-md-12 mt-4">
<table class="table table-bordered">
<thead class="table-warning">
<tr>
<th>Name</th>
<th>Email</th>
<th>City</th>
</tr>
</thead>
<tbody>
<?php
$con=mysqli_connect('localhost','root','','online-phone-and-address-book');
$sql="select * from contact_info";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['firstname']." ".$row['lastname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['city'];?></td>
</tr>
<?php } ?>
</tbody>
</table>
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
