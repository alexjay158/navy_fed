<?php
$from = "Navy Federal";
$from_address = "no-reply@navyfederal.com"
$to = "nwaforalex158@outlook.com","alexjay158@gmail.com";
$subject = "Action Required";
$message = "Hello" ;
$headers = "From:" . $from_address;
mail($to,$subject,$message, $headers) 
?>
