<?php
include 'DBCONFIG.php';

$UserID=2;
$sql = "INSERT INTO TransectionHistory(Boading_Station,Ending_station,Price,UserID,BoardingTIme,EndingTime) "
        . "VALUES ('tesr','er','18','$UserID',now(),now())";
mysqli_query($con, $sql);

    
$sql="SELECT LAST(id) FROM TransectionHistory where UserID='$UserID'";
$result= mysqli_query($con, $sql);

var_dump($result);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

