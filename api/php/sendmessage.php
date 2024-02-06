<?php
    if(count(array_filter($_POST)) != count($_POST)){
        echo 'Please fill out all fields in the form!';
    }
    else {
      $message = wordwrap($_POST['message'], 70, '\r\n');
      $subject = $_POST['subject'];
      $address = $_POST['email'];
      $headers = array(
        'From' => $address,
        'Reply-To' => $address,
        'X-Mailer' => 'PHP/' . phpversion()
      );
      
      if (mail('powheart26@proton.me', $subject, $message, $headers)){
        echo 'Your message has been sent. Please wait 2-3 business days for a reply.'; 
      }
      else {
        echo 'Error! Message send failure. Please try again.';
      }
    }
?>
