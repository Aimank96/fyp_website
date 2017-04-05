<?php
include '../DBCONFIG.php';
session_start();
if($_SESSION){
    $id=$_GET["ID"];
       $search=$_POST["Search"];
    $sql="Select * from Users where ID ='$id'";
      $result = mysqli_query($con, $sql);
      
    $hasRecord = $result->num_rows > 0;
    $rows = !$hasRecord? [] : mysqli_fetch_all($result,MYSQLI_ASSOC);
    $headers = array_keys($rows[0]);
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
                    <li><a href="Register.php.html">REGISTER NEW</a></li>
                    <li><a href="Search.php">SEARCH</a></li>
                    <li><a href="Logout.php">LOGOUT</a></li>
                </ul>
            </div>
           
        </div>

    
 <div id="home-sec">

   
    <div class="container"  >
        <div class="row text-center">
            <div  class="center-block" >
             
  <form method="post" action="Update.php">
                            <table class="table table-hover TableBackground">
                                <thead>
                                   <tr>
            <?php foreach($headers as $header): 
                
               if($header=="ID"){
            continue;
            } ?>
                
                
            <th><?php echo $header; ?></th>
            <?php endforeach; ?>
        </tr>
                                </thead>
                               <tbody>
        <?php foreach($rows as $row): ?>
        <tr>
            <?php foreach($headers as $header): ?>
            <?php if($header=="ID"){
                $id=$row["ID"];
            continue;
            } ?>
 <td> <input type="text" name="<?php echo $header; ?>"
             value="<?php echo $row[$header]; ?>"></td>
            <?php endforeach; ?>     
        </tr>
        
        <?php endforeach; ?>
       <?php //echo "<h1>$id</h1>"
               ?>
    </tbody>
                            </table>
              
        <input type="hidden" name="ID" value="<?php echo  $id?>"> 
     <td><input type="submit"></td>
    </form>


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