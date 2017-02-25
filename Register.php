<?php
include 'DBCONFIG.php';

//$Username = $_POST['Username'];
//$Password = $_POST['Password'];

$test1="aaa";
$test2="bbb";

$sql="insert into Users(Username,Password) Values('$test1','$test2) ";

mysqli_query($con,$sql);
?>