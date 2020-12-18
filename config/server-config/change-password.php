<?php
if (isset($_POST['change_password']) && isset($_SESSION['reg']))
{
    $reg=$_SESSION['reg'];
    $password=$_POST['password'];
    $password_1=$_POST['passmatch'];

    if ($password_1 != $password) {
        array_push($errors, "The two passwords do not match");
        echo "<script>if(!alert('The passwords must match')){window.location='changep.php';}</script>";
    }
    $pass=md5($password);

    $query="UPDATE user SET password='$pass' WHERE regno='$reg'";

    if(mysqli_query($db,$query)){
        session_destroy();
        header('location:login.php');
    }
    else {
        echo "<script>alert('".mysqli_error($db)."')</script>";
    }
}

 ?>
