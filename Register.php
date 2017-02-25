<?php
include 'DBCONFIG.php';

    //$Username = $_POST['Username'];
   // $Password = $_POST['Password'];
    //$Email = $_POST['Email'];
   // $PhoneNumber = $_POST['PhoneNumb'];
   // $AccBalance = 0;

  $Username ='aa';
    $Password = 'aa';
    $Email = '$_POST[Email';
    $PhoneNumber = 'PhoneNumb';
    $AccBalance = 0;

    $sql="insert into Users(Username,Password,Email,PhoneNumber,AccBalance) Values('$Username','$Password','$Email','$PhoneNumber','$AccBalance') ";

mysqli_query($con,$sql);
echo 'masuk kew eb';
?>