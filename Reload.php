<?php
include 'DBCONFIG.php';

//$Identity=$_POST["id"];
//$Creadit=$_POST["creadit"];

$sql="update Users set AccBalance ='20' Where ID='2'";
        mysqli_query($con, $sql);