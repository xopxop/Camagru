<?php
  // Send mail
  function sendMail($data) {
    $subject = "[Camagru]Confirm E-mail Address";
    $message = "Welcome " . $data['name'] . "!\nThanks for signing up with Camagru!";

    mail($data['email'], $subject, $message);
  }
