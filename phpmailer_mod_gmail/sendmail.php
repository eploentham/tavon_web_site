<?php

### INCLUDE PHPMAILER ����� ###
include ("class.phpmailer.php");

### FUNCTION SEND MAIL ####

function scriptdd_sendmail($to_name,$to_email,$from_name,$email_user_send,$email_pass_send,$subject,$body_html,$body_text) {

$mail = new PHPMailer();
$mail -> From     = $email_user_send;
$mail -> FromName = $from_name;

$mail -> AddAddress($to_email,$to_name);
$mail -> Subject	= $subject;
$mail -> Body		= $body_html;
$mail -> AltBody	= $body_text;
$mail -> IsHTML (true);

$mail->IsSMTP();
$mail->Host = 'ssl://smtp.gmail.com';
$mail->Port = 465;
$mail->SMTPAuth		= true;
//$mail->SMTPDebug	= true;
$mail->Username = $email_user_send;
$mail->Password = $email_pass_send;

//$mail->Send();
//$mail->ClearAddresses();
if (!$mail->send()) {
    echo "Password " .$mail->Password;
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
$mail->ClearAddresses();
}
### FUNCTION SEND MAIL ####











#### �������¡�����¡�� Function Ẻ��� #####
$to_name			="Ekapop Ploentham";
$to_email			="ekapop@nakoyagarden.com";
$from_name			="eploentham";
$email_user_send	="eploentham@gmail.com";
$email_pass_send	="Gsdscitsigol";
$subject			="Test Gmail";
$body_html			="Hello HTML";
$body_text			="555555555555555555555555";

scriptdd_sendmail($to_name,$to_email,$from_name,$email_user_send,$email_pass_send,$subject,$body_html,$body_text);

//echo "Send success";

?>