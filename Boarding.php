<?php
include 'DBCONFIG.php';

$BoardingStation=$_POST["Boarding_Station"];
$UserID=$_POST["User_id"];


$sql = "INSERT INTO TransectionHistory(Boading_Station,UserID,BoardingTIme) 
 VALUES ('$BoardingStation','$UserID',now())";

mysqli_query($con, $sql);

$sql="Select * from Users where ID='$UserID'";
$result= mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $AccBalance=$row["AccBalance"];

    }
}


/*
$sql = "Select id from TransectionHistory where UserID= 1 ORDER BY id DESC limit 1";
    

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
    }
}

*/



