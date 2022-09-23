<?php
$from = "Navy Federal";
$to = "nwaforalex158@outlook.com","alexjay158@gmail.com";
$subject = "Action Required";
$message = 'hi' ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>
