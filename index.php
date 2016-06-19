<?php

$title = "Home page | Proniel";
include("header.php");
$_SESSION['user'] = "user";
session_destroy();
?>

<?php 
include ("navbar.php");
include ("slide.php");
?>

<?php
include("footer.php");
?>