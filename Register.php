<?php
include 'DBCONFIG.php';

//$Username = $_POST['Username'];
//$Password = $_POST['Password'];

$Username ='ssss';
$Password='sssa';

$sql="insert into Users(Username,Password) Values('$Username','$Password') ";

mysqli_query($con,$sql);

echo "username is $Username password is '$Password'" ;
?>