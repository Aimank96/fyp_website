<?php
include '../DBCONFIG.php';
  $Username = $_POST['UserName'];
   $Password = $_POST['Password'];
    $Email = $_POST['Email'];
   $PhoneNumber = $_POST['PhoneNumb'];
    $AccBalance = 0;
    
       if($Username == '' || $Password == '' || $Email == '' || $PhoneNumber == ''){
        echo 'Please fill all values';
    } else {
  
           if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
               
                                 echo'Invalid email format'; 
                              } else {
                              $sql = "SELECT * FROM Users WHERE Username='$Username' OR Email='$email' OR PhoneNumber=$PhoneNumber";                                    
		              $check = mysqli_fetch_array(mysqli_query($con,$sql));
                              if(isset($check)){
				echo 'username or email or phone Number already Register';
			         }else{				      
                                 $sql="insert into Users(Username,Password,Email,PhoneNumber,AccBalance)"
                                         . " Values('$Username','$Password','$Email','$PhoneNumber','$AccBalance') ";
                                     if(mysqli_query($con,$sql)){
					echo 'successfully registered';
				}else{
                                  
					echo mysqli_error($con);
				}
                                 }
    }
    
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

