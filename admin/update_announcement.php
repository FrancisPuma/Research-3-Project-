<?php
date_default_timezone_set('Asia/Manila');
$autoid = $_POST['hid'];
$tl = $_POST['txttitle'];
$sj = $_POST['txtsubject'];
$msg = $_POST['txtmessage'];
$ud = date('Y-m-d');
$ut = date('H:i:s');
$sd = $_POST['txtdate'];
$st = $_POST['txttime'];
$un = $_POST['txtupload'];
$type = $_POST['optionsRadios'];
$role = isset($_POST['checkboxRole']) ? $_POST['checkboxRole'] : '';
$grade = isset($_POST['checkboxGrade']) ? $_POST['checkboxGrade'] : '';
$section7 = isset($_POST['checkboxSection7']) ? $_POST['checkboxSection7'] : '';
$section8 = isset($_POST['checkboxSection8']) ? $_POST['checkboxSection8'] : '';
$section9 = isset($_POST['checkboxSection9']) ? $_POST['checkboxSection9'] : '';
$section10 = isset($_POST['checkboxSection10']) ? $_POST['checkboxSection10'] : '';
$sectionSYP = isset($_POST['checkboxSectionSYP']) ? $_POST['checkboxSectionSYP'] : '';

include('includes/connection.php');

$sql1 = "UPDATE tblannouncement SET header='$tl', subject='$sj', content='$msg', upload_date='$ud', upload_time='$ut', send_date='$sd', send_time='$st', upload_name='$un', announcement_type='$type'  WHERE announcement_id='$autoid'";
$sql3 = "DELETE FROM tblidentifier WHERE announcement_id='$autoid'";

if (mysqli_query($connection_mysql, $sql1))
{
	mysqli_query($connection_mysql, $sql3);
    $last_id = $autoid;
    if(!empty($role))
	{  
		foreach ($role as $chk1)  
		{
			if($chk1=="staff")
			{
				$sql2 = "INSERT INTO tblidentifier VALUES($last_id, '$chk1', 'N/A', 'N/A')"; 
				mysqli_query($connection_mysql, $sql2);
			}
			elseif($chk1=="student")
			{
				if(!empty($grade))
				{  
					foreach ($grade as $chk2)
					{
						if ($chk2=="7")
						{
							if(!empty($section7))
							{	
								foreach ($section7 as $chk3)
								{
									$sql2 = "INSERT INTO tblidentifier VALUES($last_id, '$chk1', '$chk2', '$chk3')"; 
									mysqli_query($connection_mysql, $sql2); 
								}
							}
						}
						elseif ($chk2=="8")
						{
							if(!empty($section8))
							{
								foreach ($section8 as $chk3)
								{
									$sql2 = "INSERT INTO tblidentifier VALUES($last_id, '$chk1', '$chk2', '$chk3')"; 
									mysqli_query($connection_mysql, $sql2); 
								}
							}
						}
						elseif ($chk2=="9")
						{
							if(!empty($section9))
							{
								foreach ($section9 as $chk3)
								{
									$sql2 = "INSERT INTO tblidentifier VALUES($last_id, '$chk1', '$chk2', '$chk3')"; 
									mysqli_query($connection_mysql, $sql2); 
								}
							}
						}
						elseif ($chk2=="10")
						{
							if(!empty($section10))
							{
								foreach ($section10 as $chk3)
								{
									$sql2 = "INSERT INTO tblidentifier VALUES($last_id, '$chk1', '$chk2', '$chk3')"; 
									mysqli_query($connection_mysql, $sql2); 
								}
							}
						}
						elseif ($chk2=="11" or $chk2=="12")
						{
							if(!empty($sectionSYP))
							{
								foreach ($sectionSYP as $chk3)
								{
									$sql2 = "INSERT INTO tblidentifier VALUES($last_id, '$chk1', '$chk2', '$chk3')"; 
									mysqli_query($connection_mysql, $sql2); 
								}
							}
						}			
					}
				}
			}
		}
	}
	header('location:view_announcement.php');
}
else
{
	die('Unable to insert data:' .mysqli_error());
}
?>

<!-- 
$sql = "UPDATE tblannouncement SET Firstname='$fn', Lastname='$ln', Contact='$cn', Position='$pr', Grade='$grade', Section='$section' WHERE announcement_id='$autoid'";

if(mysqli_query($connection_mysql, $sql))
{
	header('location:users.php');
}
else
{
	die('Unable to update record: ' .mysqli_error());
} 
-->