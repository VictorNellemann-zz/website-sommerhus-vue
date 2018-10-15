<?php
    session_start();

    require_once './core/functions.php';
    $query = require './core/bootstrap.php';
    $userstr = ' (Guest)';

    if (isset($_SESSION['user']))
    {
        $user = $_SESSION['user'];
        $loggedin = TRUE;
        $userstr = ' ($user)';
    }
    else $loggedin = FALSE;
?>
<!DOCTYPE html>
<html>
<head>
    <title>$appname$userstr</title>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link href='./styling/main.css' type='text/css' rel='stylesheet'>
    <link href='./styling/fonts.css' type='text/css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Mukta:400,700|Noto+Serif:400,700' rel='stylesheet'>
</head>