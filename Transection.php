<?php
include 'DBCONFIG.php';

$sql = "INSERT INTO TransectionHistory(Boading_Station,Ending_station,Price,UserID,BoardingTIme,EndingTime) VALUES ('tesr','er','18','2',now(),now())";
if(mysqli_query($con, $sql)){
    echo 'lalalala';
    
} else {
    echo  mysqli_error($con);    
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

