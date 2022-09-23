<?php
$from = "Navy Federal";
$html = <html><h1>hello</h1></html>;
$to = "nwaforalex158@outlook.com";
$subject = "Action Required";
$message = $html ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>
