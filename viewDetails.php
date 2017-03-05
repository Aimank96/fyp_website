<?php

include 'DBCONFIG.php';

$ID=$_POST["ID"];

$sql="select * from Users where ID ='1' ";//'$ID'";
        
  $result = mysqli_query($con,$sql);
 
  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row[0]. " - Name: " . $row[1]. " " . $row[2]. "<br>";
    }
  }

 /**
while($row = mysqli_fetch_array($res)){
array_push($result,
array('ID'=>$row[0],
'Username'=>$row[1],
'AccBalance'=>$row[5],
 ));
}
 
echo json_encode(array("result"=>$result));

mysqli_close($con);
  **/
  
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

