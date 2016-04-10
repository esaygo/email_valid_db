<?php

session_start();

require_once('connection.php');

if(isset($_POST['email'])) {
  $_SESSION['current_email'] = $_POST['email'];

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email'] = 'valid_email';
        $query = "INSERT INTO users(name,email,created_at,updated_at) VALUES ('".$_POST['name']."','".$_POST['email']."',NOW(),NOW())";
        if(run_mysql_query($query))
        {
            $_SESSION['message'] = "New user has been added correctly!";
        }
        else
        {
            $_SESSION['message'] = "Failed to add new user";
        }
    }
    else {
        $_SESSION['email'] = 'invalid_email';
    }
}

header('Location:new_user.php');

 ?>
