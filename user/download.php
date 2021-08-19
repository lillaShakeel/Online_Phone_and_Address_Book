<?php
include_once "session.php";
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Address_Book.csv');
$output= fopen("php://output", "w");
fputcsv($output, array('First Name','Last Name','Contact','Email','City','Address'));
$sql="select firstname, lastname, contact, email, city, address from contact_info where user_id='".$user['id']."'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result))
{
	fputcsv($output, $row);	
}
fclose($output);
?>
