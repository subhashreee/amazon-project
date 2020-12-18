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
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/elements.css" rel="stylesheet">
    <script src="js/react.min.js"></script>
    <script src="js/react-dom.min.js"></script>
    <script src="js/browser.min.js"></script>

    <style>
        p {
            font-family: Helvetica;
        }

        #info:hover {
            color: #2e6da4;
        }

        #download_file:hover {
            color: #2e6da4;
        }
    </style>
</head>
<body style="background-color: #2e6da4">
    <?php include 'config/header.php'; ?>
    <div class="content">
        <div class="row" style="margin-left: 100px;">
            <div id="verticalmenu" class="panel col-md-2">
                <div class="panel-heading">
                    <p style="font-family: Lato; font-size: 16px; text-align: center;">NOTES</p>
                </div>
                <ul class="panel-body"  style="height: auto;" id="options">
                    <?php
                    $path = "config/uploads/";
                    if ($handle = opendir($path)) {
                        while (false !== ($file = readdir($handle))) {
                            if ('.' === $file) continue;
                            if ('..' === $file) continue;
                            echo "<li style='padding: 0px; margin: 0px;'>
                                    <a id='download_file' href='".$path.$file."' download='download' style='font-size:12px; font-family: Helvetica;'>"
                                    .$file
                                    ."</a>
                                </li>";
                        }
                        closedir($handle);
                    }
                    ?>
                </ul>
            </div>

            <div class="col-md-7">
                <div id="postpanel" class="panel" style="align-items: center">
                    <?php

                    $post_id    = '';
                    $query      = '';
                    $result     = '';
                    $row        = '';

                    if (isset($_POST['view_button']) && isset($_SESSION['reg']))
                    {
                        $post_id = $_POST['post_id'];

                        $query = "SELECT title, content FROM blogpost WHERE postid = '$post_id'";
                        $result = mysqli_query($db, $query);
                        $row = mysqli_fetch_assoc($result);

                    }

                    ?>
                    <div class="panel-heading">
                        <p style="font-family: Lato; font-size: 22px;">
                            <?php echo $row['title'];?>
                        </p>
                    </div>
                    <div class="panel-body" style="height: auto;
                                                   font-size: 14px;
                                                   font-family: Helvetica;
                                                   font-weight: lighter;">
                            <?php echo $row['content'];?>
                    </div>
                </div>
                <a href='homepage.php'><button id='post' class='btn btn-primary' style='
                        background-color:black;
                        border-width: 0px;
                        border-radius: 20px;
                        padding: 7px 25px ;
                        font-size: 14px;
                        font-family: Helvetica;
                        color: white;'
                        href='homepage.php'>
                        Back
                </button></a>
            </div>

            <div id="tagpanel" class="panel col-md-2">
                <div class="panel-heading">
                    <p style="font-family: Lato; font-size: 16px; text-align: center;">ANNOUNCEMENTS</p>
                </div>
                <ul class="panel-body" id="tag" style="height: auto">
                    <?php
                        $query = "SELECT info FROM bloginfo /* WHERE date_time >= now() - INTERVAL 1 DAY */ ORDER BY date_time DESC;";
                        $result = mysqli_query($db, $query);

                        while($row = mysqli_fetch_assoc($result)){
                            echo "<li id='info' style='font-size:12px; font-family: Helvetica;'>".$row['info']."</li>";
                        }
                     ?>
                </ul>
            </div>
        </div>
        <?php include 'config/footerp.php'; ?>
        <script>
        function Logout() {
            var txt;
            alert("Are you sure you want to logout?");
            window.location.href = "login.php";
            // document.getElementById("demo").style.visibility="hidde                            n";
        }
        </script>
    </body>
</html>
