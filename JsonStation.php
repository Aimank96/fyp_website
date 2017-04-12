<?php

include 'DBCONFIG.php';

$sql = "select * from Station";// where username='$username'";//and password=$password";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('ID'=>$row[0],
'StationName'=>$row[1],
 ));
}
 
echo json_encode(array("result"=>$result));

mysqli_close($con);