<?php
$from = "Navy Federal";
$to = "nwaforalex158@outlook.com";
$subject = "Action Required";
$message = '<html><h1>hello</h1></html>' ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>
