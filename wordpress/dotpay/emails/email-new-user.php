<?php
require_once (__DIR__.'/../../wp-load.php');
require_once(__DIR__ ."/get-new-user-message.php");

function email_new_user($email, $password) {

  $message = get_new_user_message ($email, $password);
  $to = $email;
  $subject = "Utworzyliśmy Twoje konto użytkownika";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: Pojade.com.pl <noreplay@pojade.com.pl>' . "\r\n";
  $headers .= 'Bcc: <redakcja@pojade.com.pl>' . "\r\n";

  wp_mail($to,$subject,$message,$headers);

}

 



?>