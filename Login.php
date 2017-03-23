<?php

include 'DBCONFIG.php';


    $Username=$_POST["username"];
    $Password=$_POST["password"];

      $sql="SELECT * FROM Users WHERE Username='$Username' AND Password='$Password'";
      
      $result=mysqli_query($con, $sql);
    
     if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["ID"];
      }
} else {
   echo "login error";
}
    
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

