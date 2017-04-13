<?php
include 'DBCONFIG.php';
$sql="select * from Station";?>
    <select name="station">
    <?php
$result= mysqli_query($con, $sql);
while($row=mysql_fetch_array($result)){
?>  
        <option value=<?php echo $row['ID']; ?>><?php echo $row['StationName']; ?></option>
<?php
  }
?>
    </select>