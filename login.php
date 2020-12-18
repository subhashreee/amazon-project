<?php include('config/server.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/elements.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/header.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Enriqueta" rel="stylesheet">
    <script src="js/react.min.js"></script>
    <script src="js/react-dom.min.js"></script>
    <script src="js/browser.min.js"></script>
</head>
<body style="background-color: #2e6da4">
    <div id="loginpage" style="height: 100%" >
        <div class="container-fluid decor_bg" id="login-panel">
            <div class="row">
                <div class="col-md-4 col-md-offset-1">
                    <div id="logo">
                        <h1 style="font-family:Enriqueta; font-size: 128px"><b>connect in.</b></h1>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>LOGIN</b></h4>
                        </div>
                        <div class="panel-body">
                            <form method="post" action="login.php">
                                <?php include('config/errors.php'); ?>
                                <br>
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Registration Number" name="reg" required = "true">
                                </div>
                                <br>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                </div>
                                <br>
                                <div class="form-group">
                                    <button type="submit" name="login_user" class="btn btn-primary">Login</button><br><br>
                                </div>
                            </form><br/>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="register.php">Register</a><br><a href="javascript:ChangePassword()">Forgot Password</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'config/footerp.php';?>

    <script>
    function ChangePassword() {
        var txt;
        var person = prompt("Please enter your registered email-id:");

        confirm("Please click the link sent to your email id");

        document.getElementById("demo").innerHTML = person;
        // document.getElementById("demo").style.visibility="hidden";
    }
</script>
<script type="text/babel">
ReactDOM.render(
    document.getElementById('loginpage')
    document.getElementById('container')
);</script>
</body>
</html>
