<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
  <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>
    
  </body>
  
</html>
