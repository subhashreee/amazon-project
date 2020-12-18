<?php
session_start();

$name           = "";
$email          = "";
$reg            = "";
$year           = "";
$dept           = "";
$password_1     = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'amazon-project');
?>
