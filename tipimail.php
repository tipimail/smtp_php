<?php

  //install swiftmailer before
  //$ php composer.phar require swiftmailer/swiftmailer @stable
  
  require_once 'vendor/autoload.php';
  $subject = 'your subject';
  $from = array('from@tipimail.com' =>'From Name');
  $to = array('recipient@tipimail.com' => 'recipient');
  
  $html = "version html";
  
  $transport = Swift_SmtpTransport::newInstance('smtp.tipimail.com', 587);
  $transport->setUsername('your Tipimail username');
  $transport->setPassword('one of your Api keys');
  $swift = Swift_Mailer::newInstance($transport);
  
  $message = new Swift_Message($subject);
  $message->setFrom($from)->setTo($to);
  $message->setBody($html, 'text/html');
  
  $result = $swift->send($message, $error);

?>
