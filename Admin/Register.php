<?php
    session_start();
    if($_SESSION["Username"]){
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
             
<form method="post" action="SuccessRegister.php">

<div class="w3-display-container">
<h3 align="center">Registration Form</h3><br>

<table align="center" border="5" height="200" >

	
<tr>
    <th class="WhiteColour" width="150"><h4>UserName</h4></td>
	<td width="350"><input type="text" name="UserName" size="50"></td>
</tr>
<tr>
	<th class="WhiteColour" width="150"><h4>Password</h4></td>
	<td width="350"><input type="Password" name="Password" size="50"></td>
</tr>
<tr>
    <th class="WhiteColour" width="150"><h4>Email</h4></td>
	<td width="350"><input type="text" name="Email" size="50"></td>
</tr>
<tr>
    <th class="WhiteColour" width="150"><h4>Phone Number</h4></td>
	<td width="350"><input type="text" name="PhoneNumb" size="50"></td>
</tr>


</div>


<tr>
	<td width="104">&nbsp;</td>
	<td width="350">
		<input type="submit" name="submitBtn" value="Submit">
		<input type="reset" name="resetBtn" value="Clear"></td>
</tr>

</table>
</form>

</body>
</html>
</form>

</div>
            </div>
        </div>
    </div>

		</div>
	</div>
</div>
</body>
</html>
<?php

            }
 else {
                echo 'gagal';
 }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

