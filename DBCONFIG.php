<?php

// echo 'selamat datang';

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');
// echo "Connection was successfully established!";

// echo "$hostname \n $userName \n $password \n $database ";


$con = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// $dbparts = parse_url($url);
//
// // $hostname = $dbparts['host'];
// // $username = $dbparts['user'];
// // $password = $dbparts['pass'];
// $database = ltrim($dbparts['path'],'/');
//
// $dbhost = $dbparts['host'];
// $dbport = "3306"
// $dbuser = $dbparts['user'];
// $dbpwd = $dbparts['pass'];
//
// if($con = mysqli_connect($dbhost,$dbuser,$dbpwd,$database,$dbport)){
//      echo 'openshift berjaya';
// }

?>
