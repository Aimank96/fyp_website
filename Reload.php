<?php
include 'DBCONFIG.php';

$Identity=$_POST["id"];
$Credit=$_POST["credit"];

$sql="update Users set AccBalance ='$Credit' Where ID='$Identity'";
       if(mysqli_query($con, $sql)){
           echo 'Reload Succes';
       }