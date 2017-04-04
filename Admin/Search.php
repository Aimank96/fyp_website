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
                    <li><a href="logins.php">HOME</a></li>
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
             
                <form action="SearchResult.php" method="post">
	<p align="center">
            User ID: <input class="BlackColour" name="Search" type="text" size="30">
	<input type="submit" name="Submit" value="Search"></p>

  </form>


</div>
            </div>
        </div>
    </div>



</body>
</html>
<?php
}
 else {
    echo 'Please login';
}
