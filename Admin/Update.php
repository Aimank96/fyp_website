<?php
//var_dump($_POST);
include '../DBCONFIG.php';

echo $Username=$_POST["Username"];
echo $Password=$_POST["Password"];
echo $Email=$_POST["Email"];
echo $PhoneNumb=$_POST["PhoneNumber"];
echo $AccBalance=$_POST["AccBalance"];
echo $ID=$_POST["ID"];

$sql="UPDATE Users SET `Username`='$Username', `Password`='$Password',"
        . " `Email`='$Email', `PhoneNumber`='$PhoneNumb', "
        . "`AccBalance`='$AccBalance' WHERE `ID`='$ID'";
$result= mysqli_query($con, $sql);
?>

