<?php
    echo 'Mail Test successful';
    if(count(array_filter($_POST)) != count($_POST)){
        echo 'Please fill out all fields in the form!';
    }
    else {
      $message = wordwrap($_POST['message'], 70);
      $subject = $_POST['subject'];
      $address = $_POST['email'];
        echo $subject;
        echo $message;
        echo $address;
      mail('powheart26@proton.me', $subject, $message, 'From: ' . $address);
      echo 'Your message has been sent. Please wait 2-3 business days for a reply.'; 
    }
?>
