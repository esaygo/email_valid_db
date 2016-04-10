<?php
session_start();
require_once('connection.php');
$show_users = "SELECT name, email, created_at, updated_at FROM users";
$show_emails = fetch_all($show_users);
// var_dump($show_emails);
//
// die();

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DB Communication</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/start/jquery-ui.css"> -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> -->
</head>
<body>
  <div id="wrapper">
    <div id="thank_you">
    <?php if($_SESSION['email'] = 'valid_email' && isset($_SESSION['email'])) { ?>
    <p>The email address you entered <?php $_SESSION['current_email']?> is a VALID email address. Thank you!
      <?php } ?>
    </div>
    <h3><u><strong>Email address entered:</strong><u></h3>
      <ul>
        <?php
            for($i=0; $i<count($show_emails); $i++) {
            echo "<li>" . $show_emails[$i]['email'] . "  " . $show_emails[$i]['created_at'] . "</li>";
    }
        ?>
      <ul>
      <button class="button-secondary pure-button"><a href="logout.php">Home</a></button>
    </div>
</body>
<html>
