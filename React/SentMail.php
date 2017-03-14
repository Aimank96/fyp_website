<?php
$to = "Aiman_k96@yahoo.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: Aiman_k96@yahoo.com";

mail($to,$subject,$txt,$headers);
echo $subject;
?>
