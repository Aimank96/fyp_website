
<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("Aiman_k96@gmail.com.com","My subject",$msg);
echo $msg;
?>
