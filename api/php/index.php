<!DOCTYPE html>
<html>
  <?php
    if (strpos($_SERVER['REQUEST_URI'],'about')) {
      $title = 'About';
    }
    else if (strpos($_SERVER['REQUEST_URI'],'resume')) {
      $title = 'Resume';
    }
    else if (strpos($_SERVER['REQUEST_URI'],'work')) {
      $title = 'Work';
    }
    else if (strpos($_SERVER['REQUEST_URI'],'contact')) {
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

