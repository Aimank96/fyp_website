<?php
include 'DBCONFIG.php';

$Identity=$_POST["id"];
$Credit=$_POST["credit"];
$CardNumber=$_POST["CardNumber"];

$CreditInit="Unassigned";
$CreditTotal;

if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
} 

$sql="Select * from Users where ID='$Identity'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         $CreditInit= $row["AccBalance"];
     }
} else {
     echo "0 results";
     
}
if($CreditInit!="Unassigned"){
    $CreditTotal=$Credit+$CreditInit;
   
}
else{
        echo "error";
}
echo $CardNumber;    
    
$sql="update Users set AccBalance ='$CreditTotal' Where ID='$Identity'";
       if(mysqli_query($con, $sql)){
         //  echo "Your new balance is $CreditTotal";
       } else {
           echo mysqli_error($con);   
        }
  
 