<?php

   $to = "udhayamkumar1234@gmail.com";
   $subject = "New Customer Submission Form";
   $message = "A new Quotes form has been received.\n\n";
   $message .= "Name: " . $_POST["name"] . "\n";
   $message .= "Email: " . $_POST["email"] . "\n";
   $message .= "Phone: " . $_POST["phone"] . "\n";
   $message .= "Message: " . $_POST["msg"] . "\n";
   $message .= "Button: " . $_POST["send"];
   $headers = "From: no-reply@example.com";
   mail($to, $subject, $message, $headers);
   header("Location: index.html");

?>