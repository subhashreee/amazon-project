<?php
include 'config/server.php';

if (!isset($_SESSION['reg'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['reg']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>New Announcement</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/elements.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic" rel="stylesheet">
    <script src="js/react.min.js"></script>
    <script src="js/react-dom.min.js"></script>
    <script src="js/browser.min.js"></script>
    <link href="css/header.css" rel="stylesheet">

    <style type="text/css">
    #input100
    {

        border-radius:5px 5px 0px 0px;
        border-width: 0px;
        display: block;
        font-family: Lato;
        font-size: 16px;
        color: #4b2354;
        line-height: 1.2;
        text-align: justify-all;
        padding: 15px;
        resize: none;
        text-decoration: none;
        font-weight: normal;
    }

    footer {
        padding: 10px 0;
        background-color: #101010;
        color:#9d9d9d;
        bottom: 0;
        width: 100%;
        position: absolute;

    }
    .myButton1
    {
        background-color:black;
        border-width: 0px;
        border-radius: 20px;
        padding: 7px 25px ;
        font-size: 16px;
        color: white;
        font-family: Helvetica;

    }
    .myButton1:hover
    {
        background-color: #f99c59;
    }
    </style>
</head>
<body style="background: #2e6da4">

    <!--NAVIGATION BAR-->

    <?php include 'config/header.php';?>
    <div style="margin-top: 10px;margin-left: 380px">
        <form action="config/server.php" method="POST">
            <textarea id="input100" rows="10" cols="82" placeholder="ADD ANNOUNCEMENT"  maxlength="140" name="info"></textarea>
            <br>
            <input type="submit" value="Save" class="myButton1" name="save_info" style="align-text: center;">
        </form>
    </div>

    <?php include 'config/footerp.php';?>
    <script type="text/babel">
    ReactDOM.render(
        document.getElementById('profilepage'),
        document.getElementById('container')
    );
    </script>
</body>
</html>
