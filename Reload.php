<?php
include 'DBCONFIG.php';

$Identity=$_POST["id"];
$Credit=$_POST["credit"];



if ($con->connect_error) {
     die("Connection failed: " . $con->connect_error);
} 

$sql="Select * from Users where id = '1'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo $row["AccBalance"];
     }
} else {
     echo "0 results";
}


/**
$sql="update Users set AccBalance ='$Credit' Where ID='$Identity'";
       if(mysqli_query($con, $sql)){
           echo 'Reload Succes';
       } else {
           echo mysqli_error($con);   
        }
 * 
 * */