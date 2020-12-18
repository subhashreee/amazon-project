<?php
if (isset($_POST['login_user'])) {
    $reg = mysqli_real_escape_string($db, $_POST['reg']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($reg)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $pass = md5($password);
        $query = "SELECT * FROM user WHERE regno='$reg' AND password='$pass'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['reg'] = $reg;
            header('location: homepage.php');
        }
        else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}
 ?>
