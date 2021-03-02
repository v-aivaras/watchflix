<?php
require_once("includes/config.php");
require_once("includes/classes/PreviewProvider.php");
require_once("includes/classes/CategoryContainers.php");
require_once("includes/classes/Entity.php");
require_once("includes/classes/EntityProvider.php");
require_once("includes/classes/ErrorMessage.php");
require_once("includes/classes/SeasonProvider.php");
require_once("includes/classes/Season.php");
require_once("includes/classes/Video.php");
require_once("includes/classes/VideoProvider.php");

if(!isset($_SESSION["userLoggedIn"])) {
    header("Location: login.php");
}

$userLoggedIn = $_SESSION["userLoggedIn"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Watchflix</title>
        <link rel="icon" href="assets/images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/17b288a8e6.js" crossorigin="anonymous"></script>
        <script src="assets/js/script.js"ead></script>
        
    </head>
    <body>
        <div class='wrapper'>

        <div class="topBar">
            <div class="logoContainer">
                <a href="index.php">
                    <img src="assets/images/logo.png" alt="Logo">
                </a>
            </div>

            <ul class="navLinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="shows.php">TV Shows</a></li>
                <li><a href="movies.php">Movies</a></li>
            </ul>

            <div class="rightItems">
                <a href="search.php">
                    <i class="fas fa-search"></i>
                </a>
                    <i class="fas fa-user"></i>
                <a href="profile.php">
                    
                </a>
            </div>
        </div>
