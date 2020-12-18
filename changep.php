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
    <title>Reset Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/elements.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
    <script src="js/react.min.js"></script>
    <script src="js/react-dom.min.js"></script>
    <script src="js/browser.min.js"></script>

</head>
<body style="background-color: #2e6da4">
    <?php include 'config/header.php'; ?>

    <div style="margin-left: 450px;margin-top: 70px;" class="col-md-5 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><b>Reset Password</b></h4>
            </div>
            <div class="panel-body">
                <form method="post" action="login.php">
                    <?php include('config/errors.php'); ?>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-control"  placeholder="New password" name="password" required = "true">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm your password" name="passmatch" required = "true">
                    </div>
                    <br>
                    <div class="form-group">
                        <button type="submit" name="change_password" class="btn btn-primary">Change</button><br><br>
                    </div>
                </form><br/>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>

    <?php include 'config/footerp.php'; ?>


</body>
</html>
