<?php
include 'DBCONFIG.php';

$sql = "select * from carddebit where UserID='1'";//and password=$password";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('ID'=>$row[0],
'CardNumber'=>$row[1],
'Expiry'=>$row[2],
 ));
}
 
echo json_encode(array("result"=>$result));

mysqli_close($con);
           ?>
