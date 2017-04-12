<?php

$sql = "Select id from TransectionHistory where UserID= 1 ORDER BY id DESC limit 1";
    

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
    }
}