<?php
// $AdminAutoId = $_POST['uAid'];
$pw = $_POST['txtpassword'];

include('includes/connection.php');

$sql = "UPDATE tbladministrator SET pass='$pw' WHERE id='1'";

if(mysqli_query($sql))
{
	header('location:logout.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
}
?>