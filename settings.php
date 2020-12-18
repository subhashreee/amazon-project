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
    <title>Edit Profile</title>
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
    <div id="settingpage">
        <?php include 'config/header.php';?>

        <div class="row">
            <div class="col-md-2 col-md-offset-1">
                <div class="panel" id="changepicture">
                    <div class="panel-body" style="margin: 0px; padding: 0px;">
                        <form action='config/server.php' method='POST'>
                            <img style="height: 240px; width: 240px;" src="images/emptyuser.jpg" alt>
                            <a style="text-decoration: none;">
                                <button id="changebutton" class="btn " type="submit" name="change_profile_button" style="padding-top: 12px; color: #FFFFFF">
                                    CHANGE PICTURE
                                </button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
                <div class="col-md-7 col-md-offset-1">
                    <div class="panel" id="editprofile">
                        <form action="config/server.php" method="POST">
                            <div class="panel-heading">
                                <p style="font-family: Lato; text-align: center">YOUR ACCOUNT</p>
                            </div>
                            <div id="newdetails" class="panel-body" style="font-family: Lato; font-size: 18px;">
                                Name:<input class="form-control" name="name" style="width: 500px;" value="<?php
                                $reg_no= $_SESSION['reg'];
                                $query="SELECT name FROM user WHERE regno='$reg_no';";
                                $result=mysqli_query($db,$query);
                                $row=mysqli_fetch_assoc($result);
                                $name=$row['name'];
                                echo $name;
                                ?>">
                                <br><br><br>
                                E-mail:<input class="form-control" name="email" style="width: 500px;" value="<?php
                                $reg_no= $_SESSION['reg'];
                                $query="SELECT email FROM user WHERE regno='$reg_no';";
                                $result=mysqli_query($db,$query);
                                $row=mysqli_fetch_assoc($result);
                                $name=$row['email'];
                                echo $name;
                                ?>">
                                <br><br><br>
                                Registration No.:<p class="form-control" style="width: 500px;">
                                <?php
                                $reg_no= $_SESSION['reg'];
                                echo $reg_no;
                                ?></p>
                                <br><br><br>
                                <div class="form-group">
                                    Department:
                                    <select class="form-control" name="dept" style="width: 500px;">
                                        <option selected value="
                                            <?php
                                            $reg_no= $_SESSION['reg'];
                                            $query="SELECT dept FROM user WHERE regno='$reg_no';";
                                            $result=mysqli_query($db,$query);
                                            $row=mysqli_fetch_assoc($result);
                                            $name=$row['dept'];
                                            echo $name;
                                            ?>">
                                            <?php
                                            $reg_no= $_SESSION['reg'];
                                            $query="SELECT dept FROM user WHERE regno='$reg_no';";
                                            $result=mysqli_query($db,$query);
                                            $row=mysqli_fetch_assoc($result);
                                            $name=$row['dept'];
                                            echo $name;
                                            ?>
                                        </option>
                                        <option>Computer Science and Engineering</option>
                                        <option>Electronics and Communication Engineering</option>
                                        <option>Electronics and Instrumentation Engineering</option>
                                        <option>Electrical and Electronics Engineering</option>
                                        <option>Information Technology</option>
                                        <option>Software Engineering</option>
                                        <option>Mechanical Engineering</option>
                                        <option>Biotechnology</option>
                                        <option>Genetics</option>
                                        <option>Chemical Engineering</option>
                                        <option>Biomedical Engineering</option>
                                        <option>Automobile Engineering</option>
                                        <option>Aerospace Engineering</option>
                                        <option>Mechatronics</option>
                                        <option>Nanotechnology</option>
                                    </select>
                                </div>
                                <br>
                                <div class="form-group">
                                    Year:
                                    <select class="form-control" name="year" style="width: 500px;">
                                        <option selected value="
                                        <?php
                                        $reg_no= $_SESSION['reg'];
                                        $query="SELECT year FROM user WHERE regno='$reg_no';";
                                        $result=mysqli_query($db,$query);
                                        $row=mysqli_fetch_assoc($result);
                                        $name=$row['year'];
                                        echo $name;
                                        ?>">
                                            <?php
                                            $reg_no= $_SESSION['reg'];
                                            $query="SELECT year FROM user WHERE regno='$reg_no';";
                                            $result=mysqli_query($db,$query);
                                            $row=mysqli_fetch_assoc($result);
                                            $name=$row['year'];
                                            echo $name;
                                            ?>
                                        </option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                            </div>
                            <div id="editfooter" class="panel-footer">
                                <a style="text-decoration: none">
                                    <button id="submitbutton" class="btn " type="submit" name="edit_user">
                                        SAVE PROFILE
                                    </button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'config/footerp.php';?>

        <script type="text/babel">
        ReactDOM.render(
            document.getElementById('settingpage'),
            document.getElementById('container')
        );
        </script>
    </body>
    </html>
