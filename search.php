<?php
include_once "header.php";
if(isset($_POST['submit'])){
	$search=$_POST['search'];
	$con=mysqli_connect('localhost','root','','online-phone-and-address-book');
	$sql="select * from contact_info where firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR email LIKE '%$search%' OR city LIKE '%$search%'";
	$result=mysqli_query($con,$sql);
?>
<div id="two">
<div class="container">
<div class="row">
<div class="col-md-12">
<h3><i class="fa fa-search"></i> Search Result: <?php echo mysqli_num_rows($result);?></h3>
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
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $row['firstname']." ".$row['lastname'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['city'];?></td>
</tr>
<?php } 
}
else {
	?>
    <tr>
    <td colspan="3" class="text-center">Sorry! No Result Found</td>
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
<?php }
else{
header('location:index.php');	
}
 ?>
