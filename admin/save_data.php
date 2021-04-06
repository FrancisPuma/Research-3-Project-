<?php
$fn = $_POST['txtfirstname'];
$ln = $_POST['txtlastname'];
$cn = $_POST['txtcontact'];
$pr = $_POST['optionsRadios'];
$grade = $_POST['txtgrade'];
$section = $_POST['txtsection'];

include('includes/connection.php');

$sql = "INSERT INTO tblusers VALUES(NULL,'$pr','$cn','$fn','$ln','$grade','$section')";

if (mysqli_query($connection_mysql, $sql))
{
	header('location:users.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}

?>