<?php
$to_email_address = "chandlerault@gmail.com";
$subject = "test";
$message = 'hello world';

mail($to_email_address,$subject,$message,[$headers],[$parameters]);
?>