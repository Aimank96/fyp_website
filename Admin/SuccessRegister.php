<?php
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
                <p class="navbar-brand">HELLO <?php echo $_SESSION["Username"] ?></p>
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
                <?php
          $Username = $_POST['UserName'];
   $Password = $_POST['Password'];
    $Email = $_POST['Email'];
   $PhoneNumber = $_POST['PhoneNumb'];
    $AccBalance = 0;
    
       if($Username == '' || $Password == '' || $Email == '' || $PhoneNumber == ''){
        echo '<h1>  Please fill all values </h1>';
    } else {
  
           if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
               
                                 echo'<h1> Invalid email format</h1'; 
                              } else {
                              $sql = "SELECT * FROM Users WHERE Username='$Username' OR Email='$email' OR PhoneNumber=$PhoneNumber";                                    
		              $check = mysqli_fetch_array(mysqli_query($con,$sql));
                              if(isset($check)){
				echo 'username or email or phone Number already Register';
			         }else{				      
                                 $sql="insert into Users(Username,Password,Email,PhoneNumber,AccBalance)"
                                         . " Values('$Username','$Password','$Email','$PhoneNumber','$AccBalance') ";
                                     if(mysqli_query($con,$sql)){
					echo '<h1>successfully registered</h1>';
				}else{
                                  
					echo mysqli_error($con);
				}
                                 }
    }
    
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



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

