<?php
include '../DBCONFIG.php';
session_start();
if($_SESSION){
     $sql="Select * from Station";
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
                           <?php include 'headerss.php'; ?>
                </ul>
            </div>
           
        </div>

    
 <div id="home-sec">

   
    <div class="container"  >
        <div class="row text-center">
            <div  class="center-block" >
                 <table class="table table-hover TableBackground">
                                <thead>
                                    <tr>
            <?php foreach($headers as $header): ?>
            <th><?php echo $header; ?></th>
            <?php endforeach; ?>
        </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                       
                                        <?php foreach($rows as $row): ?>
                                 
        <tr>
            <?php foreach($headers as $header): ?>
            <td><?php echo $row[$header]; ?></td>
              <?php $primaryKey= $row["ID"] ?>
            <?php endforeach; ?>
            <td><a href="UpdateUser.php?ID=<?php echo $primaryKey ?>">Edit</a></td>
        </tr>
        <?php endforeach; ?>
                                    </tr>
                                    
                                  
                                </tbody>
                            </table>
 <a class="btn btn-primary" href="addStation.php">Add Station</a>


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