<?php
include 'DBCONFIG.php';

$UserID=2;
$sql = "INSERT INTO TransectionHistory(Boading_Station,Ending_station,Price,UserID,BoardingTIme,EndingTime) "
        . "VALUES ('tesr','er','18','$UserID',now(),now())"."SELECT LAST_INSERT_ID()";
echo $sql;
if(mysqli_query($con, $sql)){
      while($row = $result->fetch_array()) {
        echo  $row[0];
    }
} else {
    echo mysqli_error($con);
}

    




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

