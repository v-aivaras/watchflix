<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/Entity.php");

if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: register.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Watchflix</title>
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
        <script src="https://kit.fontawesome.com/17b288a8e6.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class='wrapper'>
