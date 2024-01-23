<!DOCTYPE html>
<html>
  <?php
    if (strpos($_SERVER,'')) {
      $title = 'About';
    }
    else if (strpos($_SERVER,'')) {
      $title = 'Resume';
    }
    else if (strpos($_SERVER,'')) {
      $title = 'Work';
    }
    else if (strpos($_SERVER,'')) {
      $title = 'Contact';
    }
    else {
      $title = 'Home';
    }

    include 'head.php';
  ?>
  <body>
    <?php
      include 'nav.php';
    ?>
  </body>
</html>

