<?php

echo 'selamat datang';
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

// $hostname = $dbparts['host'];
// $username = $dbparts['user'];
// $password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

$dbhost = $dbparts['host'];
$dbport = "3306"
$dbuser = $dbparts['user'];
$dbpwd = $dbparts['pass'];

if($con = mysqli_connect($dbhost,$dbuser,$dbpwd,$database,$dbport)){
     echo 'openshift berjaya';
}
//  else{
//     $dbhost ='localhost';
// $dbuser ='root';
// $dbpwd = 'root';
// if($con = mysqli_connect($dbhost,$dbuser,$dbpwd,"ameerulariff",$dbport)){
//     echo 'berjaya';
// }
//  else {
//    echo 'gagal';
// }
// }
?>
