<html>
<head>
<title>Book Lover</title>
<style>
header
{
    background-color:black;
    color:white;
    text-align:center;
    padding:5px;	 
}
</style>
</head>

<body>

<header>
<h1><img src="images.jpg" alt="GFG" style="width:600px;height:300px;"></h1>
</header>

  <br><form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	<p align="center">
	Book BarCode: <input name="customer_bar_code" type="text" size="30">
	<input type="submit" name="Submit" value="Search"></p>

  </form>

  <form action="UpdateProductRecord.php" method="post">
  
  <?php

  if (!isset($_POST['Submit']))
  {
     //form not submitted


  }

  else
  {

     $customer_bar_code=(trim($_POST['customer_bar_code'])=='')? die ('<font color=red>ERROR : Enter Book BarCode.') :mysql_escape_string($_POST['customer_bar_code']);

     //open connection to MySQL server

     $connection= mysql_connect('localhost','root','') or die ('Unable to connect');
 
     //select database for use. booklover database will be selected
     mysql_select_db('booklover') or die('Unable to select database!');
  
     //create and execute query
     $sql="SELECT * FROM adminlib WHERE bookBar='$customer_bar_code'" ;
     $result=mysql_query($sql) or die ('Error in query: $sql.'.mysql_error());
 
     //check if records were returned
     if (mysql_num_rows($result)>0)
     {
        //print table to display the record
        echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
        echo '<tr><td align="center"><b>Name</b></td>
                  <td align="center"><b>Contact</b></td>
                  <td align="center"><b>Email</b></td>
                  <td align="center"><b>Book Title</b></td>
                  <td align="center"><b>Book BarCode</b></td>
                  <td align="center"><b>Date Loan</b></td>
				  <td align="center"><b>Loan Expired Date</b></td>
                  <td align="center">&nbsp&nbsp</td>
              </tr>';
  
       //iterate over record set
       //print each field
  
       while ($row=mysql_fetch_row($result))
       {
          echo '<tr>';
		  echo '<td align="center">'.$row[0].'</td>';
          echo '<td align="center">'.$row[1].'</td>';
          echo '<td align="center">'.$row[2].'</td>';
          echo '<td align="center">'.$row[3].'</td>';
          echo '<td align="center">'.$row[4].'</td>';
          echo '<td align="center">'.$row[5].'</td>';
          echo '<td align="center">'.$row[6].'</td>';
          
		 
         
          
       }
       echo '</table>';
     }

     else
     {
       echo '<font color=red>No record found';
     }
  
     //one processing is complete
     //free result set
     mysql_free_result($result);
     //close connection to MySQL Server
     mysql_close($connection);
     }
  ?>
  
  <p align="center">
  <input type=button onClick="parent.location='admin.html'" value='Back to Main Page'></p>

</body>
</html>
