<?php
include 'DBCONFIG.php';
$UserID=$_POST["User_id"];
 $EndingStation=$_POST["EndingStation"];
 $Price=$_POST["Price"];
 $BoardingStation;
$sql = "Select id,Boading_Station from TransectionHistory where UserID= '$UserID' ORDER BY id DESC limit 1";
    
$id=null;
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         $id=$row["id"];
        echo   $BoardingStation=$row["Boading_Station"];
    }
}
 

//$EndingStation="kambing";
//$Price="3";

$sql="UPDATE TransectionHistory SET `Ending_station`='$EndingStation', `Price`='$Price',`EndingTime`=now()"
        . "Where id=$id";

       
$result= mysqli_query($con, $sql);

if($result){///
                
    echo 'sucess';         
} else {
    echo mysqli_error($con);    
}