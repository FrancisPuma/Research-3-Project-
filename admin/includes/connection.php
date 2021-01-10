<?php

mysqli_connect("localhost","root","^R1n#I19p@!Ma") or
 die('Could not connect to the database!');
 $connection_mysql = mysqli_connect("localhost","root","^R1n#I19p@!Ma");

mysqli_select_db($connection_mysql, "phl") or
 die('No database selected!');

 function mysqli_result($res,$row,$field){
    mysqli_data_seek($res,$row);
    $datarow = mysqli_fetch_array($res);
    return $datarow[$field];
}
?>