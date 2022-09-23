<?php
$from = "Navy Federal";
$to = "nwaforalex158@outlook.com";
$subject = "Action Required";
$message = 'hello' ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>
