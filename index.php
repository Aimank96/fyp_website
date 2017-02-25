<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Welcome to OpenShift</title>


</head>
<body>
<?php 

include ("DBCONFIG.php");


$sql = "INSERT INTO `ameerulariff`.`Test` (`id`, `remark`) VALUES ('3','aiman');";

mysqli_query($con, $sql)

?>
    <h1>Hello Arif</h1>
</body>
</html>
