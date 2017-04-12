<?php
include 'DBCONFIG.php';

$sql = "Select id from TransectionHistory where UserID= 1 ORDER BY id DESC limit 1";
    
$id=null;
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo  $id=$row["id"];
    }
}
 
 $EndingStation=$_POST["EndingStation"];
 $Price=$_POST["Price"];



$sql="UPDATE Users SET `EndingStation`='$EndingStation', `Price`='$Price','EndingTime'='now()'";

       
$result= mysqli_query($con, $sql);

if($result){///
                
    echo 'sucess';         
}