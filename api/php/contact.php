<!DOCTYPE html>
<html>
  <?php
    include 'head.php';
  ?>
  <body>
    <?php
      include 'nav.php';
    ?>

    <h1>Contact Me</h1>
    <?php
      include 'contactinfo.php';
    ?>
    <p>Get in touch! Send an email using the form below, and I will get back to you as soon as I am available.</p>
    <form method="post" action="sendmessage.php">
      <label for="fname">First Name</label>
      <input type="text" name="fname">
      </br>
      <label for="lname">Last Name</label>
      <input type="text" name="lname">
      </br>
      <label for="email">Email</label>
      <input type="email" name="email">
      </br>
      <label for="subject">Subject Line</label>
      <input type="text" name="subject">
      </br>
      <label for="message">Message</label>
      <input type="text" name="message">
      </br>
      <input type="submit" name="submit" value="Submit">
    </form>    
  </body>
</html>
