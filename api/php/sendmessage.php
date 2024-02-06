<?php
    echo 'Mail Test successful';
    if(count(array_filter($_POST)) != count($_POST)){
        echo 'Please fill out all fields in the form!';
    }
    else {
      $message = wordwrap($_POST['message'], 70, '\r\n');
      $subject = $_POST['subject'];
      $address = $_POST['email'];
      $headers = [
        'From' => $address,
        'Reply-To' => $address,
        'X-Mailer' => 'PHP/' . phpversion()
      ];
        echo $subject;
        echo $message;
        echo $address;
      
      $mailWorked = mail('powheart26@proton.me', $subject, $message, $headers);

      if ($mailWorked == true){
        echo 'Your message has been sent. Please wait 2-3 business days for a reply.'; 
      }
      else {
        echo 'Error! Message send failure. Please try again.';
      }
    }
?>
