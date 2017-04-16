<?php
//var_dump($_POST);
include '../DBCONFIG.php';
session_start();
if($_SESSION){
?>
<html>
<head>
    <link href="view/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/font-awesome-animation.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/style.css" rel="stylesheet" type="text/css"/>
</head>



<body>

     <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">HELLO <?php  $_SESSION["Username"] ?></p>
            </div>
        
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                           <?php include 'headerss.php'; ?>
                </ul>
            </div>
           
        </div>

    
 <div id="home-sec">

   
    <div class="container"  >
        <div class="row text-center">
            <div  class="center-block" >
                <h1> Information Updated ! </h1>
             <?php
 $Username=$_POST["Username"];
 $Password=$_POST["Password"];
 $Email=$_POST["Email"];
 $PhoneNumb=$_POST["PhoneNumber"];
 $AccBalance=$_POST["AccBalance"];
 $ID=$_POST["ID"];

$sql="UPDATE Users SET `Username`='$Username', `Password`='$Password',"
        . " `Email`='$Email', `PhoneNumber`='$PhoneNumb', "
        . "`AccBalance`='$AccBalance' WHERE `ID`='$ID'";
$result= mysqli_query($con, $sql);

if($result){///
?>
                
                
<?php 
}
?>

</div>
            </div>
        </div>
    </div>

</body>
</html>
<?php 

}
else{
    echo 'please login';
}



