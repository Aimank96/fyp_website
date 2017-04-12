<?php
include '../DBCONFIG.php';
$stationName=$_POST["StationName"];
$sql="insert into Station(StationName) values('$stationName')";
mysqli_query($con, $sql);
header('Location:Station.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

