<?php
include 'DBCONFIG.php';
?>
<form method="post" action="testPost.php"> 
    <?php
$sql="select * from Station";
$result= mysqli_query($con, $sql);

    echo "<select name='boarding'>";
 while ($row = $result->fetch_assoc()) {


                  
                  $id = $row['ID'];
                  $name = $row['StationName']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";
    
     echo "<select name='Ending'>";
 while ($row = $result->fetch_assoc()) {


               
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";

?>
    <input type="submit">
</form>