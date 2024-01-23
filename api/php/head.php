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
?>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <title>
        <?php
          echo $title;
        ?>
    </title>

  <link rel="shortcut icon" type="image/x-icon" href="/api/images/favicon.ico" id="favicon"/>
    
  <link rel="stylesheet" type="text/css" href="/api/css/style.php">
</head>
