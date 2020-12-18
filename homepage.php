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
    <meta http-equiv="refresh" content="5">
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
                            echo "<li style='padding: 0px; margin: 5px; font-weight: lighter;'>
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
                    <div class="panel-heading">
                        <p style="font-family: Lato; font-size: 22px; text-align: center;">LATEST POSTS</p>
                    </div>
                    <div class="panel-body" style="height: auto;">
                        <?php
                            $query = "SELECT postid, title, content FROM blogpost WHERE date_time >= now() - INTERVAL 1 WEEK ORDER BY date_time DESC;";
                            $result = mysqli_query($db, $query);

                            while($row = mysqli_fetch_assoc($result)){
                                echo
                                "<p><h3 style='color: #2e6da4; font-family: Lato;'>".$row['title']."</h3></p>
                                <p style='font-weight: lighter;'>".substr($row['content'], 0, 280)."...</p>
                                <br>
                                <form action='view-post.php' method='POST'>
                                <input type='hidden' name='post_id' value=".$row['postid'].">
                                <button id='post' class='btn btn-primary' type='submit' name='view_button' style='
                                        background-color:black;
                                        border-width: 0px;
                                        border-radius: 20px;
                                        padding: 7px 25px ;
                                        font-size: 14px;
                                        font-family: Helvetica;
                                        color: white;'>
                                    View
                                </button>
                                </form>
                                <br><br>
                                ";
                            }
                         ?>
                    </div>
                </div>
            </div>

            <div id="tagpanel" class="panel col-md-2">
                <div class="panel-heading">
                    <p style="font-family: Lato; font-size: 16px; text-align: center;">ANNOUNCEMENTS</p>
                </div>
                <ul class="panel-body" id="tag" style="height: auto; font-weight: lighter;">
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
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class = "error success" >
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['reg'])) : ?>
            <p>
                Welcome <strong ><?php echo $_SESSION['reg']; ?> < /strong></p >
                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?>
        </body>
        </html>
