<?php
if (isset($_POST['save_post']) && isset($_SESSION['reg']))
{
    $reg = $_SESSION['reg'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    $query = "INSERT INTO blogpost (regno, content, title) VALUES ('$reg','$content','$title')";
    $result = mysqli_query($db, $query);

    if($result){
        header('location: ../homepage.php');
    }
    else {
        echo "<script>alert('".mysqli_error($db)."')</script>";
    }
}

 ?>
