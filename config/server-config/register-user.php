<?php
if (isset($_POST['register_user'])) {
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $reg = mysqli_real_escape_string($db, $_POST['reg']);
    if (isset($_POST['year'])) {
        $year = $_POST['year'];
    }
    if (isset($_POST['dept'])) {
        $dept = $_POST['dept'];
    }
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $passmatch = mysqli_real_escape_string($db, $_POST['passmatch']);

    if (empty($name)) { array_push($errors, "Name is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $passmatch) {
        array_push($errors, "The two passwords do not match");
    }

    $user_check_query = "SELECT * FROM user WHERE email='$email' OR regno='$reg' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['regno'] === $reg) {
            array_push($errors, "User already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    if (count($errors) == 0) {
        $pass = md5($password_1);

        $query = "INSERT INTO user (regno, name, email, password, year, dept) VALUES('$reg', '$name', '$email', '$pass', '$year', '$dept')";
        $result = mysqli_query($db, $query);
        $_SESSION['reg'] = $reg;
        $_SESSION['name'] = $name;

        if($result){
            header('location: homepage.php');
        }
        else {
            echo "<script>alert('".mysqli_error($db)."')</script>";
        }    }
}
 ?>
