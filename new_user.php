<?php
if(!isset($_SESSION))
    {
        session_start();
    }
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
    <?php
    if($_SESSION['email'] == 'invalid_email' && isset($_SESSION['current_email'])){
      echo '<div id="success">' . $_SESSION['current_email'] .' is not a valid email </div>';
    } else if($_SESSION['email'] == 'valid_email' && isset($_SESSION['current_email'])) {
      header('Location: success.php');
    }
    ?>
  <form class="pure-form pure-form-aligned" action="process.php" method="post">
    <fieldset>
        <div class="pure-control-group">
            <label for="color">Name</label>
            <input id="name" type="text" name="name" placeholder="name">
        </div>

        <div class="pure-control-group">
            <label for="email">Email</label>
            <input id="email" type="text" name="email" placeholder="email">
        </div>

        <!-- <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" name="email" placeholder="Email Address">
        </div>

        <div class="pure-control-group">
            <label for="foo">Supercalifragilistic Label</label>
            <input id="foo" type="text" name"" placeholder="Enter something here...">
        </div> -->

        <div class="pure-controls">
            <!-- <label for="cb" class="pure-checkbox">
                <input id="cb" type="checkbox"> I've read the terms and conditions
            </label> -->
            <button id="add_user" type="submit" class="pure-button pure-button-primary">Submit</button>
        </div>
          <!-- <button class="button-success pure-button"><a href="success.php">Show Users</a></button> -->
        <button class="button-error pure-button"><a href="logout.php">Destroy session</a></button>
    </fieldset>
</form>
</body>
</html>
