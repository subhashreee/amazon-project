<?php
session_start();

$name           = "";
$email          = "";
$reg            = "";
$year           = "";
$dept           = "";
$password_1     = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'amazon-project');

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

if (isset($_POST['edit_user']) && isset($_SESSION['reg'])) {

    $reg=$_SESSION['reg'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $year = $_POST['year'];
    $dept = $_POST['dept'];

    $query = "UPDATE user SET name='$name', email='$email', year='$year', dept='$dept' WHERE regno='$reg';";
    $result = mysqli_query($db, $query);
    if($result){
        header('location: ../profile.php');
    }
    else {
        echo "<script>alert('".mysqli_error($db)."')</script>";
    }
}

if (isset($_POST['save_info']) && isset($_SESSION['reg'])) {

    $reg=$_SESSION['reg'];
    $info=trim($_POST['info']);

    $query = "INSERT INTO bloginfo(regno, info) VALUES ('$reg','$info');";
    $result = mysqli_query($db, $query);

    if($result){
        header('location: ../homepage.php');
    }
    else {
        echo "<script>alert('".mysqli_error($db)."')</script>";
    }
}

if (isset($_POST['save_post']) && isset($_SESSION['reg']))
{
    $reg = $_SESSION['reg'];
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    $query = "INSERT INTO blogpost (regno, content, title) VALUES ('$reg','$content','$title')";
    $result = mysqli_query($db, $query);

    if($result){
        header('location: homepage.php');
    }
    else {
        echo "<script>alert('".mysqli_error($db)."')</script>";
    }
}

if (isset($_POST['upload_note']) && isset($_SESSION['reg']))
{
    $target_dir = "uploads/";
    $target_file = $target_dir.basename($_FILES['file_name']['name']);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        echo "<script>alert('File already exists!')</script>";
        $uploadOk = 0;
    }

    if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "pdf" && $fileType != "docx" && $fileType != 'txt') {
        echo "<script>alert('Invalid File type!')</script>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "<script>alert('Error Uploading file!')</script>";
    }
    else {
        if (move_uploaded_file($_FILES['file_name']['tmp_name'], $target_file)) {
            echo "<script>alert('File uploaded successfully!')</script>";
            header('location: ../homepage.php');
        }
        else {
            echo "<script>alert('".$_FILES['file_name']['error']."')</script>";
        }
    }
}

?>
