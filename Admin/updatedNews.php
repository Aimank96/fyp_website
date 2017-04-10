<?php
include '../DBCONFIG.php';
$news=$_POST["UpdateNews"];

$sql="UPDATE  News SET News =  '$news' WHERE Id ='1'";
var_dump($news);
if(mysqli_query($con, $sql)){
header('Location:updateNews.php');
} else {
    echo  mysqli_error($con);    
}
