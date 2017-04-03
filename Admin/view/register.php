			
<html>
<head>
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/font-awesome-animation.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
</head>


<body>

     <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">HELLO <?php echo $userName ?></p>
            </div>
        
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="?ll=2">HOME</a></li>
                    <li><a href="Package.html">REGISTER NEW</a></li>
                     <li><a href="Gallery.html">SEARCH</a></li>
                    <li><a href="Contact.html">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>

    
 <div id="home-sec">

   
    <div class="container"  >
        <div class="row text-center">
            <div  class="center-block" >
             
<form method="post" action="Result.php" name="registerForm">

<div class="w3-display-container">
<h3 align="center">Loan Registration Form</h3><br>

<table align="center" border="1">
<tr>
	<th colspan= "2">Loan Book Registeration</th>
</tr>

<tr>
	<th class="w3-blue" style="text-shadow:1px 1px 0 #444" width="104">Name</td>
	<td width="350"><input type="text" name="customer_name" size="30"></td>
</tr>
<tr>
	<th width="104">Contact</td>
	<td width="350"><input type="text" name="customer_contact" size="30">(e.g.0123456789)</td>
</tr>
<tr>
	<th width="104">Email</td>
	<td width="350"><input type="text" name="customer_email" size="30"></td>
</tr>
<tr>
	<th width="104">Book Title:</td>
	<td width="350"><input type="text" name="customer_book_title" size="30"></td>
</tr>
<tr>
	<th width="104">Book BarCode:</td>
	<td width="350"><input type="text" name="customer_bar_code" size="30"></td>
</tr>
<tr>
	<th width="104">Date Loan:</td>
	<td width="350"><input type="text" size="20" name="customer_book_loan"></td>
</tr>
<tr>
	<th width="104">Loan Expired:</td>
	<td width="350"><input type="text" size="20" name="customer_loan_expired"></td>
</tr>

</div>
<tr>
<td>&nbsp</td>
<td>&nbsp</td>
</tr>

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
