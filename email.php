<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "ekapop@nakoyagarden.com";
$mail->Password = "eploentham";
$mail->SetFrom("ekapop@nakoyagarden.com","Ekapop Ploentham");
$mail->Subject = "Test";
$mail->Body = "hello";
$mail->AddAddress("eploentham@gmail.com","Nakoya");




////convert HTML into a basic plain-text alternative body
////$mail->msgHTML(file_get_contents('content.html'), dirname(__FILE__));
//$mail->msgHTML("Test email by itoffside.com");



 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }