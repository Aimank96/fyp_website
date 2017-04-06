<?php
include 'DBCONFIG.php';


 $sql="SELECT * FROM News Where Id = 1" ;
 $result=mysqli_query($con, $sql);
    
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["News"];
      }
} else {
   echo "No updated news";
}