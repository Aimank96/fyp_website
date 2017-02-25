<?php
include 'DBCONFIG.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumb'];
    $AccBalance = 0;

    if($Username == '' || $Password == '' || $Email == '' || $PhoneNumber == ''){
        echo 'Please fill all values';
    } else {
  
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                 echo'Invalid email format'; 
                              } else {
                                     $sql="insert into Users(Username,Password,Email,PhoneNumber,AccBalance) Values('$Username','$Password','$Email','$PhoneNumber','$AccBalance') ";
                                    echo 'Succesfully Register';
                              }
    }
    
    
    

mysqli_query($con,$sql);

}
?>