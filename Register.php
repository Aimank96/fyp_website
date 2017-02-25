<?php
include 'DBCONFIG.php';

$Username = $_POST['Username'];
$Password = $_POST['Password'];




$sql="insert into Users(Username,Password) Values('$Username','$Password') ";

mysqli_query($con,$sql);

echo 'test';
?>