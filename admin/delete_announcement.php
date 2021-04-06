<?php
$id = $_GET['delID'];

include('includes/connection.php');

$sql1 = "DELETE FROM tblannouncement WHERE announcement_id=$id";
if(mysqli_query($connection_mysql, $sql1))
{
	$sql2 = "DELETE FROM tblidentifier WHERE announcement_id=$id";
    mysqli_query($connection_mysql, $sql2);
    header('location:view_announcement.php');
}
else
{
	die('Could not delete announcement record:' .mysqli_error());
}
?>