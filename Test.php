<?php
include 'DBCONFIG.php';
$sql="select * from Station";
$result= mysqli_query($con, $sql);
    echo "<select name='test'>";
 while ($row = $result->fetch_assoc()) {


                  unset($id, $name);
                  $id = $row['ID'];
                  $name = $row['StationName']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";

?>