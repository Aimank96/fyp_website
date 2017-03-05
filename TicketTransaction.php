<?php

include 'DBCONFIG.php';

$ID=$_POST["ID"];

$sql="select * from Users where ID ='1'";
        
  $result = mysqli_query($con,$sql);
 
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $balance=$row["AccBalance"];
        
    }
    echo $balance;
  }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

