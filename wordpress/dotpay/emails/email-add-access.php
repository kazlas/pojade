<?php
require_once (__DIR__.'/../../wp-load.php');
require_once(__DIR__ ."/get-add-access-message.php");

function email_add_access ($email, $addedAccess) {

  $message = get_add_access_message ($addedAccess);
  $to = $email;
  $subject = "Udostępniliśmy opowiadanie ".$addedAccess." na pojade.com.pl";

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: Pojade.com.pl <noreply@pojade.com.pl>' . "\r\n";
  $headers .= 'Bcc: <redakcja@pojade.com.pl>' . "\r\n";

  wp_mail($to,$subject,$message,$headers);

}

?>