<?php
include 'DBCONFIG.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumb'];
    $AccBalance = 0;

        //   $sql="insert into Users(Username,Password,Email,PhoneNumber,AccBalance) Values('$Username','$Password','$Email','$PhoneNumber','$AccBalance') ";
                                  //  echo 'Succesfully Register';
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
                                 $sql="insert into Users(Username,Password,Email,PhoneNumber,AccBalance) Values('$Username','$Password','$Email','$PhoneNumber','$AccBalance') ";
                                     if(mysqli_query($con,$sql)){
					echo 'successfully registered';
				}else{
                                  
					echo 'oops! Please try again!';
				}
                                 }
    }
    
    }
}
?>