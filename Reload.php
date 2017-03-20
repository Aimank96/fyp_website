<?php
include 'DBCONFIG.php';

$Identity=$_POST["id"];
$Credit=$_POST["credit"];

$sql="update Users set AccBalance ='$Credit' Where ID='$Identity'";
        mysqli_query($con, $sql);