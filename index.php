<?php
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 $to = "hlalelamasuluke@gmail.com";
 $subject = "Mail From Contact Form";
 
 $headers = "From: ".$name. "\r\n" .
 "CC: hlalelamasuluke@icloud.com";
 
 $txt = "You have recieved an e-mail from ".$name . "\r\nEmail: ".$email . "\r\n Message: ". $message;
 
 if($email !=   NULL)
 {
     mail($to, $subject, $txt, $headers);
 }
 
 header('Location:thankyou.html');
 ?>
