<?php
// the message
$msg = "MyFirstDockerFile";
$msg = wordwrap($msg);
// send email
mail("someone@example.com","My subject",$msg);
?>
