<?php



$dbhost = "u28rhuskh0x5paau.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$dbport = "3306"
$dbuser = "d1kpjgk48gghlzyb";
$dbpwd = "jle3dfmdzorbdmhm";

if($con = mysqli_connect($dbhost,$dbuser,$dbpwd,"nr138bteroktz8cg",$dbport)){
     echo 'openshift berjaya';
} else{
    $dbhost ='localhost';
$dbuser ='root';
$dbpwd = 'root';
if($con = mysqli_connect($dbhost,$dbuser,$dbpwd,"ameerulariff",$dbport)){
    echo 'berjaya';
}
 else {
   echo 'gagal';
}
}
