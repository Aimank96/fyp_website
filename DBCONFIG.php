<?php



$dbhost = getenv("OPENSHIFT_MYSQL_DB_HOST");
$dbport = getenv("OPENSHIFT_MYSQL_DB_PORT");
$dbuser = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$dbpwd = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");

if($con = mysqli_connect($dbhost,$dbuser,$dbpwd,"ameerulariff",$dbport)){
    //  echo 'openshift berjaya';
} else{
    $dbhost ='localhost';
$dbuser ='root';
$dbpwd = 'root';
if($con = mysqli_connect($dbhost,$dbuser,$dbpwd,"ameerulariff",$dbport)){
    echo 'berjaya';
}
 else {
    die("database gagal");    
}
}