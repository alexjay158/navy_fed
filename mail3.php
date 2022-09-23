<?php
$from = "Navy Federal";
$from_address = "no-reply@navyfederal.com"
$to = "nwaforalex158@outlook.com";
$subject = "Action Required";
$message = "Hello" ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>
