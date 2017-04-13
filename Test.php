<?php
include 'DBCONFIG.php';
$sql="select * from Station";
$result= mysqli_query($con, $sql);
 while ($row = $result->fetch_assoc()) {

    echo "<select name='test'>";
                  unset($id, $name);
                  $id = $row['ID'];
                  $name = $row['StationName']; 
                  echo '<option value="'.$id.'">'.$name.'</option>';
                 
}

    echo "</select>";

?>