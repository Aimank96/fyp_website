<?php

include '../DBCONFIG.php';

 echo $id=$_GET["ID"];
 
 $sql="DELETE FROM Users WHERE `ID`='$id'";
 mysqli_query($con, $sql);