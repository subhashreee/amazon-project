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
<html>
<head>
    <title>Upload Note</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/elements.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
    <script src="js/react.min.js"></script>
    <script src="js/react-dom.min.js"></script>
    <script src="js/browser.min.js"></script>
    <link href="css/header.css" rel="stylesheet">

    <style>
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
<body style="background-color: #2e6da4">
    <?php include 'config/header.php'; ?>

    <div style="margin-left: 450px;margin-top: 70px;" class="col-md-5 col-md-offset-1">
        <form action='config/server.php' method='POST' enctype="multipart/form-data">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><b>Upload Note</b></h4>
                </div>
                <div class="panel-body">
                    <?php include('config/errors.php'); ?>
                    <br>
                    <div class="form-group">
                        <input type="file" class="form-control"  placeholder="Choose file" name="file_name" id="file_name" required = "true">
                    </div>
                    <br>
                </div>
            </div>
            <div>
                <input type="submit" name="upload_note" class="myButton1" value="Upload">
            </div>
        </form>
    </div>

    <?php include 'config/footerp.php'; ?>


</body>
</html>
