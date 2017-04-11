<?php
include 'DBCONFIG.php';

$UserID=2;
$sql = "INSERT INTO TransectionHistory(Boading_Station,Ending_station,Price,UserID,BoardingTIme,EndingTime) 
 VALUES ('tesr','er','18','1',now(),now())";

mysqli_query($con, $sql);

$sql = "Select id from TransectionHistory where UserID=1 ORDER BY id DESC limit 1";

echo mysqli_query($con, $sql)->first();
        

   




/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

