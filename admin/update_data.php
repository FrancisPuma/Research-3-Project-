<?php
$autoid = $_POST['hid'];
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$cn = $_POST['txtcontact'];
$pr = $_POST['optionsRadios'];
$grade = $_POST['txtgrade'];
$section = $_POST['txtsection'];

include('includes/connection.php');

$sql = "UPDATE tblusers SET Firstname='$fn', Lastname='$ln', Contact='$cn', Position='$pr', Grade='$grade', Section='$section' WHERE id='$autoid'";

if(mysqli_query($connection_mysql, $sql))
{
	header('location:users.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
}
?>