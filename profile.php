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
    <title>Profile</title>
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
</head>
<body style="background: #2e6da4">
    <div id="profilepage">
        <!--NAVIGATION BAR-->

        <?php include 'config/header.php';?>

        <!-- EDIT PROFILE PAGE-->

        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <div class="panel" id="displaypicture">
                    <img src="images/emptyuser.jpg" alt>
                </div>
            </div>
            <div class="col-md-7 col-md-offset-1">
                <div class="panel" id="editprofile">
                    <div class="panel-heading">
                        <p style="font-family: Lato; text-align: center">YOUR ACCOUNT</p>
                    </div>
                    <div id="details" class="panel-body">
                            Name:<p class="form-control">
                            <?php
                            $reg_no= $_SESSION['reg'];
                            $query="SELECT name FROM user WHERE regno='$reg_no';";
                            $result=mysqli_query($db,$query);
                            $row=mysqli_fetch_assoc($result);
                            $name=$row['name'];
                            echo $name;
                            ?></p>
                            <br><br>
                            E-mail:<p class="form-control">
                            <?php
                            $reg_no= $_SESSION['reg'];
                            $query="SELECT email FROM user WHERE regno='$reg_no';";
                            $result=mysqli_query($db,$query);
                            $row=mysqli_fetch_assoc($result);
                            $name=$row['email'];
                            echo $name;
                            ?></p>
                            <br><br>
                            Registration No.:<p class="form-control">
                            <?php
                            $reg_no= $_SESSION['reg'];
                            echo $reg_no;
                            ?></p>
                            <br><br>
                            Department:<p class="form-control">
                            <?php
                            $reg_no= $_SESSION['reg'];
                            $query="SELECT dept FROM user WHERE regno='$reg_no';";
                            $result=mysqli_query($db,$query);
                            $row=mysqli_fetch_assoc($result);
                            $name=$row['dept'];
                            echo $name;
                            ?></p>
                            <br><br>
                            Year:<p class="form-control">
                            <?php
                            $reg_no= $_SESSION['reg'];
                            $query="SELECT year FROM user WHERE regno='$reg_no';";
                            $result=mysqli_query($db,$query);
                            $row=mysqli_fetch_assoc($result);
                            $name=$row['year'];
                            echo $name;
                            ?></p>
                            <br>
                            </div>
                            <div id="editfooter" class="panel-footer">
                                <a style="text-decoration: none" href="settings.php">
                                    <button id="submitbutton" class="btn " type="submit">
                                    EDIT PROFILE
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
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
