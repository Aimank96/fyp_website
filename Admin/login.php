<script>
function myFunction() {
    alert("I am an alert box!");
}
</script>
<?php

include '../DBCONFIG.php';


session_start();

$userName=$_POST["myusername"];
$password=$_POST["mypassword"];



  $sql="SELECT * FROM Admin WHERE Username='$userName' AND Password='$password'";
     $result=mysqli_query($con, $sql);

     echo "$sql";

if ($result->num_rows > 0) {
    $_SESSION["Username"] = "$userName";


?>
<head>
    <link href="view/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/font-awesome-animation.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
    <link href="view/assets/css/style.css" rel="stylesheet" type="text/css"/>


    <title>Rapid KL </title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<body>
     <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h3>HELLO <?php echo  $_SESSION["Username"] ?></h3>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                           <?php include 'headerss.php'; ?>
                </ul>
            </div>

        </div>
    </div>
     <!--END NAV SECTION -->

    <!--HOME SECTION-->
    <div id="home-sec">


    <div class="container"  >
        <div class="row text-center">
            <div  class="center-block" >
                <h1>E-Rapid KL</h1>
              <blockquote class="w3-panel w3-leftbar w3-light-grey">
  <p class="w3-large">
  <i>"Your Journey Become Easy"</i></p>

</blockquote>


</div>
            </div>
        </div>
    </div>
         </div>


    <section  id="services-sec">
        <div class="container">
            <div class="row ">
                <div class="text-center g-pad-bottom">
                    <div class="col-md-4 col-sm-4 alert-info">








    </div>
    <!-- END FOOTER SECTION -->

    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.min.js"></script>
     <!-- ISOTOPE SCRIPT   -->
    <script src="assets/plugins/jquery.isotope.min.js"></script>
    <!-- PRETTY PHOTO SCRIPT   -->
    <script src="assets/plugins/jquery.prettyPhoto.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
<?php
} else {

echo "<script type=\"text/javascript\">window.alert('Wrong username or password');
window.location.href = 'admin.php';</script>";
  // header('Location:admin.php');
}

?>
