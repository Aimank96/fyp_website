<?php

$dbhost = getenv("OPENSHIFT_MYSQL_DB_HOST");
$dbport = getenv("OPENSHIFT_MYSQL_DB_PORT");
$dbuser = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
$dbpwd = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
$con = mysqli_connect($dbhost,$dbuser,$dbpwd,"ameerulariff",$dbport) or die("fail to connect");