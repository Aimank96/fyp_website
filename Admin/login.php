<link href="view/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="view/assets/css/font-awesome-animation.css" rel="stylesheet" type="text/css"/>
<link href="view/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="view/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="view/assets/css/style.css" rel="stylesheet" type="text/css"/>
<?php

include '../DBCONFIG.php';




echo $userName=$_POST["myusername"];
echo $password= md5($_POST["mypassword"]);



  $sql="SELECT * FROM admin WHERE UserName='$userName' AND Password='$password'";
     $result=mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    //echo "welcome $userName";
ob_start();
include('view/view.php');
$view = ob_get_contents();

}else{
    
}

function writeMsg() {
 
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

