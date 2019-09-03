<?php

 if (isset($POST['submit'])) {
     $name = $_POST['name'];
     $subject = $_POST['subject'];
     $mailfrom = $_POST['mail'];
     $message = $_POST['message'];


     $mailto = 'markprwyatt@gmail.com';

     $headers = "From: ".$mailfrom;
     $txt = "You have received an Email from " . $name . ".\n\n" . $message;

     mail($mailto, $subject, $message);
 }