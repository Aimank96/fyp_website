<?php
include 'DBCONFIG.php';

$UserID=2;
$sql = "INSERT INTO TransectionHistory(Boading_Station,Ending_station,Price,UserID,BoardingTIme,EndingTime) 
 VALUES ('tesr','er','18','1',now(),now())";

mysqli_query($con, $sql);

$sql = "Select id from TransectionHistory where UserID=1 ORDER BY id DESC limit 1";
    

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
    }
} else {
    echo "0 results";
}





